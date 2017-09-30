<?php
include 'function.php';
$data = file_get_contents('php://input');
$data = json_decode($data,true);
$title = $data['title'];
$body = $data['body'];

$result = mysqli_query($con,"select * from tokens");

while($x = mysqli_fetch_assoc($result)){

sendNotification($title,$body,$x['token']);

}


?>
