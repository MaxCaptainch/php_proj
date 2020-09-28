<?php
require_once "connect.php";

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `user_info` WHERE `user_info`.`id` = '$id'");
header('Location: ./content.php');