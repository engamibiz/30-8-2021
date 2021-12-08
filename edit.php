<?php
$id=$_GET['id'];
include 'connect.php';
$query=$conn->prepare("SELECT * FROM tasks WHERE id='$id'");// احتار من التاسكات التاسك الي الي دي بتاعاها جاي من الرابط
$query->execute();
$task=$query->fetch();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name=$_POST['taskName'];
    $desc=$_POST['taskDesc'];
    $query=$conn->prepare("UPDATE tasks SET name='$name' ,description='$desc' WHERE id='$id' ");
    $query->execute();
    header("Location:todo.php");
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
    <link href="css/all.min.css" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
        .card{
            border-radius: 10px;
            border-left:5px solid red;
            position: relative;
        }
        .completed{
            border-left:5px solid green;
        }
        .icons{
            position: absolute;
            top:20px;
            right:20px;
            color:#bbb;
            font-size: 20px;
        }
        a{
            color:#bbb;
            text-decoration: none;
        }
        .completed .fa-check{
            color:green
        }
        .fa-trash{
            color:red
        }
    </style>
</head>
<body>
<header class="fixed-top py-3">
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">

            </div>
        </div>
    </div>
</header>
<div class="container">
<form method="post">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Task Name</label>
            <input value="<?= $task['name'] ?>" type="text" class="form-control" id="exampleFormControlInput1" name="taskName">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="taskDesc" rows="3"><?= $task['description'] ?></textarea>
        </div>
     <button type="submit" class="btn btn-primary">Save</button>

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>