<?php
// collect data from post
session_start();
$taskName=$_POST['taskName'];
$taskDesc=$_POST['taskDesc'];
if(empty($taskName) || empty($taskDesc)){
    $_SESSION['msg']='Name Or Description Is Empty';
    $_SESSION['alert_color']='red';
    header("Location:todo.php");
} else{
    include 'connect.php';
    $query=$conn->prepare("INSERT INTO tasks SET name='$taskName' , description='$taskDesc'");
    $query->execute();
    $_SESSION['msg']='Task Added Successfully';
    $_SESSION['alert_color']='green';
    header("Location:todo.php");
}

