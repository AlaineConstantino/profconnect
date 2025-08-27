<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - ProfConnect</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body.register-page {
      background: linear-gradient(135deg, #141E30, #243B55);
      color: #fff;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Card */
    .register-card {
      background: #1c1f24;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(233, 30, 99, 0.3);
      transition: all 0.3s ease-in-out;
      display: flex;
      flex-wrap: wrap;
    }

    .register-card:hover {
      box-shadow: 0 0 30px rgba(233, 30, 99, 0.6),
        0 0 60px rgba(233, 30, 99, 0.4);
      transform: translateY(-5px);
    }

    /* Image with overlay */
    .image-container {
      position: relative;
      height: 100%;
      border-radius: 15px;
      overflow: hidden;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .image-container::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.35);
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
      max-height: 90px;
      filter: drop-shadow(0px 0px 6px rgba(255, 255, 255, 0.7)); /* Glow effect */
    }

    /* ProfConnect logo a bit bigger */
    .logo-row img.profconnect-logo {
      max-height: 110px;
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
    @media (max-width: 992px) {
      .register-card {
        flex-direction: column;
        padding: 20px;
      }

      .image-container {
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
      .image-container {
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

<body class="register-page">
  <!-- Card Container-->
  <div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row register-card text-white p-5 align-self-center">
      <!-- Image -->
      <div class="col-lg-5 pe-lg-4 mb-4 mb-lg-0">
        <div class="image-container">
          <img src="{{ asset('images/register.jpg')}}" alt="Register Image">
        </div>
      </div>

      <!-- Inputs -->
      <div class="col-lg-7">
        <div class="text-center mb-4">
          <div class="logo-row">
            <img src="{{ asset('images/cics_seal.png')}}" alt="CICS Seal" class="img-fluid">
            <img src="{{ asset('images/profconnect1.png')}}" alt="ProfConnect Logo" class="img-fluid profconnect-logo">
          </div>
          <h1 class="mb-4">Sign Up</h1>
        </div>

        <!-- Form -->
        <form id="registerForm">
          <div class="mb-3">
            <div class="row mb-3">
              <div class="col">
                <label for="Fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="Fname" name="Fname" required>
              </div>
              <div class="col">
                <label for="Lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="Lname" name="Lname" required>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <label for="studentnum" class="form-label">Student Number</label>
                <input type="text" class="form-control" id="studentnum" name="studentnum" required>
              </div>
            </div>

            <!-- Program + Year -->
            <div class="row mb-3">
              <div class="col">
                <label for="program" class="form-label">Program</label>
                <select name="program" class="form-control" id="program" required>
                  <option value="" disabled selected>Select your program</option>
                  <option value="BSCS">BS Computer Science</option>
                  <option value="BSIS">BS Information Systems</option>
                  <option value="BSIT">BS Information Technology</option>
                </select>
              </div>
              <div class="col">
                <label for="year" class="form-label">Year Level</label>
                <select name="year" class="form-control" id="year" required>
                  <option value="" disabled selected>Select your year</option>
                  <option value="1">1st Year</option>
                  <option value="2">2nd Year</option>
                  <option value="3">3rd Year</option>
                  <option value="4">4th Year</option>
                </select>
              </div>
            </div>

            <!-- Specialization -->
            <div class="row mb-3" id="specializationRow" style="display:none;">
              <div class="col">
                <label for="specialization" class="form-label">Specialization</label>
                <select name="specialization" class="form-control" id="specialization">
                  <option value="" disabled selected>Select your specialization</option>
                  <option value="NETSEC">Network and Security</option>
                  <option value="WEBDEV">Web and Mobile App Development</option>
                  <option value="Automation">IT Automation</option>
                </select>
              </div>
            </div>
          </div>

          <div class="d-grid mb-3 text-end">
            <button type="submit" class="btn btn1">Sign Up</button>
          </div>
        </form>

        <div class="mt-3 mb-3 text-start">
          <input type="checkbox" name="termsandconditions" id="termsandconditions" required>
          I understand and agree with the <a href="{{ route('terms') }}" class="text-white">Terms of Use</a>
        </div>

        <div class="d-grid mb-3 text-end">
          <p class="text-center">Already have an account? <a href="{{ route('login')}}" class="text-white">Login</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap + Custom Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const yearSelect = document.getElementById("year");
    const specializationRow = document.getElementById("specializationRow");
    const specializationSelect = document.getElementById("specialization");

    yearSelect.addEventListener("change", function () {
      if (this.value === "3" || this.value === "4") {
        specializationRow.style.display = "flex";
        specializationSelect.setAttribute("required", "required");
      } else {
        specializationRow.style.display = "none";
        specializationSelect.removeAttribute("required");
        specializationSelect.value = "";
      }
    });

    // Redirect to login after submit
    document.getElementById("registerForm").addEventListener("submit", function (e) {
      e.preventDefault(); // prevent real form submit for now

      alert("Registration successful! Redirecting to login...");
      window.location.href = "{{ route('login') }}";
    });
  </script>
</body>

</html>
