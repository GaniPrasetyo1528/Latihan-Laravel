@extends('layouts.app')

@section('container')
    @foreach ($new_post as $post)
        <article>
            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['author'] }}</p>
            <p>{{ $post['body'] }}</p>
        </article>
        <h2><a href="{{ route('posts') }}">Back</a></h2>
    @endforeach
@endsection