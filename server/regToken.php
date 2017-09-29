<?php
include 'config.php';

$data = file_get_contents('php://input');
$data = json_decode($data,true);
$token = $data['registrationId'];


$result = mysqli_query($con,"INSERT INTO `tokens`(`token`) VALUES ('".$token."')");

?>
