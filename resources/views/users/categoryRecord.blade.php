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
          <img src="{{ asset('img/logo.png') }}" alt="Book of Record Logo" class="logo-img me-3" style="height:50px;">
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
                <a href="{{ route('category') }}" class="dropdown-item">Types of Records</a>
                <a href="{{ route('form.index') }}" class="dropdown-item">Record Application Form</a>
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
          <h1 class="mb-0  slideInLeft" style="color: white">
            Records in {{ $category->name }}
          </h1>
        </div>
        <div class="col-lg-6 animated slideInRight">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
              <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a class="text-primary" href="{{ route('category')}}">Category</a></li>
              <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $category->name }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->


  <!-- Records Section -->
  <div class="container py-5">
    <h2 class="mb-4">{{ $category->name }} - Records</h2>
    <p>{{ $category->description }}</p>

    <div class="row gy-3 gx-2">
      @forelse($records as $record)
        <div class="col-6 col-md-4">
          <a href="{{ route('category.single.record', $record->id) }}" style="text-decoration: none; color: inherit;">
            <div class="choose-card gallery-card p-3" style="border:2px solid #4d194d; border-radius:8px;">
              <img src="{{ asset('storage/' . $record->image) }}" class="img-fluid mb-2"
                style="height:150px; width:100%; object-fit:contain; border-radius:4px; background-color:#f8f8f8;">

              <h6 class="mb-1"
                style="max-width: 100%; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word;">
                {{ $record->name }}
              </h6>
              <p class="mb-1" style="font-size:0.85rem; color:#4d194d;">
                <i class="fas fa-medal"></i> {{ $record->record_no }}
              </p>
              <p class="text-muted mb-0" style="font-size:0.85rem;">
                {{ Str::limit($record->description, 80) }}
              </p>
            </div>
          </a>
        </div>
      @empty
        <div class="col-12">
          <p class="text-muted">No records found under this category.</p>
        </div>
      @endforelse
    </div>

  </div>


  <!-- Footer Start -->
  <div class="container-fluid text-dark-50 footer pt-5" style="background: linear-gradient(135deg, #4d194d, #c7b16b);">
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
              <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;"
                href="{{ route('about') }}">
                <i class="fa-solid fa-circle-info me-2"></i> About Us
              </a>
              <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;"
                href="{{ route('gallery') }}">
                <i class="fa-solid fa-images me-2"></i> Gallery
              </a>
              <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;"
                href="{{ route('category') }}">
                <i class="fa-solid fa-trophy me-2"></i> Inspiring Records
              </a>
              <a class="btn btn-link px-0 d-flex align-items-center" style="color: #e6ccff;"
                href="{{ route('contact.index') }}">
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