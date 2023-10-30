<?php
    include_once "../../config/database.php";
    include_once "../../classes/positions.php";
    $db = new Database();
    $dbase = $db->getConnection();
 
    $position = new Position($dbase);
    $position->position_id = $_POST['position_id'];
    $position->delete();
    ?>