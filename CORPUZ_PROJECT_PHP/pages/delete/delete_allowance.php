<?php
    include_once "../../config/database.php";
    include_once "../../classes/allowance.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $allowance = new Allowance($dbase);
    $allowance->allowance_id = $_POST['allowance_id'];
    
    $allowance->delete();
?>