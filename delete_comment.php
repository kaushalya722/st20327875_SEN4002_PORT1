

<?php
if (isset($_GET['del'])) {
    include 'connection.php';

    $name = $_GET['del'];
    mysqli_query($conn, "DELETE FROM comment WHERE name='$name'");
}

    
    header('location:manage_comment.php');
?>
