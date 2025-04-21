<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\ProfileController;

/**
 * @group Pages publiques
 */

/**
 * Affiche la page d'accueil avec les builds publics.
 */
Route::get('/', [HomeController::class, 'home'])->name('app_home');

/**
 * Affiche la page "À propos".
 */
Route::get('/a-propos', [HomeController::class, 'about'])->name('app_about');

/**
 * @group Authentification
 */

/**
 * Affiche le formulaire de connexion.
 */
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

/**
 * Traite la soumission du formulaire de connexion.
 */
Route::post('/login', [LoginController::class, 'login']);

/**
 * Déconnecte l'utilisateur.
 */
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/**
 * Affiche le formulaire d'inscription.
 */
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');

/**
 * Traite la soumission du formulaire d'inscription.
 */
Route::post('/register', [RegisterController::class, 'register'])->name('register');

/**
 * Vérifie si un email existe déjà.
 */
Route::post('/existEmail', [LoginController::class, 'existEmail'])->name('app_existEmail');

/**
 * @group Dashboard protégé
 * @authenticated
 */

/**
 * Affiche le tableau de bord.
 */
Route::match(['get', 'post'], '/dashboard', [HomeController::class, 'dashboard'])
    ->name('app_dashboard')
    ->middleware('auth');

/**
 * @group Builds
 * @authenticated
 */

/**
 * Affiche la liste des builds, formulaire de création, stockage et affichage d'un build.
 */
Route::resource('builds', BuildController::class)->only(['index', 'create', 'store', 'show']);

/**
 * Routes protégées pour les builds (édition, mise à jour, suppression).
 */
Route::middleware(['auth'])->group(function () {
    Route::resource('builds', BuildController::class);
});

/**
 * @group Profil utilisateur
 * @authenticated
 */

/**
 * Affiche le profil utilisateur.
 */
Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('app_profile', [ProfileController::class, 'show'])->name('app_profile'); // Define the app_profile route
});

/**
 * Affiche la page des mentions légales.
 */
Route::view('/mentions-legales', 'legal')->name('legal');
