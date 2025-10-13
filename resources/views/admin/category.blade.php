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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <div class="col-lg-6 text-center ">
                    <h1
                        style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;color:white;font-size: 40px; font-weight: bold;">
                        Discover the Types of Records
                    </h1>
                </div>

                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary"
                                    href="{{ route('admin.admin_home') }}">Home</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Buttons Container -->
        <div class="position-absolute" style="bottom: 20px; right: 20px;">
            <a href="#!" id="createAboutBtn" class="btn btn-primary px-4 py-2 rounded-pill fw-bold"
                data-bs-toggle="modal" data-bs-target="#aboutUsModal">
                <i class="fa fa-plus me-2"></i> Add Category
            </a>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Modal Start -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel">Create Types of Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.adminCategory.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="name" placeholder="Enter Title"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="6"
                                placeholder="Enter description..." required></textarea>
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
    <div class="container-fluid py-5">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5" style="display: inline-block; position: relative;">
                    Record Categories
                    <span
                        style="position: absolute; left: 0; bottom: -5px; width: 100%; height: 4px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
                </h1>
                <p class="lead">Click on a category to view the records under it</p>
            </div>

            <div class="row gy-4 gx-md-5 gx-3 align-items-stretch text-center">
                @foreach($categories as $category)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <!-- Make the whole card clickable by using an <a> tag -->
                        <a href="{{ route('admin.adminCategory.show', $category->id) }}"
                            style="text-decoration: none; color: inherit;">
                            <div class="choose-card h-100 p-4"
                                style="background-color: #e3d8b5; border-radius: 10px; cursor: pointer;">
                                <i class="fa fa-star fa-5x text-primary mb-4"></i>
                                <h4 style="word-wrap: break-word; overflow-wrap: break-word;">
                                    {{ $category->name }}
                                </h4>

                                <p class="text-wrap" style="overflow-wrap: break-word;">
                                    {{ $category->description }}
                                </p>

                                <div class="d-flex justify-content-center gap-2 mt-3">
                                    <!-- Edit Button -->
                                    <button class="btn btn-primary btn-sm editBtn" data-id="{{ $category->id }}"
                                        data-name="{{ $category->name }}" data-description="{{ $category->description }}"
                                        data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.adminCategory.destroy', $category->id) }}" method="POST"
                                        class="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    {{-- Edit Modal --}}
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form id="editCategoryForm" action="" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields -->
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3"
                                required></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.editBtn');
            const form = document.getElementById('editCategoryForm');
            const nameField = document.getElementById('edit_name');
            const descField = document.getElementById('edit_description');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.dataset.id;
                    const name = this.dataset.name;
                    const description = this.dataset.description;

                    nameField.value = name;
                    descField.value = description;

                    // Set form action dynamically
                    form.action = `/admin/adminCategory/${id}`;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('.deleteForm');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault(); // prevent form from submitting immediately

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // submit the form if confirmed
                        }
                    });
                });
            });
        });
    </script>

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