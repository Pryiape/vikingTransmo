<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BuildController extends Controller
{
    /**
     * Affiche la liste des builds de l'utilisateur connecté.
     */
    public function index()
    {
        // Récupère uniquement les builds de l'utilisateur connecté
        $builds = Build::where('user_id', Auth::id())->latest()->get();

        return view('builds.index', compact('builds'));
    }

    /**
     * Affiche le formulaire de création d'un nouveau build.
     */
    public function create()
    {
        return view('builds.create');
    }

    /**
     * Enregistre un nouveau build en base de données.
     */
    public function store(Request $request)
    {
        // Validation des champs du formulaire
        $validated = $request->validate([
            'sujet' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_public' => 'nullable|boolean',
        ]);

        // Création du build
        $build = new Build();
        $build->sujet = $validated['sujet'];
        $build->description = $validated['description'];
        $build->is_public = $request->has('is_public');
        $build->user_id = Auth::id();

        // Traitement de l'image si présente
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('builds', 'public');
            $build->image = $path;
        }

        $build->save();

        return redirect()->route('builds.show', $build)->with('success', 'Build créé avec succès !');
    }

    /**
     * Affiche un build spécifique.
     */
    public function show(Build $build)
    {
        // On peut ici ajouter une vérification d'accès si besoin
        return view('builds.show', compact('build'));
    }

    /**
     * Affiche le formulaire d'édition d’un build.
     */
    public function edit(Build $build)
    {
        // Vérifie que l'utilisateur peut éditer ce build
        if ($build->user_id !== Auth::id()) {
            abort(403);
        }

        return view('builds.edit', compact('build'));
    }

    /**
     * Met à jour un build existant.
     */
    public function update(Request $request, Build $build)
    {
        // Vérifie que l'utilisateur peut modifier ce build
        if ($build->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'sujet' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_public' => 'nullable|boolean',
        ]);

        $build->sujet = $validated['sujet'];
        $build->description = $validated['description'];
        $build->is_public = $request->has('is_public');

        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if ($build->image) {
                Storage::disk('public')->delete($build->image);
            }

            $build->image = $request->file('image')->store('builds', 'public');
        }

        $build->save();

        return redirect()->route('builds.show', $build)->with('success', 'Build mis à jour avec succès !');
    }
}
