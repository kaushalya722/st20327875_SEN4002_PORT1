 <?php
 include 'connection.php';
 $result = mysqli_query($conn, "SELECT * FROM blogs ORDER BY id DESC");
session_start();
 if(!isset($_SESSION['id'])) {
    header("location:login.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website Design</title>
<link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .blog-con{
    width: 100%;
    height: auto;
    background:rgba(244, 244, 244, 0.4);
    margin-top:20px;
}
.blog-con h4{
color:#000;
}   
.blog-con h6{
    color: red;
    font-weight: 400;
    padding-top:-15px;
    padding-bottom:10px;    
}
.blog-con h2{
    padding-top:-2px;
    font-size:30px;
}
.blog-con .content_b{
    color: lightgray;
}
.blog-con .content_a{
    padding-top:20px;
}
.blog-con .content_aa{
    padding-bottom:50px;
    padding-top:1px;
}
    </style>
</head>
<body>
    <section class="sub-header">
<nav>
    <a href="index.html"><img src="image/logo.jpeg"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>


        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="cources.php">COURCE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="admin_login.php">ADMIN</a></li>
            <a href="logout.php" class="hero-btn">LOG OUT</a>


        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>


</nav>

<h1>Blog Page</h1>
</section>

<!--blog page content-->
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="image/graduate.jpg" alt="">
        
<?php 
while($row = mysqli_fetch_assoc($result)){?>
<div class="blog-con">
    
<h4><?= $row['id']?>.</h4>
<h2><?= $row['title']?></h2>
<p class="content_b"><?= $row['content']?></p>
<p class="content_a"><?= $row['author']?></p>
<p class="content_aa"><?= $row['about_author']?></p>
<h6><?= $row['date']?></h6>

</div>
<?php } ?>




<div class="comment-box">
     <h3>Leave a Comment</h3>
     <form action="SendC.php" method="post" class="comment-form" name="myForm">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter Email">
        <textarea rows="5" name="comment" placeholder="Your Comment"></textarea>
        <button type="submit" name="BtnSubmit" class="hero-btn red-btn">POST COMMENT</button>
</form>
</div>



</div>
        
              

    </div>
</section>

   

            

<section class="footer">
    <h4>About Us</h4>
    <p>ICBT Campus also known as International College of Business and Technology, popularly known as the ICBT Campus is a
         BIO-approved project formed to conduct <br>internationally recognised educational programs in association with educational
          institutes.</p>
        <div class="icons">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      <i class="fa fa-linkedin"></i>


        </div>
        <p>Made With <i class="fa fa-heart-o"></i> by ICBT Campus</p>
</section>







    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    
</body>
</html>