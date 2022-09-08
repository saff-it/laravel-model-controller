@extends('layouts.main')

@section('main-content')

    <div>
        <ul>
            @foreach ($movies as $movie)
                {{$movie -> id}} - {{$movie -> title}}
            @endforeach
        </ul>
    </div>
@endsection
