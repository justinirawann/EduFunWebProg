@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h1 class="card-title mb-0">{{ $post->title }}</h1>
                </div>
                <div class="card-body">
                    <div class="text-muted mb-3">
                        <i class="fas fa-user"></i> By: <a href="/writers/{{ $post->writer->id }}" class="text-decoration-none">{{ $post->writer->name }}</a>
                        <span class="mx-2">|</span>
                        <i class="fas fa-folder"></i> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        <span class="mx-2">|</span>
                        <i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                    </div>
                    <hr>
                    <div class="content">
                        {!! $post->body !!}
                    </div>
                </div>
            </article>
            
            <div class="mt-4">
                <a href="/" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </div>
@endsection