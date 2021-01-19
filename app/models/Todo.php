<?php

require_once(__DIR__.'/../Model.php');

class Todo  extends Model{

    protected function getCollection(){
        return $this->db->todos;
    }
    
}
