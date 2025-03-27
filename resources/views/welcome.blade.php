@extends('layout.app')

@section('title', 'Services')

@section('content')
    <!-- Hero Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://bootstrapmade.com/content/demo/Blogy/assets/img/blog/blog-post-7.webp" class="card-img rounded-3" style="height: 400px; object-fit: cover;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50 rounded-3 p-4">
                            <span class="badge bg-danger mb-2 align-self-start fs-6">FEATURED</span>
                            <h3 class="card-title text-white fw-bold display-6">The Future of Web Development in 2025</h3>
                            <p class="text-white-50 fs-5">Exploring the latest trends and technologies shaping the web</p>
                            <a href="#" class="text-white fw-bold text-decoration-none fs-5">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://bootstrapmade.com/content/demo/Blogy/assets/img/blog/blog-post-7.webp" class="card-img rounded-3" style="height: 400px; object-fit: cover;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50 rounded-3 p-4">
                            <span class="badge bg-primary mb-2 align-self-start">TECHNOLOGY</span>
                            <h3 class="card-title text-white fw-bold fs-4">5 Essential Tools for Modern Developers</h3>
                            <a href="#" class="text-white fw-bold text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Posts -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold mb-4 pb-3 border-bottom">Latest Articles</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-2 fw-semibold rounded-pill">HEALTH</span>
                            <h5 class="card-title fw-bold">
                                <a href="{{ route('blog.details','sed-ut-perspiciatis') }}" class="text-decoration-none text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                            </h5>
                            <p class="card-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" class="rounded-circle border border-2 border-light me-2" width="36" height="36">
                                <small class="text-muted">William G. • 28 April 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-2 fw-semibold rounded-pill">HEALTH</span>
                            <h5 class="card-title fw-bold">
                                <a href="{{ route('blog.details','sed-ut-perspiciatis') }}" class="text-decoration-none text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                            </h5>
                            <p class="card-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" class="rounded-circle border border-2 border-light me-2" width="36" height="36">
                                <small class="text-muted">William G. • 28 April 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-2 fw-semibold rounded-pill">HEALTH</span>
                            <h5 class="card-title fw-bold">
                                <a href="{{ route('blog.details','sed-ut-perspiciatis') }}" class="text-decoration-none text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                            </h5>
                            <p class="card-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" class="rounded-circle border border-2 border-light me-2" width="36" height="36">
                                <small class="text-muted">William G. • 28 April 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-5">FEATURED POSTS</h2>
                <p class="text-muted fs-5">Discover our most popular articles</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://bootstrapmade.com/content/demo/Blogy/assets/img/blog/blog-post-7.webp" class="card-img-top rounded-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">FEATURED</span>
                            <h5 class="card-title fw-bold">The Complete Guide to Bootstrap 5</h5>
                            <p class="card-text text-muted">Learn how to build responsive websites with the latest version of Bootstrap framework.</p>
                            <a href="#" class="btn btn-link text-decoration-none p-0 fw-bold">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://bootstrapmade.com/content/demo/Blogy/assets/img/blog/blog-post-7.webp" class="card-img-top rounded-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">FEATURED</span>
                            <h5 class="card-title fw-bold">JavaScript ES6 Features You Should Know</h5>
                            <p class="card-text text-muted">Explore the most important ES6 features that every developer should master.</p>
                            <a href="#" class="btn btn-link text-decoration-none p-0 fw-bold">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://bootstrapmade.com/content/demo/Blogy/assets/img/blog/blog-post-7.webp" class="card-img-top rounded-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">FEATURED</span>
                            <h5 class="card-title fw-bold">CSS Grid vs Flexbox: When to Use Each</h5>
                            <p class="card-text text-muted">Understand the differences between CSS Grid and Flexbox and when to use each layout system.</p>
                            <a href="#" class="btn btn-link text-decoration-none p-0 fw-bold">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
<section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-4 display-5">Browse by Category</h2>
            <div class="row g-4">
                <!-- Health Card -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-danger bg-opacity-10 text-danger mb-2">HEALTH</span>
                            <p class="text-muted small mb-2">William G. • 28 April 2024</p>
                            <h5 class="card-title fw-bold">10 Daily Habits for Better Mental Health</h5>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Gaming Cards -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-success bg-opacity-10 text-success mb-2">GAMING</span>
                            <h5 class="card-title fw-bold">Top 5 Upcoming Games in 2025</h5>
                            <p class="card-text text-muted small">2 mins read • 6 April 2026</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-success bg-opacity-10 text-success mb-2">GAMING</span>
                            <h5 class="card-title fw-bold">The Evolution of Gaming Graphics</h5>
                            <p class="card-text text-muted small">2 mins read • 15 July 2026</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Side Content Cards -->
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <div class="row g-0 h-100">
                            <div class="col-md-6">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="card-body">
                                    <span class="badge bg-info bg-opacity-10 text-info mb-2">EDUCATION</span>
                                    <p class="text-muted small mb-2">Emma D. • 30 May 2024</p>
                                    <h5 class="card-title fw-bold">Online Learning: Pros and Cons</h5>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <div class="row g-0 h-100">
                            <div class="col-md-6">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="card-body">
                                    <span class="badge bg-info bg-opacity-10 text-info mb-2">EDUCATION</span>
                                    <p class="text-muted small mb-2">Emma D. • 30 May 2024</p>
                                    <h5 class="card-title fw-bold">Best Programming Languages for Beginners</h5>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <div class="row g-0 h-100">
                            <div class="col-md-6">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="card-body">
                                    <span class="badge bg-info bg-opacity-10 text-info mb-2">EDUCATION</span>
                                    <p class="text-muted small mb-2">Emma D. • 30 May 2024</p>
                                    <h5 class="card-title fw-bold">How to Stay Productive While Learning</h5>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!-- Latest Posts -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold mb-4 pb-3 border-bottom display-5">Latest Posts</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="{{ url('image1.png') }}" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-warning bg-opacity-10 text-warning mb-2">NEW</span>
                            <h5 class="card-title fw-bold">Getting Started with React Hooks</h5>
                            <p class="card-text text-muted">Learn how to use React Hooks to simplify your functional components and manage state effectively.</p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="{{ url('image1.png') }}" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-warning bg-opacity-10 text-warning mb-2">NEW</span>
                            <h5 class="card-title fw-bold">TypeScript Best Practices</h5>
                            <p class="card-text text-muted">Discover the best practices for writing clean, maintainable TypeScript code in your projects.</p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <img src="{{ url('image1.png') }}" class="card-img-top rounded-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-warning bg-opacity-10 text-warning mb-2">NEW</span>
                            <h5 class="card-title fw-bold">Building REST APIs with Node.js</h5>
                            <p class="card-text text-muted">A comprehensive guide to building scalable and secure REST APIs using Node.js and Express.</p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5 bg-primary bg-opacity-10">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Column (Left) -->
                <div class="col-md-7">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <h2 class="fw-bold mb-4 display-5 text-dark">Stay Updated with Our Newsletter</h2>
                            <p class="text-muted mb-4 fs-5">Join our community and receive the latest news, trends, and insights straight to your inbox.</p>
                            <form class="row g-3 justify-content-center">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-lg rounded-start-pill px-4" placeholder="Enter your email" required>
                                        <button type="submit" class="btn btn-primary btn-lg rounded-end-pill px-4">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                            <small class="text-muted d-block mt-3">We respect your privacy. Unsubscribe anytime.</small>
                        </div>
                    </div>
                    
                </div>
    
                <!-- Logo Column (Right) -->
                <div class="col-md-5 text-center text-md-end">
                    <a class="fw-bold fs-4" href="#">
                        <img src="{{ url('women1.png') }}" class="img-fluid" style="max-width: 300px; height: auto;" alt="Newsletter Image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection