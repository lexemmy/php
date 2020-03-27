<?php


$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$track = $_POST['track'];
$textarea = $_POST['textarea'];



$fp = fopen("$fname.txt", "a");
fwrite($fp, $fname."\r\n");
fwrite($fp, $lname."\r\n");
fwrite($fp, $email."\r\n");
fwrite($fp, $number."\r\n");
fwrite($fp, $gender."\r\n");
fwrite($fp, $track."\r\n");
fwrite($fp, $textarea."\r\n");
fclose($fp);


echo "file created successfully";
?>