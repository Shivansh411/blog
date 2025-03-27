<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .active{
            color: #0d6efd !important;
            font-weight: 600;
        }
        .secondary-nav {
            transition: all 0.3s ease;
        }
        .mobile-secondary-nav {
            display: none;
            background-color: #f8f9fa;
            padding: 10px 0;
            position: sticky;
            top: 56px; /* Height of main navbar */
            z-index: 1020;
        }
        .mobile-secondary-nav .nav-link {
            padding: 0.5rem 1rem;
        }
        .text-decoration-none:hover {
            color: #212529 !important;
        }
        .social-links a:hover i {
            color: #212529 !important;
        }
        .fa-chevron-right {
            transition: transform 0.2s ease;
        }
        .text-decoration-none:hover .fa-chevron-right {
            transform: translateX(3px);
        }
        @media (max-width: 991.98px) {
            .desktop-secondary-nav {
                display: none;
            }
            .mobile-secondary-nav {
                display: block;
            }
            .mobile-secondary-nav .navbar-nav {
                flex-direction: row;
                overflow-x: auto;
                white-space: nowrap;
                flex-wrap: nowrap;
                padding-bottom: 5px;
            }
            .mobile-secondary-nav .nav-item {
                display: inline-block;
                float: none;
            }
        }
    </style>
</head>
<body class="">
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">
                <img src="{{ url('logo.png') }}" alt="Logo" height="40" class="me-2">Bloggy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="d-flex ms-auto align-items-center">
                    <div class="d-none d-lg-flex me-4">
                        <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark fs-5"><i class="bi bi-twitter"></i></a>
                    </div>
                    <form class="d-flex position-relative">
                        <input class="form-control rounded-pill ps-3 pe-5" type="search" placeholder="Search...">
                        <button class="btn position-absolute end-0 top-50 translate-middle-y border-0 bg-transparent" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Desktop Secondary Navigation (hidden on mobile) -->
    <nav class="desktop-secondary-nav navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2"><a class="nav-link {{ Route::is('/') ? 'active' : '' }}" href="{{ route('/') }}">Home</a></li>
                    <li class="nav-item mx-2"><a class="nav-link {{ Route::is('about.us') ? 'active' : '' }}" href="{{ route('about.us') }}">About</a></li>
                    <li class="nav-item mx-2"><a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item mx-2"><a class="nav-link {{ Route::is('category') ? 'active' : '' }}" href="{{ route('category') }}">Category</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Secondary Navigation (visible only on mobile) -->
    <div class="mobile-secondary-nav">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link {{ Route::is('/') ? 'active' : '' }}" href="{{ route('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::is('about.us') ? 'active' : '' }}" href="{{ route('about.us') }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::is('category') ? 'active' : '' }}" href="{{ route('category') }}">Category</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="row">
                <!-- Address Column -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="pe-lg-4">
                        <h5 class="fw-bold mb-3 fs-2 text-dark d-flex align-items-center">
                            Blogy
                        </h5>
                        <address class="text-muted mb-4">
                            <div class="d-flex mb-2">
                                <i class="fas fa-map-marker-alt text-muted mt-1 me-2" style="width: 16px;"></i>
                                <span>A108 Adam Street<br>New York, NY 535022</span>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fas fa-phone-alt text-muted me-2" style="width: 16px;"></i>
                                <span>+1 5589 55488 55</span>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-envelope text-muted me-2" style="width: 16px;"></i>
                                <span>info@example.com</span>
                            </div>
                        </address>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter text-muted"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-facebook-f text-muted"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram text-muted"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in text-muted"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-youtube text-muted"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Useful Links Column -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3 fs-5 text-dark">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Home</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>About us</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Services</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Terms of service</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Privacy policy</span>
                        </a></li>
                    </ul>
                </div>

                <!-- Our Services Column -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3 fs-5 text-dark">Our Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Web Design</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Web Development</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Product Management</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Marketing</span>
                        </a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none d-flex align-items-center">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.7rem;"></i>
                            <span>Graphic Design</span>
                        </a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top mt-5 pt-4 text-center text-muted">
                <p class="mb-1">© Copyright <strong class="text-dark">Blogy</strong>. All Rights Reserved</p>
                <p class="mb-0">Designed by <a href="#" class="text-muted text-decoration-none">BootstrapMade</a></p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="btn btn-primary rounded-circle scroll-to-top position-fixed bottom-0 end-0 m-4" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show/hide scroll to top button based on scroll position
        window.addEventListener('scroll', function() {
            const scrollToTopBtn = document.querySelector('.scroll-to-top');
            if (window.pageYOffset > 300) {
                scrollToTopBtn.style.opacity = '1';
                scrollToTopBtn.style.visibility = 'visible';
            } else {
                scrollToTopBtn.style.opacity = '0';
                scrollToTopBtn.style.visibility = 'hidden';
            }
        });

        // Initialize scroll to top button style
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.querySelector('.scroll-to-top');
            scrollToTopBtn.style.opacity = '0';
            scrollToTopBtn.style.visibility = 'hidden';
            scrollToTopBtn.style.transition = 'all 0.3s ease';
        });
    </script>
</body>
</html>