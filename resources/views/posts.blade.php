@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1> @foreach ($posts as $post)
        <article class="mb-5">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}">read more...</a>
        </article>
    @endforeach
@endsection