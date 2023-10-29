<?php
// $id=   isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
    include_once "../../config/database.php";
    include_once "../../classes/departments.php";
    //  include_once "../header.php";
    $db = new Database();
    $dbase = $db->getConnection();

    $department = new Department($dbase);
    // $department->department_id = $id;
    // $department->edit();

    if(isset($_POST['btn_update_department'])){
        $department->department_id = $_POST['department_id'];
        $department->name = $_POST['d_name'];
        $department->short_name = $_POST['d_short_name'];

        if($department->update()){
            echo ' <div class="alert alert-success" role="alert">
            <strong>Successfully updated</strong>
            </div>';    
        }
       
    }
// include_once "../footer.php";
?>