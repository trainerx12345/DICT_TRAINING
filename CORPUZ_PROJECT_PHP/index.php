<?php
  include_once("./pages/header_index.php");
?>

<body>
  <div class="scroll-container container-fluid" id="scrollContainer">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-light sidebar" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Simple Payroll</span>
      </a>
      <hr class="my-3">
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a href="#home" class="nav-link active" aria-current="page">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link text-white">
            About
          </a>
        </li>
        <li class="nav-item">
          <a href="#report" class="nav-link text-white">
            Report
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            Products
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            Customers
          </a>
        </li>
        <hr class="my-3">

        <div class='d-flex my-3 mx-auto'>
          <button class="btn btn-outline-primary ms-2" type="button" data-bs-toggle="modal" data-bs-target="#signUp">
            <i class="fas fa-user me-2"></i>
            Sign up
          </button>
          <button class="btn btn-outline-primary ms-2" type="button" data-bs-toggle="modal" data-bs-target="#signIn">
            <i class="fas fa-sign-in-alt me-1"></i>Login
          </button>
        </div>
        <hr class="my-3 ">
        <form class="d-flex me-2 gap-2">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <hr class="my-3">
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Profile</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </ul>

    </div>
    <!-- Sign In Modal -->
    <div id="signIn" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <section class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-dark text-white py-3">
            <h2 class="modal-title fs-4 fw-bold" id="signInLabel">
              Welcome back! Login to your account
            </h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form action="#" class="signin-form">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
              <div class="text-center">
                <button class="btn btn-primary px-4 py-2" type="submit">
                  <a class="nav-link" href="/pages/dashboard.php"> <i class="fas fa-sign-in-alt me-2"></i> Login</a>
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-light py-3">
            <p class="m-0">Don't have an account? <a href="#" class="text-primary">Sign up here</a></p>
          </div>
        </div>
      </section>
    </div>




    <!-- Sign Up Modal -->
    <div id="signUp" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-5" id="signInLabel">
              Create an account
            </h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            <form class="mx-1 mx-md-1">
              <div class="row">
                <div class="row">
                  <h2>Personal Information</h2>
                  <hr />
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="row my-1">
                      <div class="col-md-3">
                        <label for="inputFirstName" class="col-form-label">First Name :</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="inputFirstName" class="form-control form-control-sm" />
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md-3">
                        <label for="inputBirthdate" class="col-form-label">Birthdate :</label>
                      </div>
                      <div class="col-md-9">
                        <input type="date" id="inputBirthdate" class="form-control form-control-sm" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row my-1">
                      <div class="col-md-3">
                        <label for="inputLastName" class="col-form-label">Last Name :</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="inputLastName" class="form-control form-control-sm" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="row">
                  <h2>Account Information</h2>
                  <hr />
                </div>
                <div class="row">
                  <div class="row mb-2 col-md-6">
                    <div class="col-md-2">
                      <label for="inputUsername" class="col-form-label">Username</label>
                    </div>
                    <div class="col-md-12">
                      <input type="text" id="inputUsername" class="form-control form-control-sm" />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="inputPassword" class="col-form-label">Password</label>
                        </div>
                        <div class="col-md-12">
                          <input type="password" id="inputPassword" class="form-control form-control-sm"
                            aria-describedby="passwordHelpInline" />
                        </div>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-10">
                            <span id="passwordHelpInline" class="form-text">
                              Must be 8-20 characters long.
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12">
                          <label for="inputPassword2">New Password</label>
                        </div>
                        <div class="col-md-12">
                          <input type="password" id="inputPassword2" class="form-control form-control-sm"
                            aria-describedby="passwordHelpInline" />
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-8">
                            <span id="passwordHelpInline" class="form-text">
                              Must be 8-20 characters long.
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="row mx-auto align-items-center mb-2 w-100">
                  <div class="row m-0 mt-2 bg-dark-subtle rounded-3 p-2">
                    <div style="text-align: justify; font-style: italic">
                      By signing this consent form, I/we (as “Data
                      Subject”) grant my/our free, voluntary and
                      unconditional consent to the collection and
                      processing of all Personal Data (as defined
                      below), and account or transaction information or
                      records (collectively, the "Information") relating
                      to me/us disclosed/transmitted by me/us in person
                      or by my/our authorized agent/representative/s to
                      the information database system of the Development
                      System and/or any of its authorized agent/s or
                      representative/s as Information controller, by
                      whatever means in accordance with Republic Act
                      (R.A.) 10173, otherwise known as the “Data Privacy
                      Act of 2012” of the Republic of the Philippines,
                      including its Implementing Rules and Regulations
                      (IRR) as well as all other guidelines and
                      issuances by the National Privacy Commission
                      (NPC).
                    </div>
                  </div>
                  <div class="row m-0 mt-2 p-2 bg-dark-subtle rounded-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="formAgreement" />
                      &nbsp; &nbsp;
                      <label class="form-check-label" for="formAgreement">
                        I agree all statements in
                        <a href="#!">Terms of service</a>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center mx-4">
                <button class="btn btn-outline-dark ms-2" type="button">
                  <i class="fas fa-window-close me-1"></i>Cancel
                </button>
                <button class="btn btn-outline-dark ms-2" type="button">
                  <i class="fas fa-pen-alt me-1"></i>Sign up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="content py-5 container-fluid" id="home">
      <section class="py-5 text-center">
        <div class="container">
          <h2 class="mb-4">Welcome to Simple Payroll System</h2>
          <p class="lead">Efficiently manage your company's payroll with our easy-to-use payroll system.
            Simplify your payroll process and focus on growing your business.</p>
        </div>
      </section>

      <div id="carouselExample" class="carousel slide container-fluid" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./dist/assets/images/img1.jpg" class="d-block w-100" alt="First Slide" height="400"
              loading="lazy" />
            <div class="carousel-caption d-md-block text-dark">
              <h2>A Simple Payroll System</h2>
              <p>Welcome to our payroll service. Simplifying payroll for small businesses.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./dist/assets/images/img2.jpg" class="d-block w-100" alt="Second Slide" height="400"
              loading="lazy" />
            <div class="carousel-caption d-md-block text-dark">
              <h2>Efficient and Reliable</h2>
              <p>Manage your employee salaries effortlessly with our intuitive payroll tools.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./dist/assets/images/img3.jpg" class="d-block w-100" alt="Third Slide" height="400"
              loading="lazy" />
            <div class="carousel-caption d-md-block text-dark">
              <h2>Secure Payment Processing</h2>
              <p>Ensure secure payment processing for your employees with our advanced features.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./dist/assets/images/img4.jpg" class="d-block w-100" alt="Fourth Slide" height="400"
              loading="lazy" />
            <div class="carousel-caption d-md-block text-dark">
              <h2>24/7 Customer Support</h2>
              <p>Our dedicated support team is available round the clock to assist you.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./dist/assets/images/img5.jpg" class="d-block w-100" alt="Fifth Slide" height="400"
              loading="lazy" />
            <div class="carousel-caption d-md-block text-dark">
              <h2>Easy Integration</h2>
              <p>Integrate our payroll system seamlessly with your existing business processes.</p>
            </div>
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <div class="content py-5" id="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading text-center mb-1">
              <h2>Payroll Management</h2>
            </div>
            <div class="section-content text-center">
              <p>Our payroll system offers comprehensive payroll management features, including:</p>
              <ul class="feature-list text-left">
                <li>Automatic Salary Calculations</li>
                <li>Employee Tax Management</li>
                <li>Direct Deposit</li>
                <li>Expense Reimbursement</li>
                <!-- Add more features as needed -->
              </ul>
              <p class="mt-3">With our payroll solution, you can ensure accurate and timely payments for your employees.
              </p>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading text-center mb-1">
              <h2>Generate Detailed Reports</h2>
            </div>
            <div class="section-content text-center">
              <p>Our payroll system provides a variety of detailed reports to help you make informed decisions and
                <br />
                maintain accurate records. Some of the available reports include:
              </p>
              <ul class="feature-list text-left">
                <li>Payroll Summary</li>
                <li>Employee Earnings Report</li>
                <li>Tax Deductions Report</li>
                <li>Attendance and Leave Report</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content" id="report">
      <!-- Pie Chart -->
      <div class='container'>
        <canvas id="pieChart" class='mx-auto'></canvas>
      </div>

      <!-- Graph -->
      <div class='container'>
        <canvas id="lineChart" width="400" height="50" class=' mx-auto '></canvas>
        <!-- Progress Bar -->
        <div class="progress my-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100">70% for the Month of March</div>
        </div>
        <!-- <p class="mt-2">Completion Progress: 70%</p> -->
        <div class="progress my-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100">30% for the Month of April</div>
        </div>
        <!-- <p class="mt-2">Completion Progress: 30%</p> -->
        <div class="progress my-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100">45% for the Month of May</div>
        </div>
        <!-- <p class="mt-2">Completion Progress: 45%</p> -->
        <div class="progress my-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100">45% for the Month of June</div>
        </div>
        <!-- <p class="mt-2">Completion Progress: 45%</p> -->
        <div class="progress my-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100">50% for the Month of July</div>
        </div>
        <!-- <p class="mt-2">Completion Progress: 50%</p> -->


      </div>
    </div>
    <!-- Footer-->

    <footer class="py-2 bg-dark position-fixed" style="bottom: 0; width: 100%; z-index: 100; height:50px;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Samuel Corpuz Simple Payroll 2023. All rights reserved
        </p>
      </div>
    </footer>

  </div>
  </div>

</body>


<script>
  const scrollContainer = document.getElementById('scrollContainer');
  scrollContainer.addEventListener('wheel', (e) => {
    if (e.deltaY !== 0) {
      e.preventDefault();
      const scrollLeft = scrollContainer.scrollLeft + e.deltaY;
      scrollContainer.scrollLeft = scrollLeft;
    }
  });
</script>
<?php
  include_once("./pages/footer_index.php");
?>