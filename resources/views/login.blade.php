<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - ProfConnect</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body.login-page {
      background: linear-gradient(135deg, #1e1e2f, #2c2c54);
      min-height: 100vh;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Card */
    .login-card {
      transition: all 0.3s ease-in-out;
      box-shadow: 0 0 15px rgba(233, 30, 99, 0.3);
      background: rgba(33, 33, 33, 0.95);
      border-radius: 15px;
      display: flex;
      flex-wrap: wrap;
    }

    .login-card:hover {
      box-shadow: 0 0 30px rgba(233, 30, 99, 0.6),
        0 0 60px rgba(233, 30, 99, 0.4);
      transform: translateY(-5px);
    }

    /* Buttons */
    .btn1 {
      background-color: #e91e63;
      border: none;
      transition: 0.3s ease;
      font-weight: 500;
      border-radius: 8px;
      padding: 10px 25px;
    }

    .btn1:hover {
      background-color: #d81b60;
      box-shadow: 0 0 12px rgba(233, 30, 99, 0.7);
      transform: translateY(-2px);
    }

    /* Image section */
    .login-img-wrapper {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
    }

    .login-img-wrapper img {
      filter: brightness(1.1);
      border-radius: 15px;
      object-fit: cover;
      width: 100%;
      height: 100%;
      display: block;
    }

    .login-img-wrapper::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.25);
    }

    /* Logos row */
    .logo-row {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 25px;
      margin-bottom: 1rem;
      flex-wrap: wrap;
    }

    .logo-row img {
      width: auto;
      max-height: 90px;
      filter: drop-shadow(0px 0px 6px rgba(255, 255, 255, 0.7)); /* Glow effect */
    }

    .logo-row img.profconnect-logo {
      max-height: 110px;
    }

    /* Links */
    a.text-white:hover {
      color: #e91e63 !important;
      text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .login-card {
        flex-direction: column;
        padding: 20px;
      }

      .login-img-wrapper {
        height: 250px;
        margin-bottom: 20px;
      }

      .logo-row {
        flex-direction: column;
        gap: 15px;
      }

      .logo-row img {
        max-height: 75px;
      }

      .logo-row img.profconnect-logo {
        max-height: 95px;
      }
    }

    @media (max-width: 576px) {
      .login-img-wrapper {
        height: 200px;
      }

      .logo-row img {
        max-height: 65px;
      }

      .logo-row img.profconnect-logo {
        max-height: 85px;
      }
    }
  </style>
</head>

<body class="login-page">
  <div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row text-white rounded-3 p-5 align-self-center login-card">

      <!-- Left Image -->
      <div class="col-lg-5 pe-lg-4 mb-4 mb-lg-0 login-img-wrapper">
        <img src="{{ asset('images/login.png') }}" 
             alt="Login Illustration"
             class="img-fluid w-100 h-100" />
      </div>

      <!-- Right Form -->
      <div class="col-lg-7">
        <div class="text-center mb-4">
          <div class="logo-row">
            <img src="{{ asset('images/cics_seal.png')}}" alt="CICS Seal" class="img-fluid" />
            <img src="{{ asset('images/profconnect1.png')}}" alt="ProfConnect Logo" class="img-fluid profconnect-logo" />
          </div>
          <h1 class="mb-4">Login</h1>
        </div>

        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required />
          </div>
          <div class="mt-3 mb-3">
            <div class="row">
              <div class="col text-start">
                <input type="checkbox" name="remember_me" id="remember_me" /> Remember Me
              </div>
              <div class="col text-end">
                <a href="{{ route('forgotpassword') }}" class="text-white">Forgot Password?</a>
              </div>
            </div>
          </div>
          <div class="d-grid mb-3 text-end">
            <button type="submit" class="btn btn1">Login</button>
          </div>
        </form>

        <div class="mt-3 mb-3 text-center">
          <a href="{{ route('terms') }}" class="text-white">Terms of Use</a>
        </div>

        <div class="d-grid mb-3 text-end">
          <p class="text-center">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-white">Sign Up</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
