<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // Contrôleur pour la page d'accueil (vue home.blade.php)
    /**
     * Affiche la page d'accueil avec les builds publics.
     *
     * @group Pages publiques
     * @response 200 {
     *  "publicBuilds": [
     *      {
     *          "id": 1,
     *          "sujet": "Exemple de build",
     *          "description": "Description du build",
     *          "is_public": true
     *      }
     *  ]
     * }
     * @return \Illuminate\View\View
     */
    public function home()
    {    
        // Récupère les builds publics les plus récents
        $publicBuilds = \App\Models\Build::where('is_public', true)->latest()->get();
        
        return view('home.home', [
            'publicBuilds' => $publicBuilds,
        ]);
    }

    /**
     * Affiche la page d'accueil alternative avec les builds publics.
     *
     * @group Pages publiques
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $publicBuilds = \App\Models\Build::where('is_public', true)->latest()->get();

        return view('home', compact('publicBuilds'));
    }

    /**
     * Affiche la page "À propos".
     *
     * @group Pages publiques
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('home.about');
    }

    // Contrôleur pour la page du tableau de bord (vue dashboard.blade.php)
    /**
     * Retourne la vue du tableau de bord.
     *
     * @group Dashboard protégé
     * @authenticated
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('home.dashboard');
    }
}
