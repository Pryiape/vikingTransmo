<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Importation de la façade Storage
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    /**
     * Affiche le profil de l'utilisateur connecté.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        $activities = $user->activities ?? []; // S'assure que activities est un tableau
        return view('profile.show', compact('user', 'activities'));
    }

    /**
     * Affiche le formulaire d'édition du profil.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Met à jour le profil de l'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'profile_picture' => 'nullable|image|mimes:jpeg,png|max:2048', // Validation de l'image
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['name', 'email']);

        if ($request->hasFile('profile_picture')) {
            // Supprime l'ancienne photo de profil si elle existe
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            // Stocke la nouvelle photo de profil
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }
        $user = Auth::user();

        $user->update($data);

        return redirect()->route('profile.show')->with('success', 'Profil mis à jour avec succès.');
    }
}
