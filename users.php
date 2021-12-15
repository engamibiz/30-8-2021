<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "connect.php";
        $name=$_POST['userName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $passHash=password_hash($password,PASSWORD_BCRYPT);
        $query=$conn->prepare("INSERT INTO users SET fullName='$name', email='$email', password='$passHash'");
        $query->execute();
        echo ' user registered successfully';
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
            <input type="text" class="form-control" id="floatingInput" name="userName" placeholder="First Last">
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>