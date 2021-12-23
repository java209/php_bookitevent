<?php
   include_once 'includes/session.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/mystylesheet.css">
  
</head>
<body>

<nav class="navbar bg-dark navbar-dark">
  <a class="navbar-brand" href="Index.php">BookItEvents</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Index.php">Home</a>
      </li>
      <?php 
              if(!isset($_SESSION['id'])){
          ?>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
      <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['loginname'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
          <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="price.php">Price</a>
        <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="viewprofiledetail.php">My Profile</a>
      </li>  
      </li>    
    </ul>
  </div>  
</nav>
<br>