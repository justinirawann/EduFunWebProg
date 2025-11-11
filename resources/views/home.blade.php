@extends('layouts.main')

@section('container')
<div class="mt-4">
    <div class="hero-section text-white text-center py-5 mb-5 rounded position-relative" style="background: linear-gradient(rgba(0,123,255,0.8), rgba(0,123,255,0.8)), url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mx-auto">
                    <h1 class="display-3 fw-bold mb-4">
                        <i class="fas fa-graduation-cap me-3"></i>EduFun
                    </h1>
                    <p class="lead fs-4 mb-4">Discover Amazing Educational Content</p>
                    <p class="mb-4">Explore our collection of educational articles written by expert educators</p>
                    <a href="#articles" class="btn btn-light btn-lg px-4 py-2 rounded-pill smooth-scroll">
                        <i class="fas fa-arrow-down me-2"></i>Explore Articles
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="articles">
        <h2 class="mb-4 text-center">
            <i class="fas fa-newspaper me-2 text-primary"></i>Latest Articles
        </h2>
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
    </div>
</div>
@endsection