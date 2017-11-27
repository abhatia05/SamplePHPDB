<?php

echo "<h1>Server Name:  <br>";
$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'root';
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbnme = getenv("MYSQL_DATABASE");
// Create connection
$conn = mysql_connect($dbhost, $dbuser, $dbpwd);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
