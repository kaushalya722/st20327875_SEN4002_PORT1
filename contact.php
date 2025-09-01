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

<h1>Contact Us</h1>
</section>


<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7922.098053264564!2d79.8553279273923!3d6.884731044155764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scolombo%20icbt%20campus!5e0!3m2!1sen!2slk!4v1751093918023!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
     <div class="row">
        <div class="contact-col">
<div>
      <i class="fa fa-home"></i>
      <span>
            <h5>ICBT Campus</h5>
            <p>No. 36 De Kretser Pl, Colombo 00400</p>
      </span>            
        </div>
<div>
      <i class="fa fa-phone"></i>
      <span>
            <h5>+94 708844306</h5>
            <p>Monday to Sunday, 9AM to 5PM</p>
      </span>            
        </div>
<div>
        <i class="fa fa-home"></i>
      <span>
            <h5>icbtcampus@gmail.com</h5>
            <p>Email us your query</p>
      </span>            
        </div>
        </div>
        

    <div class="contact-col">
<form action="SendM.php" method="post">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="email" name="email" placeholder="Enter email address" required>
    <input type="text" name="subject" placeholder="Enter your subject" required>
    <textarea rows="8" name="message" placeholder="Message" required></textarea>
    <button type="submit" name="BtnSubmit" class="hero-btn red-btn">Send Message</button>

</form>

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