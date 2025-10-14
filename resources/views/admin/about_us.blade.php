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
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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

        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header position-relative">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
               <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="mb-0 animated slideInLeft" 
                            style="white-space: nowrap;color: white;">
                            About Us
                        </h1>
                    </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary"
                                    href="{{ route('admin.admin_home') }}">Home</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Buttons Container -->
        <div class="position-absolute" style="bottom: 20px; right: 20px;">
            <a href="#!" id="createAboutBtn" class="btn btn-primary px-4 py-2 rounded-pill fw-bold"
                data-bs-toggle="modal" data-bs-target="#aboutUsModal">
                <i class="fa fa-plus me-2"></i> Create About Us
            </a>

            @if($about)
                <span class="text-white fw-bold mx-2">/</span>
                <a href="#!" id="editAboutBtn" class="btn btn-secondary px-4 py-2 rounded-pill fw-bold"
                    data-bs-toggle="modal" data-bs-target="#editAboutUsModal">
                    <i class="fa fa-edit me-2"></i> Edit About Us
                </a>
            @endif
        </div>
    </div>
    <!-- Hero End -->



    <!-- Hero End -->

    <!-- Modal Start -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel">Create About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.aboutUs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="desc" rows="6"
                                placeholder="Enter description..." required></textarea>
                        </div>

                        <!-- Images in one row -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="image1" class="form-label">First Image</label>
                                <input class="form-control" type="file" id="image1" name="img1" accept="image/*"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="image2" class="form-label">Second Image</label>
                                <input class="form-control" type="file" id="image2" name="img2" accept="image/*">
                            </div>
                        </div>

                        <!-- Tags Section -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="tag1" class="form-label">First Tag</label>
                                <input type="text" class="form-control" id="tag1" name="tag1" placeholder="Enter Tag 1">
                            </div>
                            <div class="col-md-6">
                                <label for="tag2" class="form-label">Second Tag</label>
                                <input type="text" class="form-control" id="tag2" name="tag2" placeholder="Enter Tag 2">
                            </div>
                            <div class="col-md-6">
                                <label for="tag3" class="form-label">Third Tag</label>
                                <input type="text" class="form-control" id="tag3" name="tag3" placeholder="Enter Tag 3">
                            </div>
                            <div class="col-md-6">
                                <label for="tag4" class="form-label">Fourth Tag</label>
                                <input type="text" class="form-control" id="tag4" name="tag4" placeholder="Enter Tag 4">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save About Us</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->
    @if($about)
        <div class="modal fade" id="editAboutUsModal" tabindex="-1" aria-labelledby="editAboutUsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('admin.aboutUs.update', $about->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Important for update -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="editAboutUsModalLabel">Edit About Us</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Title -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $about->title }}" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea name="desc" class="form-control" rows="5" required>{{ $about->desc }}</textarea>
                            </div>

                            <!-- Images -->
                            <div class="mb-3">
                                <label for="img1" class="form-label">Image 1</label>
                                <input type="file" name="img1" class="form-control">
                                <img src="{{ asset('storage/' . $about->img1) }}" alt="" class="img-fluid mt-2"
                                    style="max-height: 100px;">
                            </div>

                            <div class="mb-3">
                                <label for="img2" class="form-label">Image 2</label>
                                <input type="file" name="img2" class="form-control">
                                <img src="{{ asset('storage/' . $about->img2) }}" alt="" class="img-fluid mt-2"
                                    style="max-height: 100px;">
                            </div>

                            <!-- Tags -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tag 1</label>
                                    <input type="text" name="tag1" class="form-control" value="{{ $about->tag1 }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tag 2</label>
                                    <input type="text" name="tag2" class="form-control" value="{{ $about->tag2 }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tag 3</label>
                                    <input type="text" name="tag3" class="form-control" value="{{ $about->tag3 }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tag 4</label>
                                    <input type="text" name="tag4" class="form-control" value="{{ $about->tag4 }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Update About Us</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow-sm" role="alert"
         style="border-left: 5px solid #28a745; border-radius: 8px; background: #e6f7ea; color: #155724; font-weight: 500;">
        
        <!-- Success Icon -->
        <i class="fas fa-check-circle me-2" style="font-size:1rem;"></i>
        
        <div>{{ session('success') }}</div>
        
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <!-- About Start -->
    <div class="container-fluid py-5 about-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        @if($about)
                            <div class="col-6 wow fadeIn" data-wow-delay="0.1s"
                                style="border: 3px solid #4d194d; border-radius: 3px;">
                                <img class="img-fluid" src="{{ asset('storage/' . $about->img1) }}" alt="">
                            </div>
                            <div class="col-6 wow fadeIn" data-wow-delay="0.3s"
                                style="border: 3px solid #c7b16b; border-radius: 5px;">
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



    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script href="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script href="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script href="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script href="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>