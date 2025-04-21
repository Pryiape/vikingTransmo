@extends('layouts.app')

@section('title', 'Créer un Build')

@section('content')
<div class="container">
    {{-- Titre principal de la page --}}
    <h1 class="text-center">Créer un Build</h1>

    {{-- Formulaire de création d'un nouveau build --}}
    <form action="{{ route('builds.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Champ sujet obligatoire --}}
        <div class="form-group mb-3">
            <label for="sujet">Sujet *</label>
            <input type="text" name="sujet" id="sujet" class="form-control" required>
        </div>

        {{-- Champ description obligatoire --}}
        <div class="form-group mb-3">
            <label for="description">Description *</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>

        {{-- Champ image optionnelle (PNG ou JPG) --}}
        <div class="form-group mb-3">
            <label for="image">Image (PNG ou JPG)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">
        </div>

        {{-- Case à cocher pour rendre le build public --}}
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_public" id="is_public" value="1">
            <label class="form-check-label" for="is_public">Rendre ce build public</label>
        </div>

        {{-- Bouton de soumission --}}
        <button type="submit" class="btn btn-primary">Enregistrer le Build</button>
    </form>
</div>
@endsection
