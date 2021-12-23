<?php 

    $title = 'Browse Events';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
   

    $results = $crud->getUserProfile();

?>
 <br>
    <table class="table table-striped table-dark">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r = $results->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?php echo $r['user_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td>
                    <a href="viewprofiledetail.php?id=<?php echo $r['user_id'] ?>" class="btn btn-success">View User Profile Details</a>
                </td>
                
            </tr>
        <?php
        }
        ?>
    </table>


<br>
<br>
<?php require_once 'includes/footer.php';?>
