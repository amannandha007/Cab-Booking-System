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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include("include/header.php");
    ?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          BOOKING CAB
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form action="book_insert.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Enter your Name " name="name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Enter your Phone" name="phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email id" name="email">
                </div>
                <div class="form-group col-md-6">
                <?php
                  include_once("connection/connection.php");
                  $id = $_REQUEST['id'];
                  $qry = "select * from subcategories where id=$id";
                  $result = mysqli_query($conn, $qry) or exit("sub category select fail" . mysqli_error($conn));
                  $row = mysqli_fetch_array($result);
                  ?>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your car name" name="car" value="<?php echo $row["subcname"]; ?>">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Enter your pickup location " name="pickup_location">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Enter your drop location" name="drop_location">
                </div>
                <div class="form-row col-md-12">
                  <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="inputName4" placeholder="pickup date " name="pickup_date">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="inputSubject4" placeholder="return date" name="return_date">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit"  name="submit"  id="submit" >Book</button>
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
            Rajkot
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
              <img src="images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <?php
  include("include/footer.php");
  ?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>