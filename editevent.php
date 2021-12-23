<?php 

    $title = 'Edit Event';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(!isset($_GET['id'])){
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewevent.php");

    } else{
        $id = $_GET['id'];
        $event = $crud->getEventDetails($id);


?>

    <h1 class="text-center">Edit Event</h1>
<div class="container">
    
    <form method="post" action="editpost.php">
        <input type="hidden" name=" value="<?php echo $event['event_id'] ?>"  />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control"  value="<?php echo $event['firstname']?>" id="firstname" name="firstname" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text"  class="form-control"  value="<?php echo $event['lastname']?>" id="lastname" name="lastname" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
            <label for="eventname">Name of Event</label>
            <input required type="text"  class="form-control" value="<?php echo $event['eventname']?>" id="eventname" name="eventname" placeholder="Enter Name of Event">
        </div>

        <div class="form-group">
            <label for="doe">Date of Event</label>
            <input required type="text" class="form-control" value="<?php echo $event['doe']?>" id="doe" name="doe" placeholder="Enter Date Of Event">
        </div>

        <div class="form-group">
            <label for="eventdetail">Event Details</label>
            <input required type="text" class="form-control" value="<?php echo $event['eventdetail']?>" id="eventdetail"  rows="3" name="eventdetail"  placeholder="Enter event details. Please include time and venue"></textarea>
        </div>

        <!--<form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Add Poster</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        </form>-->
       
        <button type="submit" name="eventsubmit" class="btn btn-success btn-block ">Submit Changes</button>
    </form>
    <div>
<a href="viewevent.php" class="btn btn-primary">Back to view events</a>
<?php } ?>
</div>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>