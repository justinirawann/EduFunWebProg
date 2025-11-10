@extends('layouts.main')

@section('container')
    <div class="hero-section bg-primary text-white text-center py-5 mb-5 rounded">
        <h1 class="display-4 fw-bold">EduFun</h1>
        <p class="lead">Discover Amazing Educational Content</p>
    </div>

    <h2 class="mb-4 text-center">Latest Articles</h2>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                        </h5>
                        <div class="text-muted small mb-2">
                            <i class="fas fa-user"></i> By: <a href="/writers/{{ $post->writer->id }}" class="text-decoration-none">{{ $post->writer->name }}</a>
                            <br>
                            <i class="fas fa-folder"></i> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                            <br>
                            <i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                        </div>
                        <p class="card-text flex-grow-1">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection