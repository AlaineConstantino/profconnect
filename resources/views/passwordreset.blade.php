<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="password-reset-page">

  <!-- Card Container-->
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row bg-dark text-white rounded-3 shadow-lg p-5 p-md-5 w-100" style="max-width: 1000px;" id="reset-card">

      <!-- Return 
      <div class="d-grid mb-3 text-start">
        <a href="{{ route('login')}}" class="text-white">← Return to Login</a>
      </div> -->

      <!-- Heading -->
      <div class="text-center mb-4 pt-3">
        <!-- <div class="logo-row">
          <img src="{{ asset('images/cics_seal.png')}}" alt="CICS Seal" class="img-fluid">
          <img src="{{ asset('images/profconnect1.png')}}" alt="ProfConnect Logo" class="img-fluid profconnect-logo">
        </div> -->
        <h1 class="mb-3">Password Reset </h1>
        <p>Enter a new password to change your password.</p>
      </div>

      <!-- Form -->
      <form>
        <div class="mb-3">
          <label for="newpassword" class="form-label">New Password</label>
          <input type="password" class="form-control" id="newpassword" name="newpassword" required>
        </div>
        <div class="mb-3">
          <label for="newpassconfirm" class="form-label">Re-enter New Password</label>
          <input type="password" class="form-control" id="newpassconfirm" name="newpassconfirm" required>
        </div>
        <div class="d-grid mb-3 mt-3">
          <button type="submit" class="btn btn1 mt-3">Change Password</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>