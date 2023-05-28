@extends('layouts.auth')

@section('content')

<div class="container">
    <h1 class="mb-3">Type #{{$type->id}}</h1>

    <h3 class="mb-3">Name: {{$type->name}}</h3>
    <h3 class="mb-3">Slug: {{$type->slug}}</h3>
    <h3 class="mb-3">Projects:</h3>

    @if (count($type->projects) > 0)

    <p>
        @foreach ($type->projects as $project)

        {{$project->title}}
        
        @endforeach
    </p>

    @else 

    None
        
    @endif


</div>
    
@endsection