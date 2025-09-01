 <?php
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

<h1>About Us</h1>
</section>

<section class="about-us">
    <div class="row">
        <div class="about-col">
                <h1>We Are The Sri Lanka's Largest University</h1>
                <p>ICBT Campus also known as International College of Business and Technology, popularly known as the ICBT Campus is a
                 BIO-approved project formed to conduct internationally recognised educational programs in association with educational
                 institutes.</p>
                 <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="image/disscussion.jpg" alt="">
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