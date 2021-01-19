<?php
require_once(__DIR__.'/../models/Todo.php');

class TodoController{

    public function  index(){
        return (new Todo)->all();
    }

    public function store($data) {
        return (new Todo)->create($data);
    }

    
    public function delete($_id) {
        return (new Todo)->delete($_id);
    }

    public function find($_id) {
        return (new todo)->find($_id);
    }

 

    public function update($_id, $data) {
        return (new todo)->update($_id, $data);
    }
} 






