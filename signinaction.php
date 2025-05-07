<?php
//variables

$hostname = "appinst.mysql.database.azure.comt";
$username = "kashif";
$password = "Myapp-123";
$dbname = "appinst";

//connection

$conn = mysqli_connect($hostnamme,$username,$password,$dbname)
        or die("not able to connecr" .mysqli_error($conn));
echo "Connected successfully";

//query

$sql = mysqli_query($conn, "select username,password from users");

//fecth


?>