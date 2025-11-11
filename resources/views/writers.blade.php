@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-3">
        @foreach ($writers as $writer)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card writer-card h-100 shadow-lg border-0 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="writer-avatar mb-4">
                            <img src="https://randomuser.me/api/portraits/{{ rand(0,1) ? 'men' : 'women' }}/{{ $writer->id + 10 }}.jpg" 
                                 class="rounded-circle shadow" 
                                 alt="{{ $writer->name }}" 
                                 style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #f8f9fa;">
                        </div>
                        
                        <h4 class="card-title fw-bold text-primary mb-2">{{ $writer->name }}</h4>
                        <p class="text-muted mb-3">
                            <i class="fas fa-star text-warning me-1"></i>
                            {{ $writer->specialty }}
                        </p>
                        
                        <div class="writer-stats mb-3">
                            <small class="text-muted">
                                <i class="fas fa-newspaper me-1"></i>
                                {{ $writer->posts->count() }} Articles Published
                            </small>
                        </div>
                        
                        <a href="/writers/{{ $writer->id }}" class="btn btn-primary btn-sm px-4 py-2 rounded-pill">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </a>
                    </div>
                    
                    <div class="card-footer bg-transparent border-0 pb-4">
                        <div class="social-links">
                            <a href="#" class="text-muted me-3" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-muted me-3" title="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-muted" title="Email">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .writer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
        }
        
        .social-links a {
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #007bff !important;
        }
    </style>
@endsection