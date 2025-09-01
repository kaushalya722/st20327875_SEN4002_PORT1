 <?php
 session_start();
 include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header("location: index.php");
        exit();
        

     }else{
        echo"<script>alert('Invalid login details!');</script>";
     }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLog.css">
  
</head>
<body>
    <div class="form">
    <form action="" method="post">
<h2>Log In</h2>
<p class="msg"></p>
<br>
<div class="form-group">
    <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
</div>
<br>
<div class="form-group">
    <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
</div>
<br>
<button class="btn font-weight-bold" name="submit">Login Now</button>
<br>
<br>
<p>Don't have an account ? <a href = "register.php">Sign Up</a></p>
    </form>
</div>
</body>
</html>