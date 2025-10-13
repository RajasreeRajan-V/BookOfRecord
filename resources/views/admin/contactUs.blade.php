<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3" method="GET" action="{{ route('admin.contactUs.index') }}">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" name="search" value="{{ request('search') }}"
            placeholder="Search contacts" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
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
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <br>

    <div class="container d-flex justify-content-center mt-5">
      <div class="table-responsive" style="max-width: 90%; border: 2px solid #4d194d; border-radius: 8px;
              box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 15px; background-color: #fff;">
        <table class="table align-middle text-center">
          <thead class="thead-light" style="background: linear-gradient(90deg, #4d194d, #c7b16b); color: #fff;">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Status</th>
              <th>Received At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($contacts as $contact)
              <tr>
                <td>{{ $contacts->firstItem() + $loop->index }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ Str::limit($contact->message, 50) }}</td>
                <td class="status-badge">
                  @if($contact->status === 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                  @elseif($contact->status === 'read')
                    <span class="badge bg-success">Read</span>
                  @endif
                </td>
                <td>{{ $contact->created_at->timezone('Asia/Kolkata')->format('d M Y H:i') }}</td>
                <td class="d-flex justify-content-center gap-2">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info viewContactBtn" data-id="{{ $contact->id }}"
                    data-name="{{ $contact->name }}" data-email="{{ $contact->email }}"
                    data-subject="{{ $contact->subject }}" data-message="{{ $contact->message }}">
                    <i class="fas fa-eye"></i>
                  </a>

                  <form class="deleteContactForm" action="{{ route('admin.contactUs.destroy', $contact->id) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger deleteBtn">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>

                  <a href="javascript:void(0)" class="btn btn-sm btn-primary replyContactBtn" data-id="{{ $contact->id }}"
                    data-email="{{ $contact->email }}" data-name="{{ $contact->name }}">
                    <i class="fas fa-reply"></i>
                  </a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-center text-danger">
                  No contacts found{{ request('search') ? " for '" . request('search') . "'" : '' }}.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewContactModal" tabindex="-1" role="dialog" aria-labelledby="viewContactModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewContactModalLabel">Contact Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
              style="background:none; border:none; font-size:22px; color:#333;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong>Name:</strong> <span id="contactName"></span></p>
            <p><strong>Email:</strong> <span id="contactEmail"></span></p>
            <p><strong>Subject:</strong> <span id="contactSubject"></span></p>
            <p><strong>Message:</strong></p>
            <p id="contactMessage"></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Reply Modal -->
    <div class="modal fade" id="replyContactModal" tabindex="-1" role="dialog" aria-labelledby="replyContactModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form id="replyForm" method="POST" action="{{ route('admin.contactUs.reply') }}">
            @csrf
            <input type="hidden" name="contact_id" id="replyContactId">
            <div class="modal-header">
              <h5 class="modal-title" id="replyContactModalLabel">Reply to Contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                style="background:none; border:none; font-size:22px; color:#333;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><strong>To:</strong> <span id="replyEmail"></span></p>
              <p><strong>Name:</strong> <span id="replyName"></span></p>
              <div class="form-group">
                <label for="replyMessage">Your Reply</label>
                <textarea class="form-control" name="message" id="replyMessage" rows="5" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Send Reply</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </form>
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
      $(document).ready(function () {
        // View Contact Modal
        $('.viewContactBtn').on('click', function () {
          const contactId = $(this).data('id');

          $.ajax({
            url: "{{ url('admin/contactUs') }}/" + contactId,
            method: 'GET',
            success: function (contact) {
              $('#contactName').text(contact.name);
              $('#contactEmail').text(contact.email);
              $('#contactSubject').text(contact.subject);
              $('#contactMessage').text(contact.message);

              $('#viewContactModal').modal('show');

              // Update badge to "Read"
              const rowBadge = $(`a.viewContactBtn[data-id="${contact.id}"]`)
                .closest('tr')
                .find('.status-badge');
              rowBadge.html('<span class="badge bg-success">Read</span>');
            },
            error: function (err) {
              console.error('Error fetching contact:', err);
            }
          });
        });

        // Reply Contact Modal
        $('.replyContactBtn').on('click', function () {
          const contactId = $(this).data('id');
          const email = $(this).data('email');
          const name = $(this).data('name');

          $('#replyContactId').val(contactId);
          $('#replyEmail').text(email);
          $('#replyName').text(name);

          $('#replyContactModal').modal('show');
        });

        // Delete confirmation
        $('.deleteContactForm').on('submit', function (e) {
          e.preventDefault();
          Swal.fire({
            title: 'Are you sure?',
            text: 'This action cannot be undone!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
          }).then((result) => {
            if (result.isConfirmed) {
              this.submit();
            }
          });
        });
      });
    </script>
</body>

</html>