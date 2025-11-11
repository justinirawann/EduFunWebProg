@extends('layouts.main')

@section('container')
    <div class="row mt-3">
        @foreach ($posts as $post)
            <div class="col-lg-6 mb-4">
                <div class="card popular-card h-100 shadow-sm border-0" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-danger me-2">
                                <i class="fas fa-fire me-1"></i>Popular
                            </span>
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </small>
                        </div>
                        
                        <h4 class="card-title fw-bold mb-3">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                {{ $post->title }}
                            </a>
                        </h4>
                        
                        <div class="text-muted small mb-3">
                            <i class="fas fa-user me-1"></i>
                            By: <a href="/writers/{{ $post->writer->id }}" class="text-decoration-none">{{ $post->writer->name }}</a>
                            <span class="mx-2">|</span>
                            <i class="fas fa-folder me-1"></i>
                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        
                        <p class="card-text text-muted mb-3">{{ $post->excerpt }}</p>
                        
                        <a href="/posts/{{ $post->slug }}" class="btn btn-danger btn-sm px-3 py-2 rounded-pill">
                            <i class="fas fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Page navigation">
            {{ $posts->links('pagination::bootstrap-4') }}
        </nav>
    </div>

    <style>
        .popular-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }
        
        .pagination {
            margin: 0;
        }
        
        .pagination .page-link {
            color: #dc3545;
            border-color: #dc3545;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        
        .pagination .page-link:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
@endsection