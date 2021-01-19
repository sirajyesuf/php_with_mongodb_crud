<?php

function post($key){

    if(isset($_POST[$key])){
        return $_POST[$key];
    }
    return null;
}


function get($key){
    
    if(isset($_GET[$key])){
        return $_GET[$key];
    }
    return null;

}

