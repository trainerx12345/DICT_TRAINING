<?php
// $id=   isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
    include_once "../../config/database.php";
    include_once "../../classes/positions.php";
    $db = new Database();
    $dbase = $db->getConnection();

    $position = new Position($dbase);

    if(isset($_POST['btn_update_position'])){
        $position->position_id = $_POST['position_id'];
        $position->name = $_POST['update_post_name'];

        if($position->update()){
            echo ' <div class="alert alert-success" role="alert">
            <strong>Successfully updated</strong>
            </div>';    
        }
       
    }
// include_once "../footer.php";
?>