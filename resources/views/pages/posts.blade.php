@extends('layouts.app')

@section('container')
    <h1>Halaman Blog</h1><br>

    @foreach ($Blog_Posts as $post)
        <article>
            {{-- <h2><a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2> --}}
            <h2><a href="{{ route('post.show', $post['slug']) }}">{{ $post['title'] }}</a></h2>
            <p>{{ $post['author'] }}</p>
            <p>{{ $post['body'] }}</p>
        </article>        
    @endforeach
@endsection