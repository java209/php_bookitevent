<?php 

    $title = 'Create Event';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'


?>

    <h1 class="text-center">Create Event</h1>
<div class="container">
    
    <form method="post" action="eventsuccess.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text"  class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
            <label for="eventname">Name of Event</label>
            <input required type="text"  class="form-control" id="eventname" name="eventname" placeholder="Enter Name of Event">
        </div>

        <div class="form-group">
            <label for="doe">Date of Event</label>
            <input required type="text" class="form-control" id="doe" name="doe" placeholder="Enter Date Of Event">
        </div>

        <div class="form-group">
            <label for="eventdetail">Event Details</label>
            <input required type="text" class="form-control" id="eventdetail"  rows="3" name="eventdetail"  placeholder="Enter event details. Please include time and venue"></textarea>
        </div>

        <!--<form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Add Poster</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        </form>-->
       
        <button type="submit" name="eventsubmit" class="btn btn-success btn-block ">Submit</button>
    </form>
    <div>
<a href="viewevent.php" class="btn btn-primary">Back to view events</a>
</div>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>