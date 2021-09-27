<?php 
ob_start(); 
require 'config.php';


$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`, /*`feedback`*/, `suggestions`) VALUES ('','$name','$email','$num',/*'$view'*/,'$comments')");
echo '<script>alert("Thank you for submitting the message"); location.replace(document.referrer);</script>';



?>