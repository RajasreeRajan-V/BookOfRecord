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
    <title>BOOK OF RECORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="Book of Record Logo" class="logo-img me-3"
                        style="height:50px;">
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

                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inspiring Records</a>
                            <div class="dropdown-menu bg-light mt-2">
                                    <a href="{{ route('category' ) }}" class="dropdown-item">Types of Records</a>
                                    <a href="{{ route('form.index' ) }}" class="dropdown-item">Record Application Form</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu bg-light mt-2">
                                @foreach($categorious as $category)
                                    <a href="{{ route('category.record', $category->id) }}" class="dropdown-item">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
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
                    <h5
                        style="border:1px solid #cfd9d8;padding:10px 25px;font-weight:500;color:#4d194d;display:inline-block;margin-top:10px;">
                        Discover the extraordinary in every record, from human achievements to natural wonders, all in
                        one place.
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
                                <img class="img-fluid" src="{{ asset('img/image2.png')}}" alt=""
                                    style="width:100%;height:auto;object-fit:cover;transition: transform 0.5s ease;">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('img/image3.png')}}" alt=""
                                    style="width:100%;height:auto;object-fit:cover;transition: transform 0.5s ease;">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('img/image1.png')}}" alt=""
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
    <!-- About Start -->
    <div class="container-fluid py-5 about-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        @if($about)
                            <div class="col-6 wow fadeIn" data-wow-delay="0.1s"
                                style="border: 3px solid #4d194d; border-radius: 1px;">
                                <img class="img-fluid" src="{{ asset('storage/' . $about->img1) }}" alt="">
                            </div>
                            <div class="col-6 wow fadeIn" data-wow-delay="0.3s"
                                style="border: 3px solid #c7b16b; border-radius: 1px;">
                                <img class="img-fluid h-75" src="{{ asset('storage/' . $about->img2) }}" alt="">
                                <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                    <h4 class="text-white lh-base mb-0">{{ $about->title }}</h4>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    @if($about)
                        <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">About
                                Us</span>{{ $about->title }}</h1>
                        <p class="mb-4">{{ $about->desc }}</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $about->tag1 }}</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{ $about->tag2 }}</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $about->tag3 }}</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{ $about->tag4 }}</h6>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5 choose-us-section">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5" style="color: #e6ccff; display: inline-block; position: relative;">
                    Honoring Extraordinary Records <i class="fas fa-medal" style="margin-left:10px;"></i><br>
                    <span style="color: #e6ccff; font-weight: 600;">
                        Celebrating Achievements That Inspire
                    </span>
                    <span style="position: absolute; left: 0; bottom: -5px; width: 100%; height: 4px; 
                 background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
                </h1>

            </div>

            <div class="row gy-4 gx-md-5 gx-3 text-center">
                @foreach($categories as $index => $category)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="choose-card h-100">
                            <i class="fa fa-star fa-5x text-primary mb-4"></i>
                            <h4 style="overflow-wrap:break-word; word-break:break-word; font-weight:600;">
                                {{ $category->name }}
                            </h4>
                            <p style="overflow-wrap:break-word; word-break:break-word;">
                                {{ $category->description }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <!-- Left Banner -->
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-4">
                            Celebrating Lives in <span class="text-uppercase text-primary bg-light px-2">Our
                                Gallery</span>
                        </h1>
                        <p class="text-white mb-4">
                            Witness moments of achievement and celebration as individuals are honored for their
                            extraordinary talents, remarkable milestones, and inspiring contributions.
                            Each photograph captures the pride, joy, and determination behind every record and award.
                        </p>
                        <h4 class="text-white mb-0">
                            <span class="display-1">{{ $galleries->count() }}</span> memorable achievements captured
                        </h4>
                    </div>
                </div>

                <!-- Right Gallery Grid -->
                <div class="col-lg-7">
                    <div class="row g-0">
                        @foreach($galleries as $index => $gallery)
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ 0.2 + ($index * 0.1) }}s">
                                <div class="project-item position-relative overflow-hidden" style="margin:5px 0;">
                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $gallery->img) }}"
                                        style="width:100%; height:200px; object-fit:cover; display:block;">

                                    <a class="project-overlay text-decoration-none d-flex flex-column justify-content-center align-items-center"
                                        href="#!" style="position:absolute; top:0; left:0; width:100%; height:100%; 
                                                                background:rgba(0,0,0,0.6); color:#fff; opacity:0; transition:0.3s;
                                                                padding:10px; box-sizing:border-box; text-align:center;">
                                        <h4 style="width:100%; margin:0; 
                                                                        overflow:hidden; 
                                                                        word-break:break-word; 
                                                                        font-size:1rem; line-height:1.2em; color:#fff;">
                                            {{ $gallery->title }}
                                        </h4>

                                    </a>
                                </div>
                            </div>
                        @endforeach
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
                    <h1 class="mb-5"> Our <span class="text-uppercase text-primary bg-light px-2">Excellent
                            Records</span></h1>
                    At <strong>Book of Record</strong>, we take pride in honoring exceptional talents, innovative ideas,
                    and inspiring achievements that make a difference in the world. Our record categories represent
                    diverse fields of excellence where individuals and organizations have redefined boundaries.
                    </p>
                    <p class="mb-5">
                        From creativity and innovation to courage and leadership, every record recognized here is a
                        story of determination and brilliance. Together, these achievements form a legacy of human
                        potential that motivates generations to dream beyond limits.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        @foreach($records as $index => $record)
                            <div class="col-md-6 wow fadeIn" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                                <div
                                    class="service-item h-100 d-flex flex-column justify-content-center {{ $index % 2 == 0 ? 'bg-primary' : 'bg-light' }}">
                                    <a href="#!" class="service-img position-relative mb-4">
                                        <img class="img-fluid w-100" src="{{ asset('storage/' . $record->image) }}"
                                            alt="{{ $record->name }}" style="height:200px; object-fit:cover;">
                                        <h3 style="font-size:1.25rem;
                                                                            line-height:1.2em;
                                                                            max-height:2.4em; /* 2 lines */
                                                                            display:-webkit-box;
                                                                            -webkit-line-clamp:2;
                                                                            -webkit-box-orient:vertical;
                                                                            overflow:hidden;
                                                                            word-break:break-word;
                                                                            text-overflow:ellipsis;">
                                            {{ $record->name }}
                                        </h3>
                                    </a>
                                    <p
                                        style="max-height:4.5em; overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
                                        {{ $record->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        <!-- Service End -->
<!-- Verify Certificate Start -->
<div class="container text-center py-5" style="max-width:700px;">
    <h1 class="mb-3">Verify Your Certificate</h1>
    <p class="mb-4">Enter your certificate code to verify its authenticity and view the associated record details.</p>

    <form id="verifyForm" class="d-flex justify-content-center">
        <input class="form-control me-2" type="text" name="code" 
               placeholder="Enter certificate code (e.g., BR123)" 
               style="height: 50px; max-width: 400px; border: 2px solid #4d194d; border-radius: 5px;" required>
        <button type="submit" class="btn btn-primary" style="height: 50px;">Verify</button>
    </form>

    <div id="result" class="mt-4"></div>
</div>


<!-- Footer Start -->
<div class="container-fluid text-dark-50 footer pt-5" 
     style="background: linear-gradient(135deg, #4d194d, #c7b16b);">
  <div class="container py-5">
    <!-- Use align-items-stretch so columns are equal height; g-4 for slightly tighter spacing -->
    <div class="row g-4 justify-content-center text-center text-md-start align-items-stretch">

      <!-- About Section -->
      <div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
        <!-- Make column a flex column so content can be vertically centered if needed -->
        <div class="d-flex flex-column h-100">
          <a href="{{ route('home') }}" class="d-inline-block mb-3">
            <h1 class="m-0" style="color:#c7b16b; font-size:1.25rem;">BOOK OF RECORD</h1>
          </a>
          <p class="mb-0 mt-2" style="color:#e6ccff; line-height:1.4;">
            Book of Record is a global platform dedicated to recognizing extraordinary achievements 
            and inspiring individuals to push beyond their limits. We honor talents, innovations, 
            and milestones that make a difference—celebrating every story of determination, creativity, 
            and excellence.
          </p>
        </div>
      </div>

      <!-- Our Highlights (Centered) -->
      <div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <div class="d-flex flex-column h-100 justify-content-center">
          <h5 class="mb-4" style="color: #c7b16b;">Our Highlights</h5>

          <!-- limit width and center the list for better visual balance -->
          <ul class="list-unstyled mx-auto" style="color: #e6ccff; max-width: 300px;">
            <li class="d-flex align-items-start mb-2">
              <i class="fa-solid fa-star me-3" style="font-size:1rem; margin-top:3px;"></i>
              <span>Recognizing Extraordinary Achievements</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <i class="fa-solid fa-trophy me-3" style="font-size:1rem; margin-top:3px;"></i>
              <span>Inspiring Individuals Worldwide</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <i class="fa-solid fa-book me-3" style="font-size:1rem; margin-top:3px;"></i>
              <span>Documenting Talents and Milestones</span>
            </li>
            <li class="d-flex align-items-start">
              <i class="fa-solid fa-lightbulb me-3" style="font-size:1rem; margin-top:3px;"></i>
              <span>Motivating Creativity and Excellence</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
        <div class="d-flex flex-column h-100 justify-content-center text-center text-md-start">
          <h5 class="mb-4" style="color: #c7b16b;">Quick Links</h5>

          <div class="d-flex flex-column">
            <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;" href="{{ route('home') }}">
              <i class="fa-solid fa-house me-2"></i> Home
            </a>
            <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;" href="{{ route('about') }}">
              <i class="fa-solid fa-circle-info me-2"></i> About Us
            </a>
            <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;" href="{{ route('gallery') }}">
              <i class="fa-solid fa-images me-2"></i> Gallery
            </a>
            <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;" href="{{ route('category') }}">
              <i class="fa-solid fa-trophy me-2"></i> Inspiring Records
            </a>
            <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;" href="{{ route('contact.index') }}">
              <i class="fa-solid fa-envelope me-2"></i> Contact
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="container">
    <div class="copyright text-center py-3">
      <p class="footer-text mt-3 mb-0" style="color: #c7b16b;">
        Copyright &copy; 2025
        <a href="http://astrasoftwaresolutions.com/" target="_blank" style="color: #e6ccff;">
          ASTRA SOFTWARE SOLUTIONS
        </a> | All rights reserved
      </p>
    </div>
  </div>
</div>
<!-- Footer End -->



    </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            dot: true,
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

        document.querySelectorAll('.owl-carousel .item img').forEach(img => {
            img.addEventListener('mouseover', () => img.style.transform = 'scale(1.05)');
            img.addEventListener('mouseout', () => img.style.transform = 'scale(1)');
        });

        // Hide spinner when page is fully loaded
        window.addEventListener('load', function () {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show'); // Remove "show" class
                spinner.style.display = 'none';   // Ensure it's hidden
            }
        });

        document.querySelectorAll('.project-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.querySelector('.project-overlay').style.opacity = '1';
            });
            item.addEventListener('mouseleave', () => {
                item.querySelector('.project-overlay').style.opacity = '0';
            });
        });
    </script>
<script>
$(document).ready(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        let code = $('input[name="code"]').val();

        $.ajax({
            url: '/verify-certificate', 
            method: 'GET',
            data: { code: code },
            success: function(res) {
                if(res.status === 'success') {
                    $('#result').html(`
                        <div style="
                            border-left: 5px solid #4d194d;
                            background: linear-gradient(90deg, #f9f0ff, #fff7e6);
                            padding: 15px 20px;
                            border-radius: 8px;
                            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                            color: #4d194d;
                            font-weight: 500;
                            margin-top: 15px;
                        ">
                            <h5 style="margin-bottom:10px; font-weight:600;"><i class="fas fa-check-circle me-2" style="color: #28a745;"></i>Certificate Verified</h5>
                            <p><strong>Certificate Holder:</strong> ${res.holder_name}</p>
                            <p><strong>Certificate Name:</strong> ${res.certificate_name}</p>
                            <p><strong>Years:</strong> ${res.years}</p>
                        </div>
                    `);
                } else {
                    $('#result').html(`
                        <div style="
                            border-left: 5px solid #c7b16b;
                            background: #fff0e6;
                            padding: 15px 20px;
                            border-radius: 8px;
                            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                            color: #c7b16b;
                            font-weight: 500;
                            margin-top: 15px;
                        ">
                   
                            <p style="color:red;">${res.message}</p>
                        </div>
                    `);
                }
            },
            error: function() {
                $('#result').html(`
                    <div style="
                        border-left: 5px solid #c7b16b;
                        background: #fff0e6;
                        padding: 15px 20px;
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                        color: #c7b16b;
                        font-weight: 500;
                        margin-top: 15px;
                    ">
                        <h5 style="margin-bottom:10px; font-weight:600;"><i class="fas fa-times me-2" style="color:red;"></i>Error</h5>
                        <p>Something went wrong. Try again.</p>
                    </div>
                `);
            }
        });
    });
});
</script>

</body>

</html>