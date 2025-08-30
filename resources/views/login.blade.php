<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="login-page">

  <!-- Card Container-->
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row bg-dark text-white rounded-3 shadow-lg p-5 p-md-5 w-100" style="max-width: 2000px;" id="login-card">

      <!-- Image -->
      <div class="col-md-5 d-none d-md-block ps-md-0 pe-md-4">
        <img src="{{ asset('images/login.jpg')}}" alt="login_img"
          class="img-fluid w-100 h-100 rounded-2" style="object-fit: cover;">
      </div>

      <!-- Heading -->
      <div class="col-12 col-md-7 d-flex align-items-center">
        <div class="w-100">
          <div class="text-center mb-4">
            <img src="{{ asset('images/cics_seal.png')}}" alt="cics_seal" class="img-fluid mb-2" style="max-height: 80px;">
            <img src="{{ asset('images/profconnect2.png')}}" alt="profconnect" class="img-fluid mb-2" style="max-height: 80px;">
            <h1 class="mb-3">Login</h1>
          </div>

          <!-- Form -->
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="row mb-3">
              <div class="col text-start">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                  <label class="form-check-label" for="remember_me">Remember Me</label>
                </div>
              </div>
              <div class="col text-end">
                <a href="{{ asset('forgotpassword')}}" class="text-white text-decoration-none">Forgot Password?</a>
              </div>
            </div>

            <div class="text-center mb-3">
              <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#termsModal">
                Terms of Use
              </a>
            </div>

            <div class="d-grid mb-3">
              <button type="submit" class="btn btn1">Login</button>
            </div>

            <p class="text-center mb-0">
              Don't have an account? <a href="{{ asset('register')}}" class="text-white">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!-- Partials -->
  @include('partials.terms-modal')
</body>

</html>