<?php
$name= $_POST['name'];
$organization= $_POST['organization'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$email=$_POST['email'];
$relation=$_POST['relation'];
$hobby= implode(",",$_POST['hobbies']);

$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query = "INSERT INTO `information`.`references` (`id`, `name`, `organization`, `address`, `phone`, `email`, `relation`,`hobby`) VALUES ('NULL', '$name', '$organization', '$address', '$phone', '$email', '$relation','$hobby')";

mysqli_query($link, $query);
header('location:list.php');
 ?>
 <a href="create.html"> Another entry </a>