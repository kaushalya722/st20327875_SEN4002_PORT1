<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['update'])){ 
	    include('connection.php');
		
		    $course_name  =$_POST['course_name'];
            $duration=$_POST['duration']; 		
            $description =$_POST['description']; 
	        $entry_criteria =$_POST['entry_criteria']; 		

$sql="UPDATE courses SET duration='$duration', description='$description', entry_criteria='$entry_criteria'
WHERE course_name ='$course_name'";
		
  	 $result=mysqli_query($conn,$sql);
   

	if($result){			     
    echo "<script>alert(' your details is successfully updated');window.location.href='cources.php'</script>";
	echo "<BR>";
	}else {
    echo "<script>alert('ERROR');window.location.href='cources.php';</script>";
}
}
?>
</body>
</html>