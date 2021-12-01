<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        .card{
            border-radius: 100px;
            border-left: 5px solid red;
        }
        .completed{
            border-left: 5px solid green;
        }
    </style>
</head>
<body>
<?php include 'tasks.php';?>
<div class="container my-5 py-5">
    <?php foreach ($tasks as $task) {?>
        <div class="row my-3">
            <div class="col-6 mx-auto">
                <div class="card px-5 py-2 ">
                    <h2><?= $task['name'] ?></h2>
                    <h2><?= $task['desc'] ?></h2>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="row my-2">
        <div class="col-6 mx-auto">
            <div class="card px-5 py-2 ">
                <h2>Task Name</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/.../dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>