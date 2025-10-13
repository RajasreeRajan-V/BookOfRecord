<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  
<title>BOOK OF RECORD</title>

<link rel="icon" type="image/png" href="img/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
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
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
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

    <!-- Hero Section -->
    <div class="container-fluid" style="background-color:#e6ccff;padding:80px 0 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-lg-6" style="position: relative; z-index: 2;">
                    <h1 style="font-size:64px;font-weight:700;color:#4d194d;line-height:1.2;">
                        Discover The<span style="color:#c7b16b;"> Extra</span> Ordinary 
                    </h1>
                    <h5 style="border:1px solid #cfd9d8;padding:10px 25px;font-weight:500;color:#4d194d;display:inline-block;margin-top:10px;">
                        Discover the extraordinary in every record, from human achievements to natural wonders, all in one place.
                    </h5>
                </div>


                <!-- Image Slider Column -->
                <div class="gold-rect">
                </div>
                <div class="col-lg-6" style="position:relative;">
                    <!-- Vertical Rectangle Background -->
                    <!-- Slider -->
                    <!-- Slider Container with Gradient, Shadow, Border, and Rounded Corners -->
                    <div style="background: linear-gradient(135deg, #c7b16b, #4d194d);position:relative;display:flex;align-items:center;justify-content:center;border-radius:20px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                        padding:20px;
                        border:4px solid #4d194d;
                        width:100%;
                        height:auto;
                    ">
                        <!-- Owl Carousel -->
                        <div class="owl-carousel owl-theme" style="width:100%; height:100%;">
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('img/hero-slider-1.jpg')}}" alt=""
                                    style="width:100%;height:auto;object-fit:cover;transition: transform 0.5s ease;">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('img/hero-slider-2.jpg')}}" alt=""
                                    style="width:100%;height:auto;object-fit:cover;transition: transform 0.5s ease;">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('img/hero-slider-3.jpg')}}" alt=""
                                    style="width:100%;height:auto;object-fit:cover;transition: transform 0.5s ease;">
                            </div>
                        </div>

                        <!-- Custom Dots -->
                        <div id="customDots"
                            style="position:absolute;top:50%;right:-25px;transform:translateY(-50%);display:flex;flex-direction:column;gap:10px;z-index:2;">
                            <div class="dot"
                                style="width:16px;height:16px;background-color:white;border:2px solid #c7b16b;cursor:pointer;border-radius:50%;transition: transform 0.3s ease;">
                            </div>
                            <div class="dot"
                                style="width:16px;height:16px;background-color:white;border:2px solid #c7b16b;cursor:pointer;border-radius:50%;transition: transform 0.3s ease;">
                            </div>
                            <div class="dot"
                                style="width:16px;height:16px;background-color:white;border:2px solid #c7b16b;cursor:pointer;border-radius:50%;transition: transform 0.3s ease;">
                            </div>
                        </div>
                    </div>

                    <!-- Optional JS for Hover Zoom Effect -->


                </div>
            </div>
        </div>
    </div>
<br><br>
    <!-- About Start -->
    <div class="container-fluid py-5 about-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s" style="border: 3px solid #4d194d; border-radius: 3px;">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s" style="border: 3px solid #c7b16b; border-radius: 5px;">
                            <img class="img-fluid h-75" src="img/about-2.jpg" alt="">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Award Winning Studio Since 1990</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">About Us</span>Our Journey & Vision</h1>
                    <p class="mb-4">At Book of Record, we celebrate the extraordinary potential of every individual and the boundless spirit of achievement. Since our inception, we have stood as a trusted platform that recognizes, honors, and preserves remarkable feats and inspiring stories that push the limits of human capability.
Our mission goes beyond documenting records it's about encouraging innovation, courage, and excellence that uplift society and inspire others to dream bigger. We take pride in being a part of a global community that values determination and creativity, showcasing the talents that transcend borders and unite people through shared aspirations.
As we continue our journey, we remain dedicated to the principle that “All is One.” Talent knows no boundary it thrives regardless of religion, region, or background. With a vision rooted in inclusiveness, fairness, and passion, 'Book of Record' continues to empower achievers and celebrate every story that contributes to the collective progress of humankind.
</p>
                    <div class="row g-3">
    <div class="col-sm-6">
        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Globally Recognized</h6>
        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Expert Record Verification</h6>
    </div>
    <div class="col-sm-6">
        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Inclusive & Fair</h6>
        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>24/7 Record Support</h6>
    </div>
</div>

                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="#!">Read More</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href="#!"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
   
 <!-- Feature Start -->
<div class="container-fluid py-5 choose-us-section">
  <div class="container">
    <div class="text-center wow fadeIn" data-wow-delay="0.1s">
      <h1 class="mb-5" style="color: #e6ccff; display: inline-block; position: relative;">
  Honoring Extraordinary Records <br>
  <span style="color: #e6ccff; font-weight: 600;">Celebrating Achievements That Inspire the World</span>
  <span style="position: absolute; left: 0; bottom: -5px; width: 100%; height: 4px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
</h1>

    </div>
    <div class="row gy-4 gx-md-5 gx-3 align-items-stretch text-center">
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="choose-card h-100">
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
<!-- Feature End -->


    <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Projects</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest projects</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-1.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Kitchen</h4>
                                    <small class="text-white">72 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-2.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-3.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-4.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-5.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-6.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-5"> Our <span class="text-uppercase text-primary bg-light px-2">Excellent Records</span></h1>
                    At <strong>Book of Record</strong>, we take pride in honoring exceptional talents, innovative ideas, and inspiring achievements that make a difference in the world. Our record categories represent diverse fields of excellence where individuals and organizations have redefined boundaries.
                        </p>
                     <p class="mb-5">
          From creativity and innovation to courage and leadership, every record recognized here is a story of determination and brilliance. Together, these achievements form a legacy of human potential that motivates generations to dream beyond limits.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-1.jpg" alt="">
                                    <h3>Interior Design</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-2.jpg" alt="">
                                    <h3>Implement</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-3.jpg" alt="">
                                    <h3>Renovation</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="#!" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-4.jpg" alt="">
                                    <h3>Commercial</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter p-0">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid w-100" src="img/newsletter.jpg" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5">
                        <h1 class="mb-5">Subscribe the <span
                                class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>
                        <div class="position-relative w-100 mb-2">
                            <input class="form-control border-0 w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 60px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        <p class="mb-0">Diam sed sed dolor stet amet eirmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        const carousel = $(".owl-carousel");
        const dots = document.querySelectorAll("#customDots .dot");

        carousel.owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dot:true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            onChanged: event => updateDots(event.item.index % dots.length)
        });

        function updateDots(index) {
            dots.forEach(dot => dot.style.backgroundColor = "white");
            dots[index].style.backgroundColor = "#4d194d";
        }

        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                carousel.trigger("to.owl.carousel", [i, 300]);
                updateDots(i);
            });
        });

        updateDots(0);
    </script>
    <script>
        document.querySelectorAll('.owl-carousel .item img').forEach(img => {
            img.addEventListener('mouseover', () => img.style.transform = 'scale(1.05)');
            img.addEventListener('mouseout', () => img.style.transform = 'scale(1)');
        });
    </script>
    <script>
    // Hide spinner when page is fully loaded
    window.addEventListener('load', function() {
        const spinner = document.getElementById('spinner');
        if(spinner) {
            spinner.classList.remove('show'); // Remove "show" class
            spinner.style.display = 'none';   // Ensure it's hidden
        }
    });
</script>

</body>

</html>