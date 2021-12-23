<?php
    $title = 'View All Records';

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //get all attendees
    $results = $crud->getEvent()
?>
    <br>
    <h1>All Events</h1>
    <table class="table table-striped table-dark">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Event Name</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r = $results->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?php echo $r['event_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['eventname'] ?></td>
                <td>
                    <a href="vieweventdetails.php?id=<?php echo $r['event_id'] ?>" class="btn btn-success">View Event Details</a>
                    <a href="editevent.php?id=<?php echo $r['event_id'] ?>" class="btn btn-warning">Edit Event Details</a>
                    <a href="deleteevent.php?id=<?php echo $r['event_id'] ?>" class="btn btn-danger">Delete Event</a>
                    
                </td>
                
            </tr>
        <?php
        }
        ?>
    </table>

<br>
<br>
<?php require_once 'includes/footer.php';?>