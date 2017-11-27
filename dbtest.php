<?php

echo "<h1>Server Name:  <br>";
$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'root';
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbnme = getenv("MYSQL_DATABASE");
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
