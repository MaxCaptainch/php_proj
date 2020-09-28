<?php
	require_once 'connect.php';

	$action = $_POST['action'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$place = $_POST['place'];


	if($action == "create"){
		mysqli_query($connect,"INSERT INTO `user_info` (`id`, `name`, `lastname`, `age`, `sex`, `place`) VALUES (NULL, '$name', '$lastname', '$age', '$sex', '$place');");
		
	}

	if($action == "update"){
		mysqli_query($connect,"UPDATE `user_info` SET `name` = '$name', `lastname` = '$lastname', `age` = '$age', `sex` = '$sex', `place` = '$place' WHERE `user_info`.`id` = '$id'");
	}

	header('Location: /php_proj/content.php');
?>