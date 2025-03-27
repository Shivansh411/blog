@extends('layout.app')

@section('title', 'Blog Details')

@section('content')

<h2 class="text-center my-5">Blog Details</h2>


<section class="container">
    <div class="row">
        <div class="col-md-8">
            <a class="fw-bold fs-4" href="#">
                <img src="{{ url('image3.png') }}" class="img-fluid" style="width: 800px; height: 500px; border-radius:20px;">
            </a>





            <div class="card border-0 shadow-sm mt-5" style="border-radius: 12px; width: 100%; max-width: 780px; min-width: 300px; height: auto;">
                <div class="card-body p-4 p-md-5">
                  <h4 class="fw-bold mb-4 text-primary">
                    <i class="fas fa-comment-dots me-2"></i>Leave a Comment
                  </h4>
                  
                  <form>
                    <!-- Full Name Field -->
                    <div class="mb-4">
                      <label for="fullName" class="form-label fw-medium">Full Name <span class="text-danger">*</span></label>
                      <div class="input-group border rounded-pill" style="height: 48px;">
                        <span class="input-group-text bg-transparent border-0 pe-1 ps-3">
                          <i class="fas fa-user text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-0 bg-transparent" id="fullName" 
                               placeholder="John Doe" required style="height: 100%;">
                      </div>
                    </div>
                    
                    <!-- Email Field -->
                    <div class="mb-4">
                      <label for="email" class="form-label fw-medium">Email <span class="text-danger">*</span></label>
                      <div class="input-group border rounded-pill" style="height: 48px;">
                        <span class="input-group-text bg-transparent border-0 pe-1 ps-3">
                          <i class="fas fa-envelope text-muted"></i>
                        </span>
                        <input type="email" class="form-control border-0 bg-transparent" id="email" 
                               placeholder="john@example.com" required style="height: 100%;">
                      </div>
                    </div>
                    
                    <!-- Comment Field -->
                    <div class="mb-4">
                      <label for="comment" class="form-label fw-medium">Comment <span class="text-danger">*</span></label>
                      <div class="border rounded-3 p-2" style="min-height: 120px;">
                        <textarea class="form-control border-0 p-1" id="comment" 
                                  placeholder="Write your comment here..." required 
                                  style="min-height: 100px; resize: vertical;"></textarea>
                      </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold mt-2" 
                            style="height: 48px;">
                      <i class="fas fa-paper-plane me-2"></i> Post Comment
                    </button>
                  </form>
                </div>
              </div>
              
             
        </div>





{{-- 2nd part start from here --}}
        <div class="col-md-4 mt-4px">
            <!-- Search Card -->
            <div class="card border-0 shadow-sm mb-4 bg-light">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center">
                        Search
                    </h4>
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg rounded-start-pill px-4 py-2 border-dark" placeholder="Search..."
                                required>
                        <button class="btn btn-dark rounded-end-pill px-4" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Categories Card -->
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center">
                        Categories
                    </h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-2 border-bottom">
                                <span>Web Design</span>
                            </a>
                        </li>
                        <li class="mb-3 pb-2 border-bottom">
                                <span>Development</span>
                            </a>
                        </li>
                        <li class="mb-3 pb-2 border-bottom">
                                <span>Marketing</span>
                            </a>
                        </li>
                        <li class="mb-3 pb-2 border-bottom">
                                <span>Graphic Design</span>
                            </a>
                        </li>
                        <li class="mb-0">
                                <span>Business</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="card border-0 shadow-sm mt-5" style="max-width: 410px;">
                <div class="card-header bg-white border-0 py-3">
                  <h5 class="card-title mb-0 fw-bold">Recent Posts</h5>
                </div>
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush">
                    <!-- Post 1 -->
                    <li class="list-group-item border-0 px-4 py-3">
                      <div class="d-flex">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                             class="rounded me-3" alt="Post image" width="60" height="60">
                        <div>
                          <h6 class="fw-bold mb-1">Nihil blanditlis at in nihil autem</h6>
                          <small class="text-muted">Jan 1, 2020</small>
                        </div>
                      </div>
                    </li>
                    <hr>
                    <!-- Post 2 -->
                    <li class="list-group-item border-0 px-4 py-3">
                      <div class="d-flex">
                        <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                             class="rounded me-3" alt="Post image" width="60" height="60">
                        <div>
                          <h6 class="fw-bold mb-1">Quidem autem et impedit</h6>
                          <small class="text-muted">Jan 1, 2020</small>
                        </div>
                      </div>
                    </li>
                    <hr>
                    <!-- Post 3 -->
                    <li class="list-group-item border-0 px-4 py-3">
                      <div class="d-flex">
                        <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                             class="rounded me-3" alt="Post image" width="60" height="60">
                        <div>
                          <h6 class="fw-bold mb-1">Id quia et et ut maxime similique occaecati ut</h6>
                          <small class="text-muted">Jan 1, 2020</small>
                        </div>
                      </div>
                    </li>
                    <hr>
                    <!-- Post 4 -->
                    <li class="list-group-item border-0 px-4 py-3">
                      <div class="d-flex">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100" 
                             class="rounded me-3" alt="Post image" width="60" height="60">
                        <div>
                          <h6 class="fw-bold mb-1">Laborum corporis quo dara net para</h6>
                          <small class="text-muted">Jan 1, 2020</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              

        </div>
        




    </div>
</section>
@endsection