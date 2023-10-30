<?php 

   include '../../config/database.php';
   include '../../classes/positions.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $position = new Position($dbase);

   if(isset($_POST['btn_submit'])){
      $position->name = $_POST['pos_name'];
      if($position->create()){
        echo "
        <script>
          alert('Record Created Successfully!');
          window.location.href='/pages/dashboard.php';
        </script>"; 
      }
   }
   
   ?>