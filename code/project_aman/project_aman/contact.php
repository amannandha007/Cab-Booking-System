<?php
include("connection/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Namsate Cab</title>

  <!-- slider stylesheet -->
  <?php
include_once("include/style.php");
 ?>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
include_once("include/header.php");
?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        Contact Us        
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="img-box">
          <img src="assets/images/location.png" alt="">
          </div>
          <h6>
           Aman Nandha
          </h6>
        </a>
        <a href="">
          <div class="img-box">
          <img src="assets/images/call.png" alt="">
          </div>
          <h6>
            (+91 7202089638)
          </h6>
        </a>
        <a href="">
          <div class="img-box">
          <img src="assets/images/mail.png" alt="">
          </div>
          <h6>
           amannandha7@gmail.com
          </h6>
        </a>

      </div>
      <div class="social_container">
        <div class="social-box">
          <div>
            <a href="">
              <img src="assets/images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="assets/images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="assets/images/linkedin.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="assets/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <?php
include_once("include/footer.php");
 ?>
  <!-- footer section -->

  <?php
 include_once("include/script.php");
 ?>

</body>

</html>