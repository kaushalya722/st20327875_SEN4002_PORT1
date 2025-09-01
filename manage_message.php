<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
   <style>
table{
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;

}
td, th{
    border: 1px solid black;
    text-align: center;
    padding: 6px;
}
tr:nth-child(odd){
    background-color: aquamarine;
}
      </style>
</head>

<body>
	<?php
	include 'connection.php';	
	$sql=	"SELECT * FROM message";
		
	$result = mysqli_query($conn,$sql);
	
echo "<table border='1' size='200'>
<tr>
<th>id</th>
<th> name</th>
<th> email</th>
<th>subject</th>
<th>message</th>
<th>Remove</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
 
  echo "<br />";
  echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['subject'] . "</td>";
 echo "<td>" . $row['message'] . "</td>";

 echo "<td>"
 ?>
  
  <a href="delete_message.php?del=<?php echo $row['id']; ?>" onClick="return confirm('Do you really need to delete !'); " >delete</a>
  
  
  <?php
  "</td>";
  echo "</tr>";
  }
  
  
echo "</table>";

mysqli_close($conn);	
?>

</body>
</html>