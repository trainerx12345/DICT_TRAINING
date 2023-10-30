<?php 

   include '../../config/database.php';
   include '../../classes/payroll.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $department = new Payroll($dbase);

   if(isset($_POST['btn_submit'])){
      $department->code = $_POST['payroll_code'];
      $department->start_date = $_POST['payroll_sdate'];
      $department->end_date = $_POST['payroll_edate'];
      $department->type = $_POST['payroll_type'];
      if($department->create()){
        echo "
        <script>
          alert('Record Created Successfully!');
          window.location.href='/pages/dashboard.php';
        </script>"; 
      }
   }
   
   ?>
<!-- <h2>Create a Deparment</h2>
<form class="row g-3 needs-validation" action="create.php" method="post">
  <div class="col-md-4">
    <label for="name" class="form-label">Department Name</label>
    <input type="text" class="form-control" id="name" name='name' placeholder=' Department Name' required>
  </div>
  <div class="col-md-4">
    <label for="short_name" class="form-label">Department Short Name</label>
    <input type="text" class="form-control" id='short_name' name='short_name' placeholder=' Department Short Name'
      required>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-dark ms-2" type="submit" name="btn_submit">
      <i class="fas fa-department me-2"></i>
      Submit</button>
  </div>
</form> -->