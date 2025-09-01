 <?php
 
include("connection.php");

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
    <section class="header">
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
<div class="text-box">
    <h1>Sri Lanka's Largest University</h1>
    <p>ICBT Campus also known as International College of Business and Technology, popularly known as the ICBT Campus is a
         BIO-approved project formed to conduct <br>internationally recognised educational programs in association with educational
          institutes.</p>
         <a href="login.php" class="hero-btn">SIGN IN</a>
            <a href="register.php" class="hero-btn">SIGN UP</a>  

</div>



    </section>
<section class="course">
    <h1>Courses We Offer</h1>
    <p>ICBT Colombo offers a wide range of courses across various disciplines, including Business & Management, 
        Engineering, Information Technology, and English. Some popular programs include Bachelor's degrees (BSc Hons)
         in Business and Management, Digital Marketing, and Software Engineering, as well as Higher Diplomas in
          related fields. </p>

          <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>ICBT Colombo Campus offers a wide range of intermediate-level courses, including Higher Diplomas,
                     Diplomas, and Professional Diplomas across various fields like IT, Business, Engineering, and 
                     Languages. Some popular intermediate programs include the Higher Diploma in Computing and Software
                      Engineering, Higher Diploma in Network Technology and Cyber Security, Higher Diploma in Business 
                      Management, and Higher Diploma in Digital Marketing. </p>
            </div>

               <div class="course-col">
                <h3>Degree</h3>
                <p>ICBT Colombo offers a variety of degree programs, including those in Business & Management, Engineering,
                     IT, and Psychology. Specific degrees include BSc (Hons) in Business and Management, BSc (Hons) in Information 
                     Technology, and BSc (Hons) in Data Science. Additionally, ICBT offers higher diplomas and foundation programs
                      that can serve as pathways to these degrees.</p>
            </div>

               <div class="course-col">
                <h3>Post Graduation</h3>
                <p>ICBT Campus in Colombo offers a range of postgraduate programs, including Master's degrees in Business 
                    Administration (MBA), Information Technology (MSc IT), Data Science, Project Management (MSc Construction
                     Project Management), and more. They also offer specialized Master's programs like Applied Psychology & 
                     Behavior Change and International Business (LLM).</p>
            </div>
          </div>
</section>

<section class="campus">
    <h1>Our Branches In Sri Lanka</h1>
    <p>ICBT Campus also known as International College of Business and Technology, popularly known as the ICBT Campus is a
         BOI-approved project formed to conduct internationally recognised educational programs in association with educational
          institutes.</p>

<div class="row">
    <div class="campus-col">
        <img src="image/co.jpg" alt="">
        <div class="layer">
            <h3>COLOMBO</h3>
        </div>
    </div>
    <div class="campus-col">
        <img src="image/free.jpeg" alt="">
        <div class="layer">
            <h3>KANDY</h3>
        </div>
    </div>
    <div class="campus-col">
        <img src="image/fresh.jpg" alt="">
        <div class="layer">
            <h3>GALLE</h3>
        </div>
    </div>

</div>
    
</section>

<section class="facilities">
<h1>Our Facilities</h1>
<p>All lecture halls are fully equipped with all modern teaching aids such as LCD projectors, computers, internet 
    facilities, acoustics etc. Recreation Rooms.</p>
<div class="row">
    <div class="facilities-col">
        <img src="image/library.jpg" alt="">
        <h3>A High Quality Library</h3>
        <p>Our library consists of the largest and updated Books, such as Management, Information Technology, Engineering,
        Marketing, Economics, Quantity Servers, Insurance, Languages and Periodicals, Magazines and Textbooks.</p>
    </div>
    <div class="facilities-col">
        <img src="image/gym.jpg" alt="">
        <h3>A High Quality Gymnasium</h3>
        <p>ICBT Campus provide a world class university experience with latest facilities such as fully equipped Gymnasium for
        the students to maintain their fitness.</p>
    </div>
    <div class="facilities-col">
        <img src="image/audi.jpg" alt="">
        <h3>World Class Auditorium</h3>
        <p>ICBT Campus provides world class auditorium experience for their students which enable an audience to hear and watch
             performances at venues such as theaters. For movie theaters, the number of auditoriums is expressed as the number 
             of screens.as well as this auditorium consists with surround sound system to provide fully world class auditorium 
             experience.</p>
    </div>
</div>
</section>

<section class="testimonials">
    <h1>What Our Student Says</h1>
    <p>Students generally view ICBT positively, particularly highlighting the quality of education, modern facilities,
         and opportunities for career advancement. Some students appreciate the cross-cultural environment at certain
          campuses and the focus on practical skills.</p>
          <div class="row">
            <div class="testimonial-col">
                <img src="image/AI.jpeg" alt="">
                <div>
                    <p>ICBT Campus provides a world-class learning environment. The lecturers are very supportive, and 
                        the facilities are excellent for both academic and personal growth.</p>
                        <h3>Christine Alwis</h3>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>



                </div>
            </div>
             <div class="testimonial-col">
                <img src="image/AI2.avif" alt="">
                <div>
                    <p>I am proud to be a student at ICBT Campus. The international recognition of the programs gives me confidence about my 
                        future career opportunities.</p>
                        <h3>Mark Phol</h3>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>

                </div>
            </div>
          </div>

</section>

<section class="cta">
    <h1>Enroll For Our Various Online Courses<br> Anywhere From The World</h1>
    <a href="contact.php" class="hero-btn">CONTACT US</a>
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