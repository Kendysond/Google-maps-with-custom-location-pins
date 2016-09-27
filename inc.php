<?php
$username="root";
$password="root";
$database="mapg";
$conn = mysqli_connect('localhost',$username,$password);
if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
mysqli_select_db($conn,$database) or die( "Unable to select database");
// $query = "INSERT INTO tablename VALUES('','$field1-name','$field2-name',
// '$field3-name','$field4-name','$field5-name')";
// mysql_query($query);
// mysql_close();

 ?>
