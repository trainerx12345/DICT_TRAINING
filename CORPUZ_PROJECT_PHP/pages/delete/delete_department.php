<?php
    include_once "../../config/database.php";
    include_once "../../classes/departments.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $deparment = new Department($dbase);
    $deparment->department_id = $_POST['deparment_id'];
    
    $deparment->delete();
?>