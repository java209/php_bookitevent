<?php 

    $title = 'Login';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $loginname = strtolower(trim($_POST['loginname']));
      $password = $_POST['password'];
      $new_password = md5($password.$loginname);

      $result = $username->getusername($loginname,$new_password);
      if(!$result){
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    }else{
        $_SESSION['loginname'] = $loginname;
        $_SESSION['id'] = $result['id'];
        header("Location: index.php");
    }
    }
?>
<div class="container">
<h1 class="text-center"><?php echo $title ?> </h1>
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><label for="loginname">loginname: * </label></td>
                <td><input type="text" name="loginname" class="form-control" id="loginname" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['loginname']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
        </table><br/><br/>
        <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
        <a href="#"> Forgot Password </a> <br>
        <a href="register.php"> Not yet a member? </a>
            
    </form><br/><br/><br/><br/>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>