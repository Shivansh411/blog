@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="row justify-content-center mb-6">
        <div class="col-lg-10 text-center px-4 py-5 rounded-4" style="background-color: #f9f9f9;">
            <h1 class="fw-bold mb-4 display-5" style="color: #ff7b25;">Contact Us</h1>
            <p class="lead mx-auto" style="max-width: 700px; line-height: 1.8; font-size: 1.2rem; color: #5a4a42;">
                We'd love to hear from you! Reach out to our team for any questions or inquiries.
            </p>
        </div>
    </div>

    <!-- Info Cards Section -->
    <div class="row g-4 my-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                <div class="card-body p-4 text-center">
                    <div class="bg-light text-dark rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                        <i class="fas fa-map-marker-alt fs-4"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #ff7b25;">Our Address</h4>
                    <p class="text-muted mb-0">
                        2847 Rainbow Road<br>
                        Springfield, IL 62701<br>
                        USA
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                <div class="card-body p-4 text-center">
                    <div class="bg-light text-dark rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                        <i class="fas fa-phone-alt fs-4"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #ff7b25;">Contact Number</h4>
                    <p class="text-muted mb-0">
                        Mobile: +1 (555) 123-4567<br>
                        Email: info@example.com
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                <div class="card-body p-4 text-center">
                    <div class="bg-light text-dark rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                        <i class="fas fa-clock fs-4"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #ff7b25;">Opening Hours</h4>
                    <p class="text-muted mb-0">
                        Monday - Saturday: 9:00 - 18:00<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form + Info Section -->
    <div class="row my-5">
        <div class="col-lg-12">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="fw-bold mb-4" style="color: #ff7b25;">Send us a message</h3>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control py-3" id="name" placeholder="John Doe" style="border-radius: 8px;">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control py-3" id="email" placeholder="john@example.com" style="border-radius: 8px;">
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control py-3" id="subject" placeholder="How can we help?" style="border-radius: 8px;">
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control py-3" id="message" rows="5" placeholder="Your message here..." style="border-radius: 8px;"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg px-4 py-3 w-100" style="background-color: #ff7b25; border-color: #ff7b25; border-radius: 8px;">
                                            Send Message <i class="fas fa-paper-plane ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Additional Contact Information -->
                <div class="col-lg-5">
                    <div class="card border-0 h-100" style="border-radius: 12px; background-color: #f9f9f9;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="fw-bold mb-5" style="color: #ff7b25;">Get In Touch</h3>
    
                            <div class="d-flex mb-4">
                                <div class="text-dark rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-envelope fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Email Support</h5>
                                    <p class="mb-0 text-muted">
                                        <a href="mailto:support@example.com" class="text-decoration-none">support@example.com</a><br>
                                        Response time: 24 hours
                                    </p>
                                </div>
                            </div>
    
                            <div class="d-flex mb-4">
                                <div class="text-dark rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-headset fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Customer Service</h5>
                                    <p class="mb-0 text-muted">
                                        <a href="tel:+18005551234" class="text-decoration-none">+1 (800) 555-1234</a><br>
                                        Mon-Fri: 8am-8pm EST
                                    </p>
                                </div>
                            </div>

                                
                            <div class="d-flex mb-4">
                                <div class="text-dark rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-location fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Head Office</h5>
                                    <p class="mb-0 text-muted">
                                        1234 Main Street, Suite 500<br>
                                        Springfield, IL 62701<br>
                                        <a href="tel:+18005551234" class="text-decoration-none">+1 (800) 555-1234</a><br>
                                        Mon-Fri: 8am-8pm EST
                                    </p>
                                </div>
                            </div>                            
    
                            <div class="d-flex">
                                <div class="text-dark rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-comments fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Live Chat</h5>
                                    <p class="mb-0 text-muted">
                                        Available during business hours<br>
                                        <a href="#" class="text-decoration-none" style="color: #ff7b25;">Start chat now</a>
                                    </p>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Map Section -->
    <div class="row justify-content-center my-5">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 12px;">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.963370477744!2d-89.6503086847146!3d39.781726979436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8875395a35b806e9%3A0x5a8f2e1e3a6e3b1e!2s2847%20Rainbow%20Rd%2C%20Springfield%2C%20IL%2062701%2C%20USA!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom styles for contact page */
    .card {
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .form-control {
        border: 1px solid #e0e0e0;
    }
    .form-control:focus {
        border-color: #ff7b25;
        box-shadow: 0 0 0 0.25rem rgba(255, 123, 37, 0.1);
    }
    .btn-primary:hover {
        background-color: #e56a1a !important;
        border-color: #e56a1a !important;
    }
    a.text-decoration-none:hover {
        text-decoration: underline !important;
    }
</style>
@endsection