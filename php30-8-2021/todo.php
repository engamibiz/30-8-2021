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
            color: color:#bbb;
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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Task Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="taskName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="taskDesc" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'tasks.php'; ?>
<div class="container my-5 py-5">
    <?php foreach ($tasks as $task){ ?>
    <div class="row my-3">
        <div class="col-6 mx-auto">
            <div class="card px-5 py-2 <?php if($task['completed']){ echo 'completed'; } ?> ">
                <h2><?= $task['name'] ?></h2>
                <p><?= $task['description'] ?></p>
                <div class="icons">

                    <a href="complete.php?id=<?= $task['id']; ?>&completed=<?= $task['completed'] ?>">
                        <i class="fas fa-check ms-3"></i>
                    </a>
                    <i class="fas fa-edit ms-3"></i>
                    <i class="fas fa-trash ms-3"></i>
                </div>
            </div>
        </div>
    </div>
        <?php  } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>