@extends('layouts.main')

@section('main-content')
    <div>
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie -> title}}</h5>
                    <p class="card-text">Il titolo originale di questo film era {{$movie -> original_title}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
