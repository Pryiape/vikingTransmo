@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $build->sujet }}</h1>
    <p>{{ $build->description }}</p>
     @if ($build->image)
    <div class="mb-3">
        <img src="{{ asset('storage/' . $build->image) }}" alt="Image du build" class="img-fluid rounded">
    </div>
@endif
    <p>Status: {{ $build->is_public ? 'Public' : 'Private' }}</p>
    <a href="{{ route('builds.index') }}" class="btn btn-secondary">Back to Builds</a>
   

</div>

@endsection
