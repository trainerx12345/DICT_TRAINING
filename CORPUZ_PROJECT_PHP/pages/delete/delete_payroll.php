<?php
    include_once "../../config/database.php";
    include_once "../../classes/payroll.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $deparment = new Payroll($dbase);
    $deparment->payroll_id = $_POST['payroll_id'];
    
    $deparment->delete();
?>