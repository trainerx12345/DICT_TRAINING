<?php
    include('./config.php');
	session_start();
if(isset($_SESSION['login_user']))
{
	$user_check = $_SESSION['login_user'];

	$query = "SELECT username from tbl_user
				WHERE username='$user_check'";

	$result = mysqli_query($conn, $query)
				or die('Error querying database.');

	$row = mysqli_fetch_assoc($result);

	$login_session = $row['username'];

	$_SESSION['getUser'] = $login_session;

	if(!isset($login_session)) {
		mysqli_close($conn);
		header('Location: ');
	}
}
	
?>