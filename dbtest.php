<?php

echo "<h1>Server Name:  <br>";
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbnme = getenv("MYSQL_DATABASE");
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd ,$dbnme);
// Check connection
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
?>
