<?php
if (isset($_GET['del'])) {
			include 'connection.php';	
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM message WHERE id=$id");
}
header('location:manage_message.php');
?>