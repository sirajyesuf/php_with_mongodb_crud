<?php
require_once(__DIR__.'/../../requests.php');
require_once(__DIR__.'/../../controllers/TodoController.php');
session_start();

if($title = post('title')){
    $todocontroller = new TodoController();
    $todocontroller->store([
        'title' =>$title

    ]);
    $_SESSION['success'] = "the todo is successfully created";
    header('location:index.php');


}

else{
    $_SESSION['danger'] = "the title field is required";
    header('location:index.php');
}
