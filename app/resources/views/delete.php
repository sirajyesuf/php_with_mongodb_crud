<?php
require_once(__DIR__.'/../../requests.php');
require_once(__DIR__.'/../../controllers/TodoController.php');
session_start();

if($id = post('_id')){
    $todocontroller = new TodoController();
    $todocontroller->delete($id);
    $_SESSION['success'] = "the todo is successfully deleted";
    header('location:index.php');


}

else{
    header('location:index.php');
}
