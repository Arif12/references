<?php
//print_r ($_POST);
$id=$_POST['id'];
$name=$_POST['name'];
echo $name;
$organization=$_POST['organization'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$relation=$_POST['relation'];
$hobby=implode($_POST['hobbies']);

$link= mysqli_connect("localhost",
						"root",
						"",
						"information");
						
$query="UPDATE `information`.`references` SET `name` = '$name', `organization` = '$organization', `address` = '$address ', `phone` = '$phone ', `email` = '$email', `relation` = '$relation',`hobby` = '$hobby' WHERE `references`.`id` = '$id'";

mysqli_query($link,$query);
header('location:list.php');
?>
