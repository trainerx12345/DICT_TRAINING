<?php
// Include necessary files and establish database connection
include '../../config/database.php';
include '../../classes/departments.php';


$keyword = $_POST['keyword'];
$db = new Database();
$dbase = $db->getConnection();
$department = new Department($dbase);
$searchResult = $department->search($keyword);

if (!empty($keyword)) {
    $searchResult = $department->search($keyword);
} else {
    $searchResult = $department->read();
}

if ($searchResult) {
    while ($row = $searchResult->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['short_name']}</td>
                <td>
                    <button type='button' class='btn btn-success editbtn'>EDIT</button>
                    <a delete-id='{$row['id']}' class='btn btn-danger delete-department'>Delete</a>
                </td>
              </tr>";
    }
} else {
    // Handle case when no results are found
    echo "<tr><td colspan='4'>No departments found.</td></tr>";
}
?>