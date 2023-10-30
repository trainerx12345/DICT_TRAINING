<?php
// $id=   isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
    include_once "../../config/database.php";
    include_once "../../classes/employees.php";
    //  include_once "../header.php";
    $db = new Database();
    $dbase = $db->getConnection();

    $employeee = new Employee($dbase);

    if(isset($_POST['btn_update_employee'])){
        $employeee->employee_id = $_POST['employee_id'];
        $employeee->first_name = $_POST['u_fname'];
        $employeee->middle_name = $_POST['u_mname'];
        $employeee->last_name = $_POST['u_lname'];
        $employeee->email = $_POST['u_email'];
        $employeee->company_id = $_POST['u_company_id'];
        $employeee->department_id = $_POST['d_id_u'];
        $employeee->position_id = $_POST['p_id_u'];

        if($employeee->update()){
            echo ' <div class="alert alert-success" role="alert">
            <strong>Successfully updated</strong>
            </div>';    
        }
       
    }
// include_once "../footer.php";
?>