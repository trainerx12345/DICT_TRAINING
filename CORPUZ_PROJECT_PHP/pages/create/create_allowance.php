<?php 

   include '../../config/database.php';
   include '../../classes/departments.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $department = new Department($dbase);

   if(isset($_POST['btn_submit'])){
      $department->name = $_POST['name'];
      $department->short_name = $_POST['short_name'];
      if($department->create()){
        echo "
        <script>
          alert('Record Created Successfully!');
          window.location.href='/pages/dashboard.php';
        </script>"; 
      }
   }
   
   ?>