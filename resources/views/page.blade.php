@extends('layouts.base')

@section('pageTitle', 'Home page')

@section('content')

<h1>Film</h1>

<ul>

    @foreach ($movies as $movie)
        <li>
            {{$movie->id}} - {{$movie->title}} - {{$movie->oriinal_title}}-{{$movie->date}}-{{$movie->date}}
        </li>
    @endforeach
    
</ul>



@endsection