<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //la page / vue home.blade.php
    /**
     * Récupère les données de jeu et les spécialisations, puis passe les données à la vue home.
     */
    public function home()
    {    
        // Fetch public builds
        $publicBuilds = \App\Models\Build::where('is_public', true)->latest()->get();
        
        return view('home.home', [
            'publicBuilds' => $publicBuilds,
        ]);
    }

    public function index()
    {
        $publicBuilds = \App\Models\Build::where('is_public', true)->latest()->get();

        return view('home', compact('publicBuilds'));
    }

    //la page / vue dashboard.blade.php
    /**
     * Retourne la vue du tableau de bord.
     */
    public function dashboard()
    {
        return view('home.dashboard');
    }
}
