<?php
ob_start(); 
session_start();

date_default_timezone_set("America/Chicago"); // Correct function to set the timezone

try {
    $con = new PDO("mysql:dbname=jayyflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage()); 
}
?>
