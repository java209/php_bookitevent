<?php 

    $title = 'View Event Details';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getEventDetails($id);
    }else{
        include 'includes/errormessage.php';
    }
?>

<h1>Event Details</h1>
<div class="card" style="width: 20rem;">

<div class="card-body">
    <h5 class="card-title">
        <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
    </h5>
    <p class="card-text">
        Event Name: <?php echo $result['eventname']; ?>
    </p>
    <p class="card-text">
        Date of Event: <?php echo $result['doe']; ?>
    </p>
    <p class="card-text">
        Event Details: <?php echo $result['eventdetail']; ?>
    </p>
  </div>

</div>
<br/>
    <a href="viewevent.php" class="btn btn-info">Back to view events</a>
    <a href="createevent.php" class="btn btn-info">Create Event</a>

<br>
<br>
<?php require_once 'includes/footer.php';?>