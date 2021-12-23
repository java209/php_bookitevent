<?php 

    $title = 'Contact';
    require_once 'includes/header.php';

?>

<div class="container">
<h1>Contact Us</h1>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name..">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your last name..">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Country</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Caribbean</option>
      <option>USA</option>
      <option>Europe</option>
      <option>Middle East</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Subject</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write something.."></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="664" id="gmap_canvas" src="https://maps.google.com/maps?q=kingston&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:664px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedded maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:664px;width:1080px;}</style></div></div>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';?>
