<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['update'])){
        include('connection.php');

        $id = $_POST['id'];
        $date = $_POST['date'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $about_author = $_POST['about_author'];


        $sql = "UPDATE blogs SET date ='$date', title='$title', content='$content', author='$author', about_author='$about_author'
        WHERE id='$id' ";
         $result=mysqli_query($conn,$sql);

         if($result){
            echo "<script>alert('Your details is successfully updated');window.location.href='blog.php'</script>";
            echo "<br>";
         }else{
          echo "<script>alert('ERROR');window.location.href='blog.php';</script>";
          
         }
         }
    
    
    
    
    
    
    
    ?>
</body>
</html>