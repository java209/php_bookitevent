<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $eventname = $_POST['eventname'];
        $doe = $_POST['doe'];
        $eventdetail = $_POST['eventdetail'];
        
        //Call Crud function
        $result = $crud->editevent($id,$fname, $lname, $eventname, $doe,$eventdetail);
        // Redirect to index.php
        if($result){
            header("Location: viewevent.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

    

?>