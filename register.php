<?php 

    $title = 'Register';
    require_once 'includes/header.php';
    require_once 'db/conn.php'


?>

    <h1 class="text-center">Registration</h1>
<div class="container">
    
    <form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text"  class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
            <label for="dob">DOB</label>
            <input required type="text" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else or use it maliciously.</small>
        </div>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input required type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter Contact Number">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else or use it maliciously.</small>
        </div>
       
        <button type="submit" name="submit" class="btn btn-success btn-block ">Submit</button>
    </form>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>