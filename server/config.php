<?php
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header("Access-Control-Allow-Origin: *");
header("Cache-Control: *"); //HTTP 1.1
header("Content-Type : text/plain");

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($host,$username,$password,"test") or die ("<br/>Could not connect to MySQL server");

