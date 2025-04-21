@extends('layouts.app')

@section('title', $build->sujet)

@section('content')
<div class="container">
    {{-- Titre du build --}}
    <h1 class="mb-4">{{ $build->sujet }}</h1>

    {{-- Description du build --}}
    <p>{{ $build->description }}</p>

    {{-- Affichage de l'image du build si disponible --}}
    @if ($build->image)
        <img src="{{ asset('storage/' . $build->image) }}" alt="Image du build" class="img-fluid mb-4">
    @endif

    {{-- Bouton pour revenir à la liste des builds --}}
    <a href="{{ route('builds.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
