<?php
    include_once "../../config/database.php";
    include_once "../../classes/employees.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $employee = new Employee($dbase);
    $employee->employee_id = $_POST['employee_id'];
    
    $employee->delete();
?>