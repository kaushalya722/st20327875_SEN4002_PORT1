<?php
if(isset($_GET['del'])){
    include 'connection.php';
    $title = $_GET['del'];
    mysqli_query($conn, "DELETE FROM blogs WHERE title='$title'");
}
header('location:manageblog.php');
?>