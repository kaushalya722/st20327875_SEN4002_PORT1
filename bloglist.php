<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
    <?php
    if(isset($_POST['submit'])){
        include('connection.php');
        $search= $_POST['id'];
        $sql = 'SELECT * FROM blogs WHERE id= "'.$search.'"';
        $result = mysqli_query($conn, $sql) or die ("Couldn't execute query.".mysqli_error($conn));

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            ?>
        
    
    <div class="form">
        <form name="form" method="post" action="updateblog.php">
             <div class="form-group">
                <input type="number" name="id" class="form-control" value="<?php echo $row['id']?>"/></p>
            </div>

            <div class="form-group">
                <input type="date" name="date" class="form-control" value="<?php echo $row['date']?>"/></p>
            </div>
            <div class="form-group">
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']?>"/></p>
            </div>
            <div class="form-group">
                <textarea name="content" id="" class="form-control" value="<?php echo $row['content']?>"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="author" class="form-control" value="<?php echo $row['author']?>"/></p>
            </div>
            <div class="form-group">
                <input type="text" name="about_author" class="form-control" value="<?php echo $row['about_author']?>"/></p>
            </div>
         <input type="hidden" name="name" value="<?php echo $search;?>"/>
		
              <br>
	    <input type="submit" name="update" class="hero-btn" value="Update" />
		   </p>
        </form>
        <?php 
        }
        else{
            echo "<script>alert('No result found');
            window.location.href='searchblog.html';</script>";
        }
    }
    else{
        header("Locatio:searchblog.html");
    }
        ?>
    </div>
</body>
</html>