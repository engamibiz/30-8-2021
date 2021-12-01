<?php
include 'connect.php';
if(isset($_GET['id']) && isset($_GET['completed'])){
$id=$_GET['id'];
$completed=$_GET['completed'];
if($completed == 0){
    $query=$conn->prepare("UPDATE tasks SET completed=1 WHERE id='$id' ");
    $query->execute();
    header("Location:todo.php");
}else if($completed == 1){
    $query=$conn->prepare("UPDATE tasks SET completed=0 WHERE id='$id' ");
    $query->execute();
    header("Location:todo.php");
}else{
    echo 'You are not authorized';
}
}else{ // isset $_GET
    header("Location:todo.php");
}