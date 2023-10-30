<?php 

   include '../../config/database.php';
   include '../../classes/employees.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $employee = new Employee($dbase);

   if(isset($_POST['btn_submit'])){
     $employee->company_id = $_POST['emp_company_id'];
     $employee->department_id = $_POST['d_id'];
     $employee->position_id = $_POST['p_id'];
    $employee->first_name = $_POST['emp_fname'];
    $employee->middle_name = $_POST['emp_mname'];
    $employee->last_name = $_POST['emp_lname'];
    $employee->email = $_POST['emp_email'];
      
      if($employee->create()){
        echo "
        <script>
          alert('Record Created Successfully!');
          window.location.href='/pages/dashboard.php';
        </script>"; 
      }
   }
   
   ?>