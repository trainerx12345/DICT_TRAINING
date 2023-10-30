<?php
    include_once "../../config/database.php";
    include_once "../../classes/deduction.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $deduction = new Deduction($dbase);
    $deduction->deduction_id = $_POST['deduction_id'];
    
    $deduction->delete();
?>