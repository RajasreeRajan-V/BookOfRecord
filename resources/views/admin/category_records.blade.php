<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOOK OF RECORD - Interior Design Website Template Free</title>
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

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header position-relative">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">About</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="{{ route('admin.admin_home') }}">Home</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="container py-5">
    <h2 class="mb-4">{{ $category->name }} - Records</h2>
    <p>{{ $category->description }}</p>

    <div class="row gy-3 gx-2">
        @forelse($records as $record)
            <div class="col-6 col-md-4">
                <div class="choose-card gallery-card p-3" style="border:2px solid #4d194d; border-radius:8px;">
                    <img src="{{ asset('storage/' . $record->image) }}" alt="{{ $record->name }}" class="img-fluid mb-2" style="height:150px; width:100%; object-fit:cover; border-radius:4px;">
                    <h6 class="mb-1">{{ $record->name }}</h6>
                    <p class="text-muted mb-1">{{ $record->record_no }}</p>
                    <p class="text-muted" style="font-size:0.85rem;">{{ Str::limit($record->description, 100) }}</p>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-muted">No records found under this category.</p>
            </div>
        @endforelse
    </div>
</div>
 <!-- Footer Start -->
    <div class="container-fluid  text-dark-50 footer pt-5" style="background-color: #c7b16b;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-dark">BOOK OF RECORD</h1>
                    </a>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-dark mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-dark mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">About Us</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Contact Us</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Privacy Policy</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Terms & Condition</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-dark mb-4">Our Services</h5>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Interior Design</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Project Planning</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Renovation</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Implement</a>
                    <a class="btn btn-link" href="#!" style="color: #4d194d">Landscape Design</a>
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
                        <div class="footer-menu">
                            <a href="#!" style="color: #4d194d">Home</a>
                            <a href="#!" style="color: #4d194d">Cookies</a>
                            <a href="#!" style="color: #4d194d">Help</a>
                            <a href="#!">FAQs</a>
                        </div>
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

