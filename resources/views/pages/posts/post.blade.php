@extends('layouts.app')

@section('container')
        <article>
            <h1>{{ $posts['title'] }}</h1>
            <p>{{ $posts['author'] }}</p>
            <p>{{ $posts['body'] }}</p>
        </article>
        <h2><a href="{{ route('posts') }}">Back</a></h2>
@endsection