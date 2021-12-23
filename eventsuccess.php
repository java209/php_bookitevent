<?php 

$title = 'eventsuccess';
require_once 'includes/header.php';
require_once 'db/conn.php';
//check if post varible exist
if(isset($_POST['eventsubmit'])){
    //extract values from the $_Post array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $ename = $_POST['eventname'];
    $doe = $_POST['doe'];
    $eventdetail = $_POST['eventdetail'];
     //call function to insert and track if success or fail
    $isSuccess = $crud->insertEvent($fname, $lname, $ename, $doe, $eventdetail);

     //print success or fail nessage
    if($isSuccess){
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';

    }
}

?>

<!-- Prints Values using get method --> 
<!--
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
    </h5>
    <p class="card-text">
        Date of Event: <?php //echo $_GET['doe']; ?>
    </p>
    <p class="card-text">
        Event Detail: <?php //echo $_GET['eventdetail']; ?>
    </p>
  </div>
</div>
-->

<!-- Prints Values using POST method --> 
<h1>My Event</h1>
<div class="card" style="width: 20rem;">

<div class="card-body">
    <h5 class="card-title">
        <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
    </h5>
    <p class="card-text">
        Event Name: <?php echo $_POST['eventname']; ?>
    </p>
    <p class="card-text">
        Event Date: <?php echo $_POST['doe']; ?>
    </p>
    <p class="card-text">
        Event Detail: <?php echo $_POST['eventdetail']; ?>
    </p>
  </div>

</div>
<div>
<a href="viewevent.php" class="btn btn-primary">View Events</a>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>
