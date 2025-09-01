<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
        <link rel="stylesheet" href="style.css">
<style>
    .links{
        width: 300px;
        height: 100vh;
        background: #333;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px;
        z-index: 1000;
    }
    .links ul{
        list-style: none;
        padding: 0;
    }
    .links ul li{
        padding: 15px;
        text-align: left;
    }
    .links ul li a{
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        display: block;
    }
    .links ul li:hover{
        background: #575757;
        cursor: pointer;
    }
    .links img{
        width: 120px;
        height:120px;
        padding:10px 20px 10px;
    }
    .text-box h1{
    font-size: 200px;
    margin-left:250px;
}
</style>
</head>

<body>
    <div class="header" >
    <nav>

<div class="links" id="navLink">
    <a href="index.html"><img src="image/logo.jpeg"></a>

<ul>
    <li><a href="manage_users.php">Manage Users</a></li>
    <li><a href="manage_comment.php">Manage Comments</a></li>
    <li><a href="manage_message.php">Manage Messages</a></li>
    <li><a href="managecourse.php">Manage Course</a></li>
    <li><a href="searchcourse.html">Update Course</a></li>
    <li><a href="addcourse.php">Add Course</a></li>    
    <li><a href="manageblog.php">Manage Blogs</a></li>    
    <li><a href="addblog.php">Add Blogs</a></li>    
    <li><a href="searchblog.html">Update Blogs</a></li>    
    <a href="admin_logout.php" class="click">Logout</a>
    

    
</ul>
</div>
</nav>
    
        <div class="text-box">
<h1>WELCOME</h1>


</div>
</body>
</html>


