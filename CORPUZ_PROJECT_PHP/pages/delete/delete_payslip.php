<?php
    include_once "../../config/database.php";
    include_once "../../classes/payslip.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $deparment = new Payslip($dbase);
    $deparment->payslip_id = $_POST['payslip_id'];
    
    $deparment->delete();
?>