@extends('layouts.app')

@section('title', 'Modifier le Build')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier le Build</h1>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups !</strong> Des erreurs ont été trouvées :
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('builds.update', $build) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="sujet" class="form-label">Sujet *</label>
            <input type="text" name="sujet" id="sujet" class="form-control" value="{{ old('sujet', $build->sujet) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description *</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $build->description) }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_public" id="is_public" value="1"
                {{ old('is_public', $build->is_public) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_public">Rendre ce build public</label>
        </div>

        @if ($build->image)
            <div class="mb-3">
                <label class="form-label d-block">Image actuelle :</label>
                <img src="{{ asset('storage/' . $build->image) }}" alt="Image du build" class="img-fluid rounded mb-2" style="max-height: 300px;">
            </div>
        @endif

        <div class="mb-3">
            <label for="image" class="form-label">Remplacer l’image (PNG ou JPG)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('builds.show', $build) }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
