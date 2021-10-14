<?php
    include_once 'phplessons/connect2.php';    
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
 </head>
 <body>
 
 <?php
 
 $sql = "SELECT * FROM `books`;";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);
 
 
if ($resultCheck >0) {
	while($row = mysqli_fetch_assoc($result)){
		echo $row['`books`_uid'];
	}
}
 ?>
 
 </body>
 </html>