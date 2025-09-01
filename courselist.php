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
				
		$search=$_POST['id'];
	
$sql = 'SELECT * FROM courses WHERE  id ="'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		   <div class="form">       
         <form name="form" method="POST" action=" updatecourse.php">
        <div class="form-group">
          <input type="text" name="course_name" class="form-control" value="<?php echo $row['course_name']?>"/></p>
		  </div>
          <div class="form-group">
          <input type="text" name="duration" class="form-control" value="<?php echo $row['duration']?>"/></p>
		  </div>
          <div class="form-group">
          <textarea name="description" placeholder="Description" class="form-control" value="<?php echo $row['description']?>"></textarea>
          </div>
          <div class="form-group">
          <input type="text" name="entry_criteria" class="form-control"  value="<?php echo $row['entry_criteria']?>"/></p>
		  </div>

		  

		
		
		
		  <input type="hidden" name="name" value="<?php echo $search;?>"/>
		
              <br>
	    <input type="submit" name="update" class="hero-btn" value="Update" />
		   </p>
         </form>
		        <?php
				}
    else{
		 echo "<script>alert(' No results found');
		 window.location.href='Searchcourse.html';</script> "; 
	    }
	
    
  }
	else{
		header("Location:Searchcourse.html");
	}  
	  	 
?>
		 	
		
	     
</div>
</body>
</html>