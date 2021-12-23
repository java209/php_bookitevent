<?php
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
if(!$_GET['id']){
    include 'includes/errormessage.php';
    header("Location: viewevent.php");
} else {
    //get id value
    $id = $_GET['id'];

    //call delete function
    $result = $crud->deleteevent($id);

    //redirect to list
    if($result){
        header("Location: viewevent.php");
    }
    else{
        include 'includes/errormessage.php';
    }
}

?>