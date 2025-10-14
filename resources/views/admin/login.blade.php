<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Book of Records</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link href="{{ asset('css/login.css')}}" rel="stylesheet">
</head>

<body>
  <div class="login-wrapper">
    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
    <h2>Welcome <span>Back</span></h2>
    <p class="text-muted">
      Welcome to Book of Records! Please log in to continue your extraordinary journey.
    </p>
    @if (session('error'))
      <div class="alert alert-danger text-center">
        {{ session('error') }}
      </div>
    @endif
    <form action="{{ route('admin.signin') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 text-start form-group">
        <i class="fa fa-envelope"></i>
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3 text-start form-group">
        <i class="fa fa-lock"></i>
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      </div>

      <button type="submit" class="btn-login">Login</button>
    </form>

    {{-- <div class="login-footer">
      <a href="#">Forgot Password?</a>
    </div> --}}
  </div>
</body>

</html>