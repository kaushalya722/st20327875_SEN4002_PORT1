 <?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password=$_POST['password'];
    $user_type =$_POST['user_type'];
 
   $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

  if(mysqli_num_rows($result) > 0){
    echo "Email already registered!";
  }else{
     mysqli_query($conn, "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$password', '$user_type')");
     
    echo "Registration successful!";
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
<h2>Registration</h2>
<p class="msg"><? =$msg?></p>
<br>
<div class="form-group">
    <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
</div>
<br>
<div class="form-group">
    <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
</div>
<br>
<div class="form-group">
    <select name="user_type" id="" class="form-control">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
</div>
<br>
<div class="form-group">
    <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
</div>
<br>
<br>
<button class="btn font-weight-bold" name="submit">Register Now</button>
<br>
<br>
<p>Already have an account ? <a href ="login.php">Sign In</a></P>
    </form>
</div>
</body>
</html>