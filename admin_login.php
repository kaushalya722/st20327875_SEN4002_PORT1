<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name === "admin" && $password === "admin123") {
        $_SESSION['admin'] = $name;
        header("Location: dashboard.php");
        exit();
    } else {
                echo"<script>alert('Invalid login details!');</script>";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="styleLog.css">
</head>
<body>
    <div class="form">

<form method="POST">
    <h2>Admin Login</h2><br>
<div class="form-group">
    <input type="text" name="name" placeholder="Admin name" required><br><br>
</div>
    <div class="form-group">
    <input type="password" name="password" placeholder="Password" required><br><br>
</div>
    <button class="btn font-weight-bold" type="submit">Login</button>
</form>
</div>
<p>
    <?php
     echo $error ?? ''; 
     ?>
     </p>
</body>
</html>
