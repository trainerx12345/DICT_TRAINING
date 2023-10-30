<?php 
   include './header.php';
?>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="../index.php">Simple Payroll</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#employee">Employees</a></li>
          <li class="nav-item"><a class="nav-link" href="#payroll">Payroll</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#payslip">Payslip</a></li>
          <li class="nav-item"><a class="nav-link" href="#deduction">Deductions</a></li>
          <li class="nav-item"><a class="nav-link" href="#allowance">Allowances</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#department">Departments</a></li>
          <li class="nav-item"><a class="nav-link" href="#position">Positions</a></li>
        </ul>
        <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="modal" data-bs-target="#signIn">
          <a class="nav-link" href="../index.php"> <i class="fas fa-sign-in-alt me-2"></i> Logout</a>
        </button>
      </div>
    </div>
  </nav>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <?php 
  include './view_departments.php';
  include './view_positions.php';
  include './view_employees.php';

  include './view_payrolls.php';

  
  // include './view_payslips.php';
  // include './view_allowances.php';
  // include './view_deductions.php';
  ?>

</body>
<?php 
   include './footer.php';
   ?>