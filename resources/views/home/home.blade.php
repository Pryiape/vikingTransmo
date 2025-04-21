<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall de la Mode</title>
    <style>
        body {
            background-color: #0e0e0e;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .public-builds {
            margin: 40px;
        }

        .build-card {
            background-color: white;
            color: black;
            border: 1px solid #333;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .build-card h3 {
            margin-top: 0;
        }

        .build-card p {
            margin-bottom: 10px;
        }

        .build-card a {
            color: #00ff00;
            text-decoration: none;
        }

        .build-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    {{-- Inclusion de la barre de navigation --}}
    @include('navBar.navBar')

    {{-- Titre principal de la page --}}
    <h1 style="text-align:center;">Builds Publics</h1>

    {{-- Liste des builds publics --}}
    <div class="public-builds">
        @forelse($publicBuilds as $build)
            <div class="build-card">
                {{-- Sujet du build --}}
                <h3>{{ $build->sujet }}</h3>
                {{-- Description du build --}}
                <p>{{ $build->description }}</p>
                {{-- Lien vers la page détaillée du build --}}
                <a href="{{ route('builds.show', $build) }}">Voir le build</a>
            </div>
        @empty
            {{-- Message affiché si aucun build public n'est disponible --}}
            <p>Aucun build public disponible.</p>
        @endforelse 
    </div>
    {{-- Inclusion du pied de page --}}
    @include('components.footer')
</body>
</html>
