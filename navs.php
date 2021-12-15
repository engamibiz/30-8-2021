<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:index.php");
}

?>

<a href="users.php">Users</a>
<a href="logout.php">Logout</a>