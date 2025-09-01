<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $course_name =mysqli_real_escape_string($conn, $_POST['course_name']);
    $duration =mysqli_real_escape_string($conn, $_POST['duration']);
    $description =mysqli_real_escape_string($conn, $_POST['description']);
    $entry_criteria =mysqli_real_escape_string($conn, $_POST['entry_criteria']);

    $sql = "INSERT INTO courses (course_name, duration, description, entry_criteria)
            VALUES ('$course_name','$duration', '$description', '$entry_criteria')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('course Added successfully!');
        window.location.href='cources.php';</script>";
    } else {
        echo " Error: ".mysqli_error($conn);
    }

}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: blue;
    position: relative;
    cursor: pointer;
    
}
.hero-btn:hover{
    border: 1px solid #f44336;
    background:#f44336 ;
    transition: 1s;

}
 
    .form{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    background:rgba(4,9,30,0.6);
    
}
.form form{
    background-color: rgb(244, 244, 244);
    text-align: center;
    box-shadow: 0px 6px 20px rgb(144, 144, 144);
    border-radius: 10px;
    padding: 2rem;
    width: 28rem;
}
.form form input,
select
{
    padding: 10px 50px;
    font-size: 15px;
}

        </style>

    
</head>
<body>
    <div class="form">
         <form method="POST" action="">
    <div class="form-group">
<input type="text" name="course_name" placeholder="Course Name" class="form-control" required>
</div>
<br>
<div class="form-group">
<input type="numer" name="duration" placeholder="Duration" class="form-control"required>
</div>
<br>
<div class="form-group">
<textarea name="description" placeholder="Description" class="form-control"></textarea>
</div>
<br>
<div class="form-group">
<input type="text" name="entry_criteria" placeholder="Entry Criteria" class="form-control" required>
</div>
<br>


<button type="submit" class="hero-btn">Add Course</button>
</form>
</div>
</body>
</html>