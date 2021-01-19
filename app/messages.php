<?php

function danger(){
    if(isset($_SESSION['danger'])){
        $msg = $_SESSION['danger'];
        session_unset();
        return "<div class='alert alert-danger' role='alert'>{$msg}</div>";
    }
}

function success(){
    if(isset($_SESSION['success'])){
        $msg = $_SESSION['success'];
        session_unset();
        return "<div class='alert alert-success' role='alert'>{$msg}</div>";
    }
}