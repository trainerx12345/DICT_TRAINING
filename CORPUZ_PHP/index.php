<?php
include './shared/header.php';
?>
<!-- Header with Carousel -->
<header>
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./dist/assets/images/img1.jpg" height='448' class="d-block w-100" alt="First Slide" loading='lazy' />
        <div class="carousel-caption d-none d-md-block ">
          <h2>A Simple Payroll System</h2>
          <p>Welcome to our payroll service. Simplifying payroll for small businesses.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./dist/assets/images/img2.jpg" height='448' class="d-block w-100" alt="Second Slide" loading='lazy' />
        <div class="carousel-caption d-none d-md-block ">
          <h2>Efficient and Reliable</h2>
          <p>Manage your employee salaries effortlessly with our intuitive payroll tools.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./dist/assets/images/img3.jpg" height='448' class="d-block w-100" alt="Third Slide" loading='lazy' />
        <div class="carousel-caption d-none d-md-block">
          <h2>Secure Payment Processing</h2>
          <p>Ensure secure payment processing for your employees with our advanced features.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./dist/assets/images/img4.jpg" height='448' class="d-block w-100" alt="Fourth Slide" loading='lazy' />
        <div class="carousel-caption d-none d-md-block">
          <h2>24/7 Customer Support</h2>
          <p>Our dedicated support team is available round the clock to assist you.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./dist/assets/images/img5.jpg" height='448' class="d-block w-100" alt="Fifth Slide" loading='lazy' />
        <div class="carousel-caption d-none d-md-block">
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
</header>

<section class="py-5" id="home">
  <div class="container text-center">
    <h2 class="mb-4">Welcome to Simple Payroll System</h2>
    <p class="lead">Efficiently manage your company's payroll with our easy-to-use payroll system.
      Simplify your payroll process and focus on growing your business.</p>
  </div>
</section>

<!-- Sign In Modal -->
<div id="signIn" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
  data-bs-backdrop="static">
  <section class="modal-dialog modal-xl h-100 gradient-form" style="background-color: #eee;">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="signInLabel">
          Login
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <form action="#" class="signin-form">
          <div class="form-group mt-3">
            <label class="form-control-placeholder" for="username">Username</label>
            <input type="text" class="form-control" required="">
          </div>
          <div class="form-group mt-3">
            <label class="form-control-placeholder" for="password">Password</label>
            <input id="password-field" type="password" class="form-control" required="">
          </div>
          <div class="modal-footer d-flex justify-content-center mx-3">
            <button class="btn btn-outline-dark ms-2" type="button" type="submit">
              <i class="fas fa-sign-in-alt me-1 "></i>Login
            </button>
          </div>
        </form>
        <a class="nav-link" href="/views/index.php">Browse</a>
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

<!-- Section Employees-->
<!-- <section class="py-5" id="employees">
    <div class="container">
      <h2 class="text-center mb-4">Employee Information</h2>
      <div class="table-responsive">
        <table class="table table-bordered" id='data-tables'>
          <thead>
            <tr>
              <th>Employee ID</th>
              <th>Name</th>
              <th>Position</th>
              <th>Salary</th>
              <th>Joining Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>Software Developer</td>
              <td>$60,000</td>
              <td>2023-01-15</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>Marketing Manager</td>
              <td>$55,000</td>
              <td>2023-02-20</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section> -->

<!-- Section Payroll-->
<section class="py-5" id="payroll">
  <div class="container">
    <h2 class="text-center mb-4">Payroll Management</h2>
    <p>Our payroll system offers comprehensive payroll management features, including:</p>
    <ul>
      <li>Automatic Salary Calculations</li>
      <li>Employee Tax Management</li>
      <li>Direct Deposit</li>
      <li>Expense Reimbursement</li>
      <!-- Add more features as needed -->
    </ul>
    <p class="mt-3">With our payroll solution, you can ensure accurate and timely payments for your employees.</p>
  </div>
</section>

<!-- Section Reports-->
<section class="py-5" id="reports">
  <div class="container">
    <h2 class="text-center mb-4">Generate Detailed Reports</h2>
    <p>Our payroll system provides a variety of detailed reports to help you make informed decisions and maintain
      accurate records. Some of the available reports include:</p>
    <ul>
      <li>Payroll Summary</li>
      <li>Employee Earnings Report</li>
      <li>Tax Deductions Report</li>
      <li>Attendance and Leave Report</li>
      <li>Year-end Tax Statements</li>
      <!-- Add more types of reports as needed -->
    </ul>

    <!-- Pie Chart -->
    <div
      class='mx-auto justify-content-evenly align-items-center justify-content-center align-content-center justify-content-center '>
      <canvas id="pieChart" width="50" height="50" class='h-50 w-50 mx-auto '></canvas>
    </div>

    <!-- Graph -->
    <canvas id="lineChart" width="400" height="50" class=' mx-auto '></canvas>
    <!-- Progress Bar -->
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">70% for the Month of March</div>
    </div>
    <p class="mt-2">Completion Progress: 70%</p>
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">30% for the Month of April</div>
    </div>
    <p class="mt-2">Completion Progress: 30%</p>
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">45% for the Month of May</div>
    </div>
    <p class="mt-2">Completion Progress: 45%</p>
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">45% for the Month of June</div>
    </div>
    <p class="mt-2">Completion Progress: 45%</p>
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">50% for the Month of July</div>
    </div>
    <p class="mt-2">Completion Progress: 50%</p>
    <div class="progress mt-4">
      <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100">80% for the Month of August</div>
    </div>
    <p class="mt-2">Completion Progress: 80%</p>


  </div>
</section>



<!-- Footer-->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Samuel Corpuz Simple Payroll 2023. All rights reserved
    </p>
  </div>
</footer>


</body>

<?php
include './shared/footer.php';
?>