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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          <h1 class="mb-0  slideInLeft" style="color: white">
            Records
          </h1>
        </div>
        <div class="col-lg-6 animated slideInRight">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
              <li class="breadcrumb-item"><a class="text-primary" href="{{ route('admin.admin_home') }}">Home</a></li>
              <li class="breadcrumb-item text-secondary active" aria-current="page">Records</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- Buttons Container -->
    <div class="position-absolute" style="bottom: 20px; right: 20px;">
      <a href="#!" id="createGalleryBtn" class="btn btn-primary px-4 py-2 rounded-pill fw-bold" data-bs-toggle="modal"
        data-bs-target="#aboutUsModal">
        <i class="fa fa-plus me-2"></i> Add Record
      </a>
    </div>
  </div>
  <!-- Hero End -->

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow-sm" role="alert"
      style="border-left: 5px solid #28a745; border-radius: 8px; background: #e6f7ea; color: #155724; font-weight: 500;">

      <!-- Success Icon -->
      <i class="fas fa-check-circle me-2" style="font-size:1rem;"></i>

      <div>{{ session('success') }}</div>

      <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <!-- Modal Start -->
  <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutUsModalLabel">Add Records</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="record_no" class="form-label">Name of Certificate</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Record Number"
                  required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="image" class="form-label">Holder Name</label>
                <input class="form-control" type="text" id="holder_name" name="holder_name" accept="image/*" required>
              </div>
            </div>
            <!-- Description -->
            <div class="mb-3">
              <label for="desc" class="form-label">Description</label>
              <textarea class="form-control" id="desc" name="description" rows="6" placeholder="Enter description..."
                required></textarea>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="record_no" class="form-label">Record Certification Number</label>
                <input type="text" class="form-control" id="record_no" name="record_no"
                  placeholder="Enter Record Number" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="years" placeholder="Enter year">
              </div>
              <div class="col-md-6 mb-3">
                <label for="provider" class="form-label">Provider</label>
                <input type="text" class="form-control" id="providers" name="providers" placeholder="Record provider">
              </div>
            </div>

            <!-- Category -->
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" id="category" name="category_id" required>
                <option value="" disabled selected>Select a Category</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <!-- Details -->
            <div class="mb-3">
              <label for="details" class="form-label">Details (Optional)</label>
              <textarea class="form-control" id="details" name="details" rows="4"
                placeholder="Enter additional details..."></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Record</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="container">
      <div class="text-center wow fadeIn" data-wow-delay="0.1s">
        <h2 class="mb-4" style="font-weight: 600; position: relative; display: inline-block; font-size: 1.8rem;">
          Records of Extraordinary Achievements
          <span
            style="position: absolute; left: 0; bottom: -3px; width: 100%; height: 3px; background: linear-gradient(90deg, #e6ccff, #b19cd9); border-radius: 2px;"></span>
        </h2>
        <p>Explore all remarkable records along with their categories and details.</p>
      </div>

      <div class="row gy-3 gx-2 text-center">

        @forelse($records as $record)
          <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="choose-card gallery-card d-flex flex-column justify-content-between"
              style="border: 2px solid #4d194d; border-radius: 5px; padding: 8px; height: 100%;">

              <!-- Image -->
              <img class="img-fluid mb-2" src="{{ asset('storage/' . $record->image) }}"
                style="width: 100%; height: 150px; object-fit:contain; border-radius: 4px; background-color:#f8f8f8;">

              <!-- Name -->
              <h6 class="mb-1 mt-1" style="font-weight:600; word-break: break-word;">
                {{ $record->name }}
              </h6>

              <!-- Record No & Category -->
              <p class="text-muted mb-1" style="font-size:0.85rem; word-break: break-word; color:#4d194d;">
                {{ $record->record_no }} | {{ $record->category->name ?? 'No Category' }}
              </p>

              <!-- Medal icon -->
              <p class="mb-1"><i class="fas fa-medal"></i></p>

              <!-- Description -->
              <p class="mb-2" style="font-size:0.85rem; word-break: break-word; overflow-wrap: break-word;">
                {{ $record->description }}
              </p>

              <!-- Buttons -->
              <div class="d-flex justify-content-center gap-2 mt-auto">
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                  data-bs-target="#editRecordModal{{ $record->id }}">
                  <i class="fas fa-edit"></i> Edit
                </button>

                <form action="{{ route('admin.adminRecord.destroy', $record->id) }}" method="POST" class="deleteForm">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-sm btn-outline-danger delete-btn">
                    <i class="fas fa-trash"></i> Delete
                  </button>
                </form>

              </div>

            </div>


          </div>

          <!-- Edit Record Modal -->
          <div class="modal fade" id="editRecordModal{{ $record->id }}" tabindex="-1"
            aria-labelledby="editRecordLabel{{ $record->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#c7b16b; color:white;">
                  <h5 class="modal-title" id="editRecordLabel{{ $record->id }}">Edit Record</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('admin.adminRecord.update', $record->id) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

                  <div class="modal-body text-start">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="record_no" class="form-label">Name of Certificate</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}"
                          required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Holder Name</label>
                        <input class="form-control" type="text" id="holder_name" name="holder_name"
                          value="{{ $record->holder_name }}" required>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Category</label>
                      <select name="category_id" class="form-select" required>
                        <option value="" disabled>Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" {{ $record->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Certificate No</label>
                        <input type="text" name="record_no" class="form-control" value="{{ $record->record_no }}"
                          required>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Current Image</label><br>
                        <img src="{{ asset('storage/' . $record->image) }}" alt="Record Image" width="100" height="80"
                          style="object-fit:cover; border-radius:4px; border:1px solid #ccc;">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Year</label>
                        <input type="text" name="years" class="form-control" value="{{ $record->years ?? '' }}"
                          placeholder="Enter year">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Provider</label>
                        <input type="text" name="providers" class="form-control" value="{{ $record->providers ?? '' }}"
                          placeholder="Record provider">
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Description</label>
                      <textarea name="description" class="form-control" rows="2">{{ $record->description }}</textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Change Image</label>
                      <input type="file" name="image" class="form-control">
                      <small class="text-muted">Leave empty to keep current image</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Details</label>
                      <textarea name="details" class="form-control" rows="2">{{ $record->details }}</textarea>
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
            <p class="text-muted">No records found.</p>
          </div>
        @endforelse

      </div>
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
  <script>
    // Select all delete buttons
    document.querySelectorAll('.delete-btn').forEach(function (button) {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        const form = this.closest('form');

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit(); // submit the form if confirmed
          }
        })
      });
    });
  </script>

</body>

</html>