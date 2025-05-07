<?php

//variables

$hostname = "appinst.mysql.database.azure.comt";
$username = "kashif";
$password = "Myapp-123";
$dbname = "appinst";

//connection

$conn = mysqli_connect($hostname, $username,$password, $dbname )
       or die("Not connected");

//query

$sql = "delete from users where username = 'sharjeel'";
 if (!mysqli_query($conn,$sql )) 
 {
    die("Error in delete query" .mysqli_error());
 } 
 echo  "Data has been deleted";     
 mysqli_close($conn)                    




?>