<?php
// Include necessary files and establish database connection
include '../../config/database.php';
include '../../classes/payroll.php';


$keyword = $_POST['keyword'];
$db = new Database();
$dbase = $db->getConnection();
$payroll = new Payroll($dbase);
$searchResult = $payroll->search($keyword);

if (!empty($keyword)) {
    $searchResult = $payroll->search($keyword);
} else {
    $searchResult = $payroll->read();
}

if ($searchResult) {
    while ($row = $searchResult->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['code']}</td>
                <td>{$row['start_date']}</td>
                <td>{$row['end_date']}</td>
                <td>{$row['type']}</td>
<td>
<button type='button' class='btn btn-success editbtn'> EDIT </button>
  <a delete-id='{$row['id']}' class='btn btn-danger delete-payroll'>Delete</a>
</td>
</tr>";
}
} else {
// Handle case when no results are found
echo "<tr>
  <td colspan='4'>No payrolls found.</td>
</tr>";

}
?>