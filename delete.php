<?php
session_start();
$id=$_GET['id'];
include 'connect.php';
$query=$conn->prepare("DELETE FROM tasks WHERE id='$id'");
$query->execute();
$_SESSION['alert_color']='green';
$_SESSION['msg']='Deleted Successfully';
header("Location:todo.php");




