<?php
$hostname = "appinst.mysql.database.azure.comt";
$username = "kashif";
$password = "Myapp-123";
$dbname = "appinst";

// Connection to database
$conn = mysqli_connect($hostname, $username, $password, $dbname)
    or die("not Connected to database");
echo "Connected to database<br>";

// SQL query
$sql = mysqli_query($conn, "SELECT id, username FROM users");

// Fetch the data
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) 
    {
        echo "ID: " . $row['id'] .
             ", Username: " . $row['username'] . "<br>";
    }
} else {
    echo "No records found";
}

mysqli_close($conn);
?>
