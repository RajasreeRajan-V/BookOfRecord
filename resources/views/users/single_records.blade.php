<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOOK OF RECORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                 <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('img/logo.png') }}"  class="logo-img me-3" style="height:50px;">
                    <span style="
                        font-family: 'Space Grotesk', sans-serif; 
                        font-weight: 800; 
                        font-size: 1.7rem; 
                        background: linear-gradient(45deg, #4d194d, #c7b16b);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
                        letter-spacing: 1px;
                    ">
                        Book of Record
                    </span>
                </a>

                    <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a href="{{ route('category') }}" class="nav-item nav-link">Inspiring Records</a>
                        <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="mb-0 animated slideInLeft" 
                            style="white-space: nowrap;color: white;">
                            Record : {{ $record->name }}
                        </h1>
                    </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ route('category.record',$record->category->id) }}">{{ $record->category->name}}</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $record->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
<!-- Single Record Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h2 class="mb-3"
                style="font-weight: 600; position: relative; display: inline-block; font-size: 1.8rem;">
                Record Highlight
                <span
                    style="position: absolute; left: 0; bottom: -3px; width: 100%; height: 3px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
            </h2>
            <p>Explore a remarkable record and the achievement behind it.</p>
        </div>

        <div class="row align-items-center gy-4 mt-4">
            <!-- Image Column -->
            <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="choose-card single-gallery-card"
                    style="border: 2px solid #c7b16b; border-radius: 8px; padding: 0; overflow: hidden;">
                    <img src="{{ asset('storage/' . $record->image) }}"  
                         style="width: 100%; height: 350px; object-fit: cover;">
                </div>
            </div>

            <!-- Details Column -->
            <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <h3 style="font-weight: 600; color:#4d194d;">{{ $record->name }}</h3>
                <p style="font-size: 1rem; line-height: 1.6;">
                    {{ $record->description }}
                </p>
                <ul style="list-style-type: disc; padding-left: 20px; line-height: 1.6;">
                    <li><strong>Category:</strong> {{ $record->category->name ?? 'N/A' }}</li>
                    {{-- <li><strong>Record No:</strong> {{ $record->record_no ?? 'N/A' }}</li> --}}
                   <p> {{ $record->details ?? 'Not specified' }} </p>
                </ul>
                <a href="{{ url()->previous() }}" class="btn btn-outline-primary mt-3">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Single Record Detail End -->


   <!-- Footer Start -->
    <div class="container-fluid text-dark-50 footer pt-5" style="background-color: #c7b16b;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ route('home') }}" class="d-inline-block mb-3">
                        <h1 class="text-dark">BOOK OF RECORD</h1>
                    </a>
                    <p class="mb-0" style="color: #4d194d;">
                        Book of Record is a global platform dedicated to recognizing extraordinary achievements and
                        inspiring individuals to push beyond their limits.
                        We honor talents, innovations, and milestones that make a difference celebrating every story of
                        determination, creativity, and excellence.
                        Our mission is to document greatness and motivate others to dream big, act bold, and leave a
                        lasting impact on the world.
                    </p>

                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">

                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">

                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-dark mb-4">Quick Links</h5>
                    <a class="btn btn-link d-flex align-items-center" style="color: #4d194d;"
                        href="{{ route('home') }}">
                        <i class="fa-solid fa-house me-2"></i> Home
                    </a>

                    <a class="btn btn-link d-flex align-items-center" style="color: #4d194d;"
                        href="{{ route('about') }}">
                        <i class="fa-solid fa-circle-info me-2"></i> About Us
                    </a>

                    <a class="btn btn-link d-flex align-items-center" style="color: #4d194d;"
                        href="{{ route('gallery') }}">
                        <i class="fa-solid fa-images me-2"></i> Gallery
                    </a>

                    <a class="btn btn-link d-flex align-items-center" style="color: #4d194d;"
                        href="{{ route('category') }}">
                        <i class="fa-solid fa-trophy me-2"></i> Inspiring Records
                    </a>

                    <a class="btn btn-link d-flex align-items-center" style="color: #4d194d;"
                        href="{{ route('contact.index') }}">
                        <i class="fa-solid fa-envelope me-2"></i> Contact
                    </a>

                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="footer-text" style="margin-top:15px;">
                            Copyright &copy; 2025
                            <a href="http://astrasoftwaresolutions.com/" target="_blank" style="color: #4d194d;">ASTRA
                                SOFTWARE SOLUTIONS</a> | All rights reserved
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script href="{{asset('lib/wow/wow.min.js')}}"></script>
    <script href="{{asset('lib/easing/easing.min.js')}}"></script>
    <script href="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script href="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>