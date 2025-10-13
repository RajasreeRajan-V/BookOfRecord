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


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                 <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <img src="img/logo.png" alt="Book of Record Logo" class="logo-img me-3" style="height:50px;">
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
                        <div class="nav-item dropdown">
                            <a href="{{ route('category') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                            </div>
                        </div>
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
                    <h1 class="display-1 mb-0 animated slideInLeft">Contact</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
<div class="container-fluid py-5 ">
  <div class="container">
    <div class="text-center wow fadeIn" data-wow-delay="0.1s">
      <h1 class="mb-5" style=" display: inline-block; position: relative;">
  Honoring Extraordinary Records <br>
  <span style=" font-weight: 600;">Celebrating Achievements That Inspire the World</span>
  <span style="position: absolute; left: 0; bottom: -5px; width: 100%; height: 4px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
</h1>

    </div>
    <div class="row gy-4 gx-md-5 gx-3 align-items-stretch text-center">
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="choose-card h-100" style="background-color: #e3d8b5;">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
           <h4>Arts & Entertainment</h4>
          <p>Celebrating extraordinary achievements in visual arts, painting, sculpture, literature, photography, music and all forms of creative expression worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
        <div class="choose-card h-100">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
           <h4>Business & Economy</h4>
          <p>Honoring entrepreneurs, innovators, and organizations that achieve remarkable milestones in business and economic impact.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
        <div class="choose-card h-100">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
         <h4>Creativity, Structure & Architecture</h4>
          <p>Recognizing visionary architects, designers, and creators whose work inspires innovation and elevates global standards.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="choose-card h-100">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
         <h4>Culture & Society</h4>
          <p>Honoring individuals and initiatives that preserve heritage, promote inclusiveness, and impact communities positively worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
        <div class="choose-card h-100">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
          <h4>Human Body & Abilities</h4>
          <p>Celebrating extraordinary physical, mental, and intellectual achievements that demonstrate the limitless potential of humans.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
        <div class="choose-card h-100">
          <i class="fa fa-star fa-5x text-primary mb-4"></i>
          <h4>Nature & Environment</h4>
          <p>Honoring remarkable achievements in environmental conservation, sustainability, and exploration, inspiring global efforts to protect and celebrate our planet.</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">BOOK OF RECORD</h1>
                    </a>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
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
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="#!">About Us</a>
                    <a class="btn btn-link" href="#!">Contact Us</a>
                    <a class="btn btn-link" href="#!">Privacy Policy</a>
                    <a class="btn btn-link" href="#!">Terms & Condition</a>
                    <a class="btn btn-link" href="#!">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="#!">Interior Design</a>
                    <a class="btn btn-link" href="#!">Project Planning</a>
                    <a class="btn btn-link" href="#!">Renovation</a>
                    <a class="btn btn-link" href="#!">Implement</a>
                    <a class="btn btn-link" href="#!">Landscape Design</a>
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
                            <a href="#!">Home</a>
                            <a href="#!">Cookies</a>
                            <a href="#!">Help</a>
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
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script  src="{{asset('js/main.js')}}"></script>
</body>

</html>