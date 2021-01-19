<?php
require_once('../../controllers/TodoController.php');
require_once(__DIR__.'/../../messages.php');
session_start();
$todocontroller = new TodoController();
$todos = $todocontroller->index();

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
        <h5 class="text-success text-center pt-5">Todo App</h5>
        <hr>

        <form action="create.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="what want to do" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

<br>
<br>

<?php
        echo danger();
        echo success();


if ($todos){

    echo "<table>
        <thead>
        <th>Title</th>
        <th class='px-4'>Edit</th>
        <th>Delete</th>
        </thead>
        <tbody>";


            foreach($todos as $todo){
            echo "<tr>";
            echo "<td class='py-4'>$todo->title</td>";
            echo "<td>
            <form action='edit.php' method='get'>
                <input type='hidden' value='{$todo->_id}' name='_id'>
                <input type='submit' value='Edit' class='btn btn-secondary'>
            </form>
            </td>";
            echo "<td class='pc-4'>
            <form action='delete.php' method='post'>
                <input type='hidden' value='{$todo->_id}' name='_id'>
                <input type='submit' value='Delete' class='btn btn-danger'>
            </form>
        </td>";
        echo "</tr>";
        }
        
    
    
    
  



    echo  "</tbody>
        </table>";

}
// else{
// echo "<div class='alert alert-warning' role='alert'>A simple warning alert—check it out!</div>";
// }

?>
    </div>
        

</body>
</html>