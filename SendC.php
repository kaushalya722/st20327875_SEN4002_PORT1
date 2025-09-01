<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $comment = $_POST['comment'];

    $name    = mysqli_real_escape_string($conn, $name);
    $email   = mysqli_real_escape_string($conn, $email);
    $comment = mysqli_real_escape_string($conn, $comment);

    $sql = "INSERT INTO comment (name, email, comment)
            VALUES ('$name', '$email','$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Comment sent successfully. Thank you!');
        window.location.href='blog.php';</script>";
    } else {
        echo "<script>alert('Error sending Comment!');
        window.location.href='blog.php';</script>";
    }

    mysqli_close($conn);
}
?> 
    
</body>
</html>