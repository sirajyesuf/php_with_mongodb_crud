<?php
session_start();
include_once(__DIR__.'/../../controllers/TodoController.php');
include_once(__DIR__.'/../../requests.php');
include_once(__DIR__.'/../../messages.php');

if ($id=get('_id')){

    if($title = post('title')){

    $todocontroller = new TodoController();
    $todo = $todocontroller->update($id,[
        'title' =>$title
    ]);
    $_SESSION['success'] ="the todo is successfully updated!";
    header('location:index.php');
    
    }

    else{

        $todocontroller = new TodoController();
        $todo = $todocontroller->find($id);


    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    
    <div class="container">

    <h5 class="text-success text-center pt-5">Update Todo</h5>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF'].'?_id='.$id?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="<?= $todo->title ?? 'hi'?>" required>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>
</body>
</html>