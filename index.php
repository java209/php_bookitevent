<?php 

    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'

?>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
      <p style="text-align:center;"><img src="/img/beach.jpg" alt="beach" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/terrace.jpg" alt="restaurant" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/blackout.jpg" alt="conference" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/brunch.jpg" alt="club" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/live.jpg" alt="bar" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/vegan.jpg" alt="conference" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/health.jpg" alt="club" style="width:60%"></p>
      </div>
      <div class="carousel-item">
      <p style="text-align:center;"><img src="/img/church.jpg" alt="church" style="width:60%"></p>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
<h1 style="text-align:center;">Browse Events</h1>

<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <img src="/img/live.jpg" alt="club" style="width:105%">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img src="/img/beach.jpg" alt="club" style="width:105%">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img src="/img/brunch.jpg" alt="club" style="width:105%">
    </div>
  </div>
</div>
<br>
<a href="viewevent.php" class="btn btn-primary">See More</a>
</div>
</div>

<br>
<br>
<?php require_once 'includes/footer.php';?>
