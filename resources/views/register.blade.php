<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="register-page">

  <!-- Card Container-->
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row bg-dark text-white rounded-3 shadow-lg p-5 p-md-5 w-100" style="max-width: 2000px;" id="register-card">

      <!-- Image -->
      <div class="col-md-5 d-none d-md-block ps-md-0 pe-md-4">
        <img src="{{ asset('images/register.jpg')}}" alt="login_img"
          class="img-fluid w-100 h-100 rounded-2" style="object-fit: cover;">
      </div>

      <!-- Heading -->
      <div class="col-12 col-md-7 d-flex align-items-center">
        <div class="w-100">
          <div class="text-center mb-4">
            <img src="{{ asset('images/cics_seal.png')}}" alt="cics_seal" class="img-fluid mb-2" style="max-height: 80px;">
            <img src="{{ asset('images/profconnect2.png')}}" alt="profconnect" class="img-fluid mb-2" style="max-height: 80px;">
            <h1 class="mb-3">Sign Up</h1>
          </div>

          <!-- Form -->
          <form>
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
            <input type="checkbox" name="termsandconditions" id="termsandconditions" class="form-check-input" required>
            I understand and agree with the <a href="#" class="text-light" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of Use</a>
          </div>

          <div class="d-grid mb-3 text-end">
            <p class="text-center">Already have an account? <a href="{{ route('login')}}" class="text-white">Login</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Partials -->
    @include('partials.terms-modal')

    <!-- Dropdown Scripts -->
    <script>
      const yearSelect = document.getElementById("year");
      const specializationRow = document.getElementById("specializationRow");
      const specializationSelect = document.getElementById("specialization");

      yearSelect.addEventListener("change", function() {
        if (this.value === "3" || this.value === "4") {
          specializationRow.style.display = "flex";
          specializationSelect.setAttribute("required", "required");
        } else {
          specializationRow.style.display = "none";
          specializationSelect.removeAttribute("required");
          specializationSelect.value = "";
        }
      });
    </script>


</body>

</html>