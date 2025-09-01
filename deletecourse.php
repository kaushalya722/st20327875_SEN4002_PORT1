<?php
if (isset($_GET['del'])) {
    include 'connection.php';

    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM courses WHERE id='$id'");
}

    
    header('location:managecourse.php');
?>