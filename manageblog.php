<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
            width:100%;
        }
        td, th{
            border:1px solid black;
            text-align:center;
            padding:6px;
        }
        tr:nth-child(odd){
            background-color:lightgray;
        }
    </style>
</head>
<body>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM blogs";

    $result = mysqli_query($conn, $sql);

    echo "<table border ='1' size='200'>
    <tr>
    <th>id</th>
    <th>date</th>
    <th>title</th>
    <th>content</th>
    <th>author</th>
    <th>about_author</th>
    <th>Remove</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo"</br>";
        echo"<tr>";

        echo "<td>" .$row['id']."</td>";
        echo "<td>" .$row['date']."</td>";
        echo "<td>" .$row['title']."</td>";
        echo "<td>" .$row['content']."</td>";
        echo "<td>" .$row['author']."</td>";
        echo "<td>" .$row['about_author']."</td>";

        echo "<td>"
        ?>
<a href="delete_blog.php?del=<?php echo $row['title'];?>" onClick="return confirm('Do you really need to delete!');">Delete</a>
<?php
"</td>";
echo "</tr>";        
    }
    echo "</table>";
    mysqli_close($conn);
    ?>
</body>
</html>