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

    <!-- Buttons Container -->
    <div class="position-absolute" style="bottom: 20px; right: 20px;">
            <a href="#!" id="createGalleryBtn" class="btn btn-primary px-4 py-2 rounded-pill fw-bold"
       data-bs-toggle="modal" data-bs-target="#aboutUsModal">
        <i class="fa fa-plus me-2"></i> Create Gallery
    </a>
    </div>
</div>
<!-- Hero End -->


<!-- Modal Start -->
<div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutUsModalLabel">Create Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" name="desc" rows="6" placeholder="Enter description..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image1" class="form-label">First Image</label>
                        <input class="form-control" type="file" id="image1" name="img" accept="image/*" required>
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


<div class="container-fluid py-4">
  <div class="container">
    <div class="text-center wow fadeIn" data-wow-delay="0.1s">
      <h2 class="mb-4" style="font-weight: 600; position: relative; display: inline-block; font-size: 1.8rem;">
        Gallery of Extraordinary Records
        <span style="position: absolute; left: 0; bottom: -3px; width: 100%; height: 3px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
      </h2>
      <p>Explore a curated collection of remarkable achievements and inspiring moments captured in images.</p>
    </div>

    <div class="row gy-3 gx-2 text-center">

      @forelse($galleries as $gallery)
        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
          <div class="choose-card gallery-card" style="border: 2px solid #4d194d; border-radius: 5px; padding: 8px;">
            <img class="img-fluid" src="{{ asset('storage/' . $gallery->img) }}" alt="{{ $gallery->title }}" 
                 style="width: 100%; height: 150px; object-fit: cover; border-radius: 4px;">
            
            <h6 class="mb-0 mt-1" style="font-weight:600;">{{ $gallery->title }}</h6>
            <p class="text-muted">{{ $gallery->desc }}</p>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-center gap-2">
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editGalleryModal{{ $gallery->id }}">
                <i class="fas fa-edit"></i> Edit
              </button>

              <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editGalleryModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="editGalleryLabel{{ $gallery->id }}" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#c7b16b; color:white;">
                <h5 class="modal-title" id="editGalleryLabel{{ $gallery->id }}">Edit Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-body text-start">
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $gallery->title }}" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="desc" class="form-control" rows="2">{{ $gallery->desc }}</textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <img src="{{ asset('storage/' . $gallery->img) }}" alt="Gallery Image" width="100" height="80" style="object-fit:cover; border-radius:4px; border:1px solid #ccc;">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="img" class="form-control">
                    <small class="text-muted">Leave empty to keep current image</small>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn" style="background-color:#4d194d; color:white;">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12">
          <p class="text-muted">No galleries found.</p>
        </div>
      @endforelse

    </div>
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

