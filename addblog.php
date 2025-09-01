<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id =mysqli_real_escape_string($conn, $_POST['id']);
    $date =mysqli_real_escape_string($conn, $_POST['date']);
    $title =mysqli_real_escape_string($conn, $_POST['title']);
    $content =mysqli_real_escape_string($conn, $_POST['content']);
    $author =mysqli_real_escape_string($conn, $_POST['author']);
    $about_author =mysqli_real_escape_string($conn, $_POST['about_author']);

    $sql = "INSERT INTO blogs (id, date, title, content, author, about_author)
            VALUES ('$id', '$date', '$title','$content', '$author', '$about_author')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Blog Added successfully!');
        window.location.href='blog.php';</script>";
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
<input type="date" name="date" placeholder="Date" class="form-control" required>
</div>
<br>
<div class="form-group">
<input type="text" name="title" placeholder="Title" class="form-control"required>
</div>
<br>
<div class="form-group">
<textarea name="content" placeholder="Content" class="form-control"></textarea>
</div>
<br>
<div class="form-group">
<input type="text" name="author" placeholder="Author" class="form-control" required>
</div>
<br>
<div class="form-group">
<input type="text" name="about_author" placeholder="About_author" class="form-control" required>
</div>

<br>


<button type="submit" class="hero-btn">Add Blog</button>
</form>
</div>
</body>
</html>