<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <h3>BookItEvents</h3>
                  <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                  <p>
                    Tele: 1(888) 675-4215<br>
                    Tele: 1(800) 726-3421
                  </p>
                  <p>Email: BookItEvents@customerservice.com</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> About Company</h6>
               <a href="about.php" class="btn-footer"> More Info </a><br>
               <a href="contact.php" class="btn-footer"> Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6> Help us</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="index.php"> Home</a> </li>
                        <li> <a href="about.php"> About</a> </li>
                        <li> <a href="price.php"> Price</a> </li>
                        <li> <a href="about.php"> Team</a> </li>
                        <li> <a href="contact.php"> Contact</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-6 px-4">
                     <ul>
                        <li> <a href="#"> Cab Faciliy</a> </li>
                        <li> <a href="#"> Fax</a> </li>
                        <li> <a href="#"> Terms</a> </li>
                        <li> <a href="#"> Policy</a> </li>
                        <li> <a href="#"> Refunds</a> </li>
                        <li> <a href="#"> Paypal</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Newsletter</h6>
               <div class="social">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" >
               </form>
                </div>
            </div>
         </div>
      </div>
      <div id="footer">

        © <?php
            $copyYear = 2018; 
            $curYear = date('Y');
              echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
          ?> Copyright - JhavGraphiX
      </div>
   </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#dob,#doe" ).datepicker( {
              changeMonth: true,
              changeYear: true,
              yearRange: "-100:+0",
              dateFormat: "yy-mm-dd"
            });
        } );
  </script>
</body>
</html>