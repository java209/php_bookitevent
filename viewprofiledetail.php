<?php 

    $title = 'View Profile';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getUserDetails($id);
    }else{
        include 'includes/errormessage.php';
    }
?>

<h1>User Profile Details</h1>
<div class="card" style="width: 20rem;">

<div class="card-body">
    <h5 class="card-title">
        <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
    </h5>
    <p class="card-text">
        Date of Birth: <?php echo $result['dateofbirth']; ?>
    </p>
    <p class="card-text">
        Email Address: <?php echo $result['emailaddress']; ?>
    </p>
    <p class="card-text">
        Tele: <?php echo $result['contactnumber']; ?>
    </p>
  </div>

</div>
<br/>
    <a href="viewevent.php" class="btn btn-info">View Events</a>
    <a href="createevent.php" class="btn btn-info">Create Event</a>

<br>
<br>
<?php require_once 'includes/footer.php';?>