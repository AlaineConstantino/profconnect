<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password - ProfConnect</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body.forgot-password-page {
      background: linear-gradient(135deg, #141E30, #243B55);
      color: #fff;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Card */
    .forgot-card {
      background: #1c1f24;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(233, 30, 99, 0.3);
      transition: all 0.3s ease-in-out;
      padding: 2.5rem;
    }

    .forgot-card:hover {
      box-shadow: 0 0 30px rgba(233, 30, 99, 0.6),
        0 0 60px rgba(233, 30, 99, 0.4);
      transform: translateY(-5px);
    }

    /* Logo row */
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
      max-height: 85px;
      filter: drop-shadow(0px 0px 6px rgba(255, 255, 255, 0.7)); /* Glow */
    }

    .logo-row img.profconnect-logo {
      max-height: 100px;
    }

    /* Button */
    .btn1 {
      border-radius: 8px;
      padding: 10px 25px;
      font-weight: 500;
      background-color: #e91e63;
      border: none;
      transition: 0.3s;
    }

    .btn1:hover {
      background-color: #d81b60;
      box-shadow: 0 0 12px rgba(233, 30, 99, 0.7);
      transform: translateY(-2px);
    }

    /* Links */
    a.text-white:hover {
      color: #e91e63 !important;
      text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 576px) {
      .forgot-card {
        padding: 1.5rem;
      }

      .logo-row img {
        max-height: 65px;
      }

      .logo-row img.profconnect-logo {
        max-height: 80px;
      }
    }
  </style>
</head>

<body class="forgot-password-page">
  <!-- Card Container-->
  <div class="container position-absolute top-50 start-50 translate-middle" style="max-width: 600px;">
    <div class="forgot-card text-white">

      <!-- Return -->
      <div class="d-grid mb-3 text-start">
        <a href="{{ route('login')}}" class="text-white">← Return to Login</a>
      </div>

      <!-- Logos -->
      <div class="text-center mb-4">
        <div class="logo-row">
          <img src="{{ asset('images/cics_seal.png')}}" alt="CICS Seal" class="img-fluid">
          <img src="{{ asset('images/profconnect1.png')}}" alt="ProfConnect Logo" class="img-fluid profconnect-logo">
        </div>
        <h1 class="mb-3">Password Recovery</h1>
        <p>Enter your email and we’ll send you a link to reset your password.</p>
      </div>

      <!-- Form -->
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="d-grid mb-3 text-end">
          <button type="submit" class="btn btn1">Request Reset Link</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
