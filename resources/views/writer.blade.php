@extends('layouts.main')

@section('container')
    <div class="row mt-3">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow border-0 mb-4">
                <div class="card-body p-5 text-center">
                    <div class="writer-profile mb-4">
                        <img src="https://randomuser.me/api/portraits/{{ rand(0,1) ? 'men' : 'women' }}/{{ $writer->id + 10 }}.jpg" 
                             class="rounded-circle shadow mb-3" 
                             alt="{{ $writer->name }}" 
                             style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;">
                        <h2 class="fw-bold text-primary">{{ $writer->name }}</h2>
                        <p class="text-muted mb-3">
                            <i class="fas fa-star text-warning me-1"></i>
                            {{ $writer->specialty }}
                        </p>
                        <div class="writer-stats">
                            <span class="badge bg-primary me-2">
                                <i class="fas fa-newspaper me-1"></i>
                                {{ $writer->posts->count() }} Articles
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="mb-4 text-center">Articles by {{ $writer->name }}</h3>
        </div>
    </div>

    <div class="row">
        @forelse ($posts as $post)
            <div class="col-lg-6 mb-4">
                <div class="card post-card h-100 shadow-sm border-0 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            @php
                                $imageUrl = '';
                                $titleLower = strtolower($post->title);
                                if(str_contains($titleLower, 'pattern') && str_contains($titleLower, 'software')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains($titleLower, 'agile')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains($titleLower, 'code') && str_contains($titleLower, 'reengineering')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains($titleLower, 'hci') || str_contains($titleLower, 'human') || str_contains($titleLower, 'interaction')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains($titleLower, 'user experience') || str_contains($titleLower, 'ux')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
                                } elseif(str_contains($titleLower, 'immersive') || str_contains($titleLower, 'vr') || str_contains($titleLower, 'ar')) {
                                    $imageUrl = 'https://images.unsplash.com/photo-1592478411213-6153e4ebc696?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
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
                                        <i class="fas fa-folder me-1"></i>
                                        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
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
        @empty
            <div class="col-12 text-center py-5">
                <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No articles found</h4>
                <p class="text-muted">This writer hasn't published any articles yet.</p>
            </div>
        @endforelse
    </div>

    <div class="text-center mt-4">
        <a href="/writers" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Back to Writers
        </a>
    </div>

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