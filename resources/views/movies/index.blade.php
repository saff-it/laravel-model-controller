@extends('layouts.main')

@section('main-content')

    <div>
        <ul>
            @foreach ($movies as $movie)
            <li>
                {{$movie -> id}} - {{$movie -> title}}
            </li>
                
            @endforeach
        </ul>
    </div>

@endsection