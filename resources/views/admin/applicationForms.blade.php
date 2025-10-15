<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Book Of Record</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('admin.admin_home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('admin.contactUs.index') }}" class="nav-link">Contact</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin.admin_home') }}" class="brand-link d-flex align-items-center">
        <img src="{{ asset('admin/dist/img/logo.png')}}" alt="Logo" class="brand-image"
          style="width:50px; height:50px; border-radius:0; object-fit:cover; border:2px solid #c7b16b;">
        <span class="brand-text fw-bold ms-3" style=" font-size:1.2rem;">Book Of Record</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admin/dist/img/user-logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin/Manager</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('admin.admin_home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.aboutUs.index') }}" class="nav-link">
                <i class="fas fa-info-circle"></i>
                <p>
                  About Us
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.adminCategory.index') }}" class="nav-link">
                <i class="fas fa-medal"></i>
                <p>
                  Create Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.adminRecord.index') }}" class="nav-link">
                <i class="fas fa-trophy"></i>
                <p>
                  Create Records
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Record Categories
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                @foreach($categories as $category)
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        {{ $category->name }}
                        @if($category->records->count())
                          <i class="fas fa-angle-left right"></i>
                        @endif
                      </p>
                    </a>

                    @if($category->records->count())
                      <ul class="nav nav-treeview">
                        @foreach($category->records as $record)
                          <li class="nav-item">
                            <a href="{{ route('admin.adminCategory.show', $category->id) }}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>{{ $record->name }}</p>
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.gallery.index') }}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.contactUs.index') }}" class="nav-link">
                <i class="fas fa-envelope"></i>
                <p>
                  Contact Us
                </p>
              </a>
            </li> <li class="nav-item">
              <a href="{{ route('admin.adminForm.index') }}" class="nav-link">
                <i class="fas fa-envelope"></i>
                <p>
                 Application Forms
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <p>Log Out</p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

    <br>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow-sm" role="alert"
         style="border-left: 5px solid #28a745; border-radius: 8px; background: #e6f7ea; color: #155724; font-weight: 500;">
        
        <!-- Success Icon -->
        <i class="fas fa-check-circle me-2" style="font-size:1rem;"></i>
        
        <div>{{ session('success') }}</div>
        
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
    </div>
@endif
   <div class="container-fluid py-4">
  <div class="container">
    <h3 class="mb-4 fw-bold text-center">Record Attempt Applications</h3>

    <table class="table align-middle text-center">
      <thead class="thead-light" style="background: linear-gradient(90deg, #4d194d, #c7b16b); color: #fff;">
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Gender</th>
          <th>Occupation</th>
          <th>Submitted On</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($forms as $form)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $form->full_name }}</td>
            <td>{{ $form->email }}</td>
            <td>{{ $form->mobile }}</td>
            <td>{{ $form->gender }}</td>
            <td>{{ $form->occupation ?? '-' }}</td>
            <td>{{ $form->created_at->timezone('Asia/Kolkata')->format('d M Y H:i') }}</td>
            <td class="d-flex justify-content-center gap-2">
              
              <!-- View Button -->
             <a href="javascript:void(0)" 
                class="btn btn-sm btn-info viewFormBtn" 
                data-id="{{ $form->id }}"
                data-name="{{ $form->full_name }}"
                data-email="{{ $form->email }}"
                data-mobile="{{ $form->mobile }}"
                data-gender="{{ $form->gender }}"
                data-dob="{{ $form->dob }}"
                data-occupation="{{ $form->occupation }}"
                data-address="{{ $form->address }}"
                data-description="{{ $form->description }}"
                data-drive="{{ $form->google_drive_link }}"
                data-files='@json($form->evidence_files)'>
                <i class="fas fa-eye"></i>
              </a>

              <!-- Delete Button -->
             <form action="{{ route('admin.adminForm.destroy', $form->id) }}" 
                  method="POST" 
                  class="deleteForm">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>

            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" class="text-center text-danger">
              No application forms found.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewFormModal" tabindex="-1" role="dialog" aria-labelledby="viewFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewFormModalLabel">Application Form Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          style="background:none; border:none; font-size:22px; color:#333;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Full Name:</strong> <span id="formName"></span></p>
        <p><strong>Email:</strong> <span id="formEmail"></span></p>
        <p><strong>Mobile:</strong> <span id="formMobile"></span></p>
        <p><strong>Gender:</strong> <span id="formGender"></span></p>
        <p><strong>Date of Birth:</strong> <span id="formDob"></span></p>
        <p><strong>Occupation:</strong> <span id="formOccupation"></span></p>
        <p><strong>Address:</strong> <span id="formAddress"></span></p>
        <p><strong>Description:</strong></p>
        <p id="formDescription"></p>
        <p><strong>Google Drive Link:</strong> 
          <a href="#" id="formDrive" target="_blank">Open Link</a>
        </p>
        <p><strong>Evidence Files:</strong></p>
        <div id="formFiles" class="d-flex flex-wrap gap-2"></div>
      </div>
    </div>
  </div>
</div>



    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js') }}/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
 <script>
  // Show Application Form Details
  document.querySelectorAll('.viewFormBtn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('formName').textContent = btn.dataset.name;
      document.getElementById('formEmail').textContent = btn.dataset.email;
      document.getElementById('formMobile').textContent = btn.dataset.mobile;
      document.getElementById('formGender').textContent = btn.dataset.gender;
      document.getElementById('formDob').textContent = btn.dataset.dob;
      document.getElementById('formOccupation').textContent = btn.dataset.occupation || '-';
      document.getElementById('formAddress').textContent = btn.dataset.address;
      document.getElementById('formDescription').textContent = btn.dataset.description;

      const drive = btn.dataset.drive;
      document.getElementById('formDrive').href = drive ? drive : '#';
      document.getElementById('formDrive').textContent = drive ? 'View on Drive' : 'No Link';

      // Show evidence files
      const filesContainer = document.getElementById('formFiles');
      filesContainer.innerHTML = '';
      const files = JSON.parse(btn.dataset.files || '[]');
      files.forEach(file => {
        const a = document.createElement('a');
        a.href = `/storage/${file}`;
        a.textContent = 'View File';
        a.target = '_blank';
        a.className = 'btn btn-sm btn-outline-primary m-1';
        filesContainer.appendChild(a);
      });

      $('#viewFormModal').modal('show');
    });
  });
   document.querySelectorAll('.deleteForm').forEach(form => {
    form.addEventListener('submit', function(e) {
      e.preventDefault(); // prevent actual form submit

      Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit(); // submit the form if confirmed
        }
      });
    });
  });
</script>
</body>

</html>