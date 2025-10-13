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
                    <h1 class="display-1 mb-0 animated slideInLeft" style="font-size: clamp(2rem, 5vw, 6rem);">
                        {{ $category->name }}
                    </h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary"
                                    href="{{ route('admin.admin_home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary"
                                    href="{{ route('admin.adminCategory.index') }}">Category</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $category->name }}
                            </li>
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
                    <div class="choose-card gallery-card p-3" style="border:2px solid #4d194d; border-radius:8px;">
                        <img src="{{ asset('storage/' . $record->image) }}" alt="{{ $record->name }}" class="img-fluid mb-2"
                            style="height:150px; width:100%; object-fit:cover; border-radius:4px;">
                        <h6 class="mb-1"
                            style="max-width: 100%; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word;">
                            {{ $record->name }}
                        </h6>
                        <p class="mb-1"
                            style="font-size:0.85rem; overflow-wrap: break-word; word-break: break-word; max-height: 6em;color:#4d194d;">
                            {{ $record->record_no }}</p><i class="fas fa-medal"></i>
                        <p class="text-muted mb-0"
                            style="font-size:0.85rem; overflow-wrap: break-word; word-break: break-word; max-height: 6em; /* optional max-height */">
                            {{ $record->description }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No records found under this category.</p>
                </div>
            @endforelse
        </div>
    </div>


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