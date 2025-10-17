<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOOK OF RECORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
                                <a href="{{ route('category') }}" class="dropdown-item">Types of Records</a>
                                <a href="{{ route('form.index') }}" class="dropdown-item">Record Application Form</a>
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
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow-sm" role="alert"
            style="border-left: 5px solid #28a745; border-radius: 8px; background: #e6f7ea; color: #155724; font-weight: 500;">

            <!-- Success Icon -->
            <i class="fas fa-check-circle me-2" style="font-size:1rem;"></i>

            <div>{{ session('success') }}</div>

            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



<div class="container"
    style="max-width: 900px; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(77,25,77,0.2);">
    <h2 class="text-center mb-4" style="color:#4d194d; font-weight:700;">Record Attempt Application Form</h2>

    <form id="recordForm" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <table class="table table-borderless" style="width:100%;">
            <tbody>
                <tr>
                    <td style="width:35%; font-weight:600;">Full Name:</td>
                    <td>
                        <input type="text" name="full_name" id="full_name" class="form-control"
                            title="Only letters and spaces, 3-50 characters" value="{{ old('name') }}">
                        <small class="text-danger error" id="error_full_name"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Mobile No:</td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
                        <small class="text-danger error" id="error_mobile"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Date of Birth:</td>
                    <td>
                        <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
                        <small class="text-danger error" id="error_dob"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Gender:</td>
                    <td>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <small class="text-danger error" id="error_gender"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Email:</td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        <small class="text-danger error" id="error_email"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Occupation:</td>
                    <td>
                        <input type="text" name="occupation" id="occupation" class="form-control"
                            value="{{ old('occupation') }}">
                        <small class="text-danger error" id="error_occupation"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Permanent Address:</td>
                    <td>
                        <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                        <small class="text-danger error" id="error_address"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Detailed Description of Attempt (max 3000 chars):</td>
                    <td>
                        <textarea name="description" id="description" class="form-control" rows="6" maxlength="3000"
                            placeholder="Describe your record attempt..."></textarea>
                        <small class="text-danger error" id="error_description"></small>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:600;">Upload Evidence:</td>
                    <td>
                        <div id="dropZone"
                            style="border: 2px dashed #4d194d; border-radius:5px; padding:20px; text-align:center; cursor:pointer; background-color:#fafafa; position:relative;">
                            <p style="margin:0; font-weight:600; color:#4d194d;">Drag & Drop files here, paste or browse</p>
                            <input type="file" name="evidence_files[]" id="evidence_files" multiple
                                accept="video/*,.jpg,.jpeg,.png,.pdf"
                                style="opacity:0; position:absolute; width:100%; height:100%; top:0; left:0; cursor:pointer;">
                            <small class="text-muted" style="display:block; margin-top:5px;">
                                Multiple files allowed: videos, proofs, images, PDFs.
                            </small>
                        </div>
                        <small class="text-danger error" id="error_evidence_files"></small>

                        <div style="margin-top:15px;">
                            <label for="google_drive_link" style="font-weight:600;">Or provide a Google Drive link *</label>
                            <input type="url" name="google_drive_link" id="google_drive_link" class="form-control"
                                placeholder="https://drive.google.com/..." style="margin-top:5px;">
                            <small class="text-muted">Optional: Provide a Google Drive link to your files.</small>
                            <small class="text-danger error" id="error_google_drive_link"></small>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div style="background-color:#f1f1f1; padding:10px; border-radius:5px; margin-bottom:10px;">
                            <strong>Terms & Conditions:</strong>
                            <ol style="padding-left:20px; margin-top:5px;">
                                <li>I authorize Book of Records to use the material submitted in their
                                    publications, productions, websites, and media.</li>
                                <li>I accept that Book of Records will not be responsible for participant safety. Safety is
                                    solely my responsibility.</li>
                                <li>I confirm all information provided is true and correct.</li>
                                <li>I authorize Book of Records to contact me in future regarding records, services, or
                                    updates.</li>
                            </ol>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="terms" id="terms">
                            <label class="form-check-label" for="terms">I agree to the above terms and conditions *</label>
                        </div>
                        <small class="text-danger error" id="error_terms"></small>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" class="btn"
                            style="background-color:#4d194d; color:white; padding:10px 30px;">Submit
                            Application</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
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
document.getElementById('recordForm').addEventListener('submit', function (e) {
    let isValid = true;

    // Clear all error messages
    document.querySelectorAll('.error').forEach(el => el.textContent = '');

    const name = document.getElementById('full_name').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const dob = document.getElementById('dob').value.trim();
    const gender = document.getElementById('gender').value.trim();
    const email = document.getElementById('email').value.trim();
    const occupation = document.getElementById('occupation').value.trim();
    const address = document.getElementById('address').value.trim();
    const description = document.getElementById('description').value.trim();
    const evidence = document.getElementById('evidence_files').files;
    const googleDrive = document.getElementById('google_drive_link').value.trim();
    const terms = document.getElementById('terms').checked;

    // Regex patterns
    const namePattern = /^[A-Za-z\s]{3,50}$/;
    const mobilePattern = /^[0-9]{10}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Name
    if (!name) {
        document.getElementById('error_full_name').textContent = 'Full name is required.';
        isValid = false;
    } else if (!namePattern.test(name)) {
        document.getElementById('error_full_name').textContent = 'Only letters and spaces allowed (3–50 chars).';
        isValid = false;
    }

    // Mobile
    if (!mobile) {
        document.getElementById('error_mobile').textContent = 'Mobile number is required.';
        isValid = false;
    } else if (!mobilePattern.test(mobile)) {
        document.getElementById('error_mobile').textContent = 'Enter a valid 10-digit mobile number.';
        isValid = false;
    }

    // DOB
    if (!dob) {
        document.getElementById('error_dob').textContent = 'Date of birth is required.';
        isValid = false;
    }

    // Gender
    if (!gender) {
        document.getElementById('error_gender').textContent = 'Please select your gender.';
        isValid = false;
    }

    // Email
    if (!email) {
        document.getElementById('error_email').textContent = 'Email is required.';
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('error_email').textContent = 'Enter a valid email address.';
        isValid = false;
    }

    // Occupation
    if (!occupation) {
        document.getElementById('error_occupation').textContent = 'Occupation is required.';
        isValid = false;
    }

    // Address
    if (!address) {
        document.getElementById('error_address').textContent = 'Permanent address is required.';
        isValid = false;
    }

    // Description
    if (!description) {
        document.getElementById('error_description').textContent = 'Please describe your record attempt.';
        isValid = false;
    }

    // Evidence or Google Drive
    if (evidence.length === 0 && googleDrive === '') {
        document.getElementById('error_evidence_files').textContent =
            'Please upload at least one file or provide a Google Drive link.';
        isValid = false;
    }

    // Terms
    if (!terms) {
        document.getElementById('error_terms').textContent = 'You must agree to the terms and conditions.';
        isValid = false;
    }

    if (!isValid) e.preventDefault();
});
</script>
</body>

</html>