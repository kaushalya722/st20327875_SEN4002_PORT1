<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_GET['del'])) {
			include 'connection.php';	
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM users WHERE id=$id");
}
header('location: manage_users.php');
?>
</body>
</html>