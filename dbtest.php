<?php

echo "<h1>Server Name:  <br>";
$dbhost = "localhost";
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbnme = getenv("MYSQL_DATABASE");
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd ,$dbnme);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
