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
    @include('navBar.navBar')

    <h1 style="text-align:center;">Builds Publics</h1>

    <div class="public-builds">
        @forelse($publicBuilds as $build)
            <div class="build-card">
                <h3>{{ $build->sujet }}</h3>
                <p>{{ $build->description }}</p>
                <a href="{{ route('builds.show', $build) }}">Voir le build</a>
            </div>
        @empty
            <p>Aucun build public disponible.</p>
        @endforelse 
    </div>
</body>
</html>
