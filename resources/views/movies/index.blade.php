@extends('layouts.main')

@section('main-content')
    <div class="container ms_card-cont my-5">
        @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie -> title}}</h5>
                    <p class="card-text">Il titolo originale di questo film era {{$movie -> original_title}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
