<?php
$dbhost = "mysql";
$dbuser = "user";
$dbpwd = "pass";
$dbname = "testdb";
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
