@extends('layout.app')

@section('title', 'About Us')

@section('content')
<div class="about-page">
  <!-- Our Story Section -->
  <section class="py-5 py-lg-8 bg-white position-relative">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
          <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2 mb-3">Our Journey</span>
          <h2 class="display-5 fw-bold mb-4">From Vision to <span class="text-warning">Reality</span></h2>
          <p class="lead text-muted mb-0">
            Founded in 2010, we've grown from a small startup to a global leader in digital solutions.
          </p>
        </div>
      </div>

      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <div class="position-relative">
            <div class="rounded-4 overflow-hidden shadow-lg">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid" alt="Our Team">
            </div>
           
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-5">
            <p class="mb-4 fs-5 text-muted">
              What began as a passion project among three college friends has evolved into an award-winning digital agency with offices in four countries and a team of over 50 dedicated professionals.
            </p>
            <div class="d-flex mb-4">
              <div class="me-4">
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 mb-3">
                  <i class="fas fa-lightbulb fs-2"></i>
                </div>
              </div>
              <div>
                <h4 class="fw-bold mb-2">Innovation First</h4>
                <p class="mb-0 text-muted">
                  We challenge conventional thinking to deliver breakthrough solutions that drive real business impact.
                </p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="me-4">
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 mb-3">
                  <i class="fas fa-handshake fs-2"></i>
                </div>
              </div>
              <div>
                <h4 class="fw-bold mb-2">Client Partnership</h4>
                <p class="mb-0 text-muted">
                  Your success is our success. We build lasting relationships based on trust and transparency.
                </p>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-4">
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 mb-3">
                  <i class="fas fa-globe fs-2"></i>
                </div>
              </div>
              <div>
                <h4 class="fw-bold mb-2">Global Perspective</h4>
                <p class="mb-0 text-muted">
                  With team members from 15+ countries, we bring diverse thinking to every project.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-5 py-lg-8 bg-white">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
          <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2 mb-3">Meet The Team</span>
          <h2 class="display-5 fw-bold mb-4">Our <span class="text-warning">Leadership</span></h2>
          <p class="lead text-muted mb-0">
            The brilliant minds driving our company forward
          </p>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="card rounded-4 overflow-hidden shadow-sm h-100">
            <div class="overflow-hidden" style="height: 280px;">
              <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="img-fluid h-100 w-100 object-fit-cover" alt="Team Member">
            </div>
            <div class="card-body p-4 text-center">
              <h5 class="fw-bold mb-1">John Smith</h5>
              <p class="text-muted small mb-0">CEO & Founder</p>
            </div>
            <div class="card-footer bg-transparent border-0 text-center pb-4">
              <a href="#" class="text-warning mx-2"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card rounded-4 overflow-hidden shadow-sm h-100">
            <div class="overflow-hidden" style="height: 280px;">
              <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="img-fluid h-100 w-100 object-fit-cover" alt="Team Member">
            </div>
            <div class="card-body p-4 text-center">
              <h5 class="fw-bold mb-1">Sarah Johnson</h5>
              <p class="text-muted small mb-0">CTO</p>
            </div>
            <div class="card-footer bg-transparent border-0 text-center pb-4">
              <a href="#" class="text-warning mx-2"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card rounded-4 overflow-hidden shadow-sm h-100">
            <div class="overflow-hidden" style="height: 280px;">
              <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="img-fluid h-100 w-100 object-fit-cover" alt="Team Member">
            </div>
            <div class="card-body p-4 text-center">
              <h5 class="fw-bold mb-1">Michael Chen</h5>
              <p class="text-muted small mb-0">COO</p>
            </div>
            <div class="card-footer bg-transparent border-0 text-center pb-4">
              <a href="#" class="text-warning mx-2"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card rounded-4 overflow-hidden shadow-sm h-100">
            <div class="overflow-hidden" style="height: 280px;">
              <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="img-fluid h-100 w-100 object-fit-cover" alt="Team Member">
            </div>
            <div class="card-body p-4 text-center">
              <h5 class="fw-bold mb-1">Emma Wilson</h5>
              <p class="text-muted small mb-0">Creative Director</p>
            </div>
            <div class="card-footer bg-transparent border-0 text-center pb-4">
              <a href="#" class="text-warning mx-2"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-warning mx-2"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 py-lg-8 bg-dark text-white position-relative">
    <div class="container position-relative">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <h2 class="display-5 fw-bold mb-4">Ready to start your project?</h2>
          <p class="lead mb-5 opacity-75">
            Let's create something amazing together. Our team is ready to bring your vision to life.
          </p>
          <div class="d-flex justify-content-center gap-3">
            <a href="#contact" class="btn btn-warning btn-lg px-4 py-3 rounded-pill">
              Get Started <i class="fas fa-arrow-right ms-2"></i>
            </a>
            <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
              Contact Us
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection