@extends('app')

@section('content')

    <h2>Projects</h2>

    @if(!$projects->count())

        <p>You have no projects.</p>

    @else

        <ul>

            @foreach($projects as $project)

                <li><a href="{{ route('projects.show', $project->slug)  }}">{{ $project->name }}</a></li>

            @endforeach

        </ul>

    @endif

@endsection