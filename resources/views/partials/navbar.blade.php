<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="/">
            <i class="fas fa-graduation-cap me-2"></i>EduFun
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('categories*') ? 'active fw-bold' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list me-1"></i>Categories
                    </a>
                    <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/categories">
                            <i class="fas fa-th-large me-2"></i>All Categories
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        @foreach(App\Models\Category::all() as $category)
                            <li><a class="dropdown-item" href="/categories/{{ $category->slug }}">
                                @if($category->slug == 'interactive-multimedia')
                                    <i class="fas fa-desktop me-2"></i>
                                @elseif($category->slug == 'software-engineering')
                                    <i class="fas fa-code me-2"></i>
                                @else
                                    <i class="fas fa-tag me-2"></i>
                                @endif
                                {{ $category->name }}
                            </a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('writers*') ? 'active fw-bold' : '' }}" href="/writers">
                        <i class="fas fa-users me-1"></i>Writers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('popular') ? 'active fw-bold' : '' }}" href="/popular">
                        <i class="fas fa-fire me-1"></i>Popular
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active fw-bold' : '' }}" href="/about">
                        <i class="fas fa-info-circle me-1"></i>About Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>