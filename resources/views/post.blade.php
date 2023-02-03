@extends('layouts.main')

@section('container')
    
        <h2>{{ $post->title }}</h2>

        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></p>


        {!! $post->body !!}

        <a class="d-block mt-3" href="/blog">Back To Posts</a>
@endsection