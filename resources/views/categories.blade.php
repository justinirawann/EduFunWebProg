@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-3">
        @foreach ($categories as $category)
            <div class="col-lg-6 col-md-8 mb-4">
                <div class="card category-card h-100 shadow-lg border-0 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            @if($category->slug == 'interactive-multimedia')
                                <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                     class="img-fluid h-100 w-100" 
                                     alt="Interactive Multimedia" 
                                     style="object-fit: cover;">
                            @elseif($category->slug == 'software-engineering')
                                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                     class="img-fluid h-100 w-100" 
                                     alt="Software Engineering" 
                                     style="object-fit: cover;">
                            @else
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                     class="img-fluid h-100 w-100" 
                                     alt="{{ $category->name }}" 
                                     style="object-fit: cover;">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div>
                                    <h4 class="card-title fw-bold text-primary mb-3">
                                        @if($category->slug == 'interactive-multimedia')
                                            <i class="fas fa-desktop me-2"></i>
                                        @elseif($category->slug == 'software-engineering')
                                            <i class="fas fa-code me-2"></i>
                                        @else
                                            <i class="fas fa-tag me-2"></i>
                                        @endif
                                        {{ $category->name }}
                                    </h4>
                                    
                                    <p class="card-text text-muted mb-3">
                                        @if($category->slug == 'interactive-multimedia')
                                            Explore the world of interactive media, user interfaces, and digital experiences that engage and inspire users.
                                        @elseif($category->slug == 'software-engineering')
                                            Dive into software development practices, programming concepts, and engineering principles for building robust applications.
                                        @else
                                            Discover educational content in this category.
                                        @endif
                                    </p>
                                    
                                    <div class="category-stats mb-3">
                                        <small class="text-muted">
                                            <i class="fas fa-newspaper me-1"></i>
                                            {{ $category->posts->count() }} Articles Available
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="/categories/{{ $category->slug }}" class="btn btn-primary px-4 py-2 rounded-pill">
                                        <i class="fas fa-arrow-right me-1"></i>Explore Articles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }
        
        .category-card img {
            transition: transform 0.3s ease;
        }
        
        .category-card:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection