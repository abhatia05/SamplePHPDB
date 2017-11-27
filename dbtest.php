<?php

echo "<h1>Server Name:  <br>";
$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'root';
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbnme = getenv("MYSQL_DATABASE");

echo $dbhost;
echo "<br>";
echo $dbport;
echo "<br>";
echo $dbpwd;
echo "<br>";
echo $dbnme;
?>
