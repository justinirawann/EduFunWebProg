@extends('layouts.main')

@section('container')
    <div class="row mt-3">
        @foreach ($posts as $post)
            <div class="col-lg-6 mb-4">
                <div class="card post-card h-100 shadow-sm border-0 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            @php
                                $imageUrl = '';
                                if(str_contains(strtolower($post->title), 'hci') || str_contains(strtolower($post->title), 'human') || str_contains(strtolower($post->title), 'interaction')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains(strtolower($post->title), 'user experience') || str_contains(strtolower($post->title), 'ux')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains(strtolower($post->title), 'immersive') || str_contains(strtolower($post->title), 'vr') || str_contains(strtolower($post->title), 'ar')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1592478411213-6153e4ebc696?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains(strtolower($post->title), 'pattern') || str_contains(strtolower($post->title), 'design')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains(strtolower($post->title), 'agile') || str_contains(strtolower($post->title), 'scrum')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains(strtolower($post->title), 'code') || str_contains(strtolower($post->title), 'reengineering')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } else {
                                    $imageUrl = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                }
                            @endphp
                            
                            <img src="{{ $imageUrl }}" 
                                 class="img-fluid h-100 w-100" 
                                 alt="{{ $post->title }}" 
                                 style="object-fit: cover;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div>
                                    <h5 class="card-title fw-bold text-primary mb-3">{{ $post->title }}</h5>
                                    
                                    <div class="text-muted small mb-3">
                                        <i class="fas fa-user me-1"></i>
                                        By: <a href="/writers/{{ $post->writer->id }}" class="text-decoration-none">{{ $post->writer->name }}</a>
                                        <br>
                                        <i class="fas fa-clock me-1"></i>
                                        {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                                    </div>
                                    
                                    <p class="card-text text-muted mb-3">{{ $post->excerpt }}</p>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm px-3 py-2 rounded-pill">
                                        <i class="fas fa-arrow-right me-1"></i>Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    @if($posts->isEmpty())
        <div class="text-center py-5">
            <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No articles found in this category</h4>
            <p class="text-muted">Check back later for new content!</p>
        </div>
    @endif

    <style>
        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }
        
        .post-card img {
            transition: transform 0.3s ease;
        }
        
        .post-card:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection