@extends('layout.app')

@section('title', 'Blog Category')

@section('content')

<!-- Hero Section -->
<div class="text-center py-5 bg-light mb-5 bg-gradient-light">
    <div class="container py-4">
        <h1 class="display-5 fw-bold mb-3 text-dark">Blog Category</h1>
        <p class="lead text-muted w-lg-50 mx-auto">Discover insightful articles on design, development, marketing and business growth.</p>
    </div>
</div>

<!-- Main Content -->
<section class="container mb-5">
    <div class="row g-4">
        <!-- Blog Posts Column -->
        <div class="col-lg-8">
            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm overflow-hidden transition-all hover-lift">
                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                            <img src="{{ url('category1.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Design blog post">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-dark bg-opacity-10 text-primary me-2">Design</span>
                                <small class="text-muted"><i class="far fa-clock me-1"></i> June 12, 2023</small>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Modern Design Principles</h3>
                            <p class="card-text text-muted mb-4">Explore the latest design trends and principles that are shaping user experiences.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary stretched-link">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm overflow-hidden transition-all hover-lift">
                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                            <img src="{{ url('category1.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Development blog post">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-success bg-opacity-10 text-success me-2">Development</span>
                                <small class="text-muted"><i class="far fa-clock me-1"></i> June 10, 2023</small>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Frontend Development Trends</h3>
                            <p class="card-text text-muted mb-4">Discover the emerging technologies in frontend development for 2023.</p>
                            <a href="#" class="btn btn-sm btn-outline-success stretched-link">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm overflow-hidden transition-all hover-lift">
                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                            <img src="{{ url('category1.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Marketing blog post">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning me-2">Marketing</span>
                                <small class="text-muted"><i class="far fa-clock me-1"></i> June 8, 2023</small>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Digital Marketing Strategies</h3>
                            <p class="card-text text-muted mb-4">Effective digital marketing techniques to grow your online presence.</p>
                            <a href="#" class="btn btn-sm btn-outline-warning stretched-link">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm overflow-hidden transition-all hover-lift">
                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                            <img src="{{ url('category1.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Business blog post">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-info bg-opacity-10 text-info me-2">Business</span>
                                <small class="text-muted"><i class="far fa-clock me-1"></i> June 5, 2023</small>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Startup Growth Hacks</h3>
                            <p class="card-text text-muted mb-4">Proven strategies to accelerate your startup's growth in competitive markets.</p>
                            <a href="#" class="btn btn-sm btn-outline-info stretched-link">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="col-12 mt-4">
                    <nav aria-label="Blog pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Search Widget -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center text-dark">
                        <i class="fas fa-search me-2"></i> Search Articles
                    </h4>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg border-dark border-end-0" placeholder="Search..." required>
                            <button class="btn btn-dark px-3" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        
            <!-- Categories Widget -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center text-dark">
                        <i class="fas fa-folder-open me-2"></i> Categories
                    </h4>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2 text-dark">
                            <span>Web Design</span>
                            <span class="badge bg-dark rounded-pill">14</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2 text-dark">
                            <span>Development</span>
                            <span class="badge bg-dark rounded-pill">8</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2 text-dark">
                            <span>Marketing</span>
                            <span class="badge bg-dark rounded-pill">5</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2 text-dark">
                            <span>Graphic Design</span>
                            <span class="badge bg-dark rounded-pill">12</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2 text-dark">
                            <span>Business</span>
                            <span class="badge bg-dark rounded-pill">7</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Posts Widget -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title mb-0 fw-bold d-flex align-items-center text-dark">
                        <i class="fas fa-history me-2"></i> Recent Posts
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <!-- Recent Post 1 -->
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                                        class="rounded me-3" alt="Recent post" width="60" height="60">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-1">Design System Fundamentals</h6>
                                    <small class="text-muted"><i class="far fa-clock me-1"></i> Jan 1, 2023</small>
                                </div>
                            </div>
                        </a>
                        <!-- Recent Post 2 -->
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                                        class="rounded me-3" alt="Recent post" width="60" height="60">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-1">React Performance Tips</h6>
                                    <small class="text-muted"><i class="far fa-clock me-1"></i> Dec 15, 2022</small>
                                </div>
                            </div>
                        </a>
                        <!-- Recent Post 3 -->
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                                        class="rounded me-3" alt="Recent post" width="60" height="60">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-1">SEO Best Practices</h6>
                                    <small class="text-muted"><i class="far fa-clock me-1"></i> Nov 28, 2022</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-gradient-light {
        background: linear-gradient(to right, #f8f9fa, #ffffff);
    }
    .hover-lift {
        transition: all 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2.5rem rgba(0, 0, 0, 0.1) !important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .search-form .form-control:focus {
        box-shadow: none;
        border-color: #0d6efd;
    }
    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }
</style>
@endsection