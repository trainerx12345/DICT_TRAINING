<?php
// Include necessary files and establish database connection
include '../../config/database.php';
include '../../classes/positions.php';


$keyword = $_POST['keyword'];
$db = new Database();
$dbase = $db->getConnection();
$position = new Position($dbase);
$searchResult = $position->search($keyword);

if (!empty($keyword)) {
    $searchResult = $position->search($keyword);
} else {
    $searchResult = $position->read();
}

if ($searchResult) {
    while ($row = $searchResult->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>
                    <button type='button' class='btn btn-success editbtn'>EDIT</button>
                    <a delete-id='{$row['id']}' class='btn btn-danger delete-position'>Delete</a>
                </td>
              </tr>";
    }
} else {
    // Handle case when no results are found
    echo "<tr><td colspan='4'>No positions found.</td></tr>";
}
?>