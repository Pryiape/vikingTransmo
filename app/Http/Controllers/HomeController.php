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
     * 
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
    public function about()
    {
    return view('home.about');
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
