<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'connect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query=$conn->prepare("SELECT * FROM users WHERE email='$email'");
    $query->execute();
    $count=$query->rowCount();
    if($count > 0 ){
       // email is found
        $user=$query->fetch();
        if(password_verify($password,$user['password'])){
            $_SESSION['login']= $email;
            $_SESSION['user_id']= $user['id'];
            header("Location:todo.php");
        }else{ // wrong password
            echo '<div class="alert alert-danger">Wrong Password</div>';
        }
    }else{ // wrong email
        echo '<div class="alert alert-danger">email not found</div>';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>