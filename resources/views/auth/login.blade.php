@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
   <div class="container">
        {{-- Formulaire de connexion --}}
        <div class="row">
            <div class="col-md-6 mx-auto">
                {{-- Titre de la page --}}
                <h1 class="text-center text-muted mb-3 mt-5">Veuillez vous connecter</h1>
                <p class="text-center text-muted mb-5">Vos builds vous attendent</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    {{-- Champ email --}}
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    {{-- Champ mot de passe --}}
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror" required>
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    {{-- Case à cocher "Rester connecté" --}}
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Rester connecté</label>
                        </div>
                    </div>

                    {{-- Bouton de connexion --}}
                    <button type="submit" class="btn btn-primary">Connexion</button>

                    {{-- Lien vers la page d'inscription --}}
                    <p class="text-center text-muted mt-5">Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a></p>
                </form>
            </div>
        </div>
   </div>
@endsection
