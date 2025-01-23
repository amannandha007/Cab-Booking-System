<?php
session_start();
if (isset($_SESSION['email'])) {

  ?>
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

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include_once("include/header.php");
    ?>
    <!-- end header section -->
    <!-- slider section -->
    <?php
    include_once("include/slider.php");
    ?>
    <!-- end slider section -->
  </div>
  <!-- book section -->
  <section class="book_section">
    <div class="form_container">

    </div>
    <div class="img-box">
      <img src="assets/images/book-car.png" alt="">
    </div>
  </section>

  <!-- end book section -->

  <!-- car section -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Better Way For Find Your Favourite Cars
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable
        </p>
      </div>

      <div class="car_container">
        <?php
        $qry = "SELECT * FROM categories";
        $re = mysqli_query($conn, $qry);
        foreach ($re as $row)
          if ($row['status'] == 1) { { ?>
              <div class="box">
                <div class="img-box">
                <img src="admin/images/categories/<?php echo $row['image'] ?>" />
                </div>
                <div class="detail-box">
                  <h5><?php echo $row['cname'] ?></h5>
                  <p><?php echo $row['catdescription'] ?></p>
                  <a href="subcategory.php?id=<?php echo $row['id']; ?>">
                    Read More
                  </a>
                </div>

              </div>


            <?php }
          } ?>
      </div>

    </div>
  </section>

  <!-- end car section -->

  <!-- about section -->

  <!-- <section class="about_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <?php
        $qry = "SELECT * FROM about_us";
        $re = mysqli_query($conn, $qry);
        foreach ($re as $row)
          if ($row['status'] == 1) { { ?>
              <div class="col-md-7 px-0">
                <div class="img-box">
                  <img src="admin/images/about/<?php echo $row['image'] ?>" alt="" style="height:400px; width:400px">
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                <div class="detail-box">
                  <h2><?php echo $row['about_title'] ?></h2>
                  <p><?php echo $row['about_description'] ?></p>
                  <!-- <a href="">
                    Read More
                  </a> -->
                </div>
              <?php }
          } ?>
        </div>
      </div>
  <!-- </section> --> -->

  <!-- end about section -->


  <!-- best section -->

  <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">
          <h2>
            Our Best Cars
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the
          </p>
        </div>
        <div class="btn-box">
          <a href="cabbook.php">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end best section -->

  <!-- rent section -->

  <section class="rent_section layout_padding">
    <div class="container">
      <div class="rent_container">
        <?php
        $qry = "SELECT * FROM subcategories LIMIT 6";
        $re = mysqli_query($conn, $qry);
        foreach ($re as $row)
        // if ($row['status'] == 1)  
        { ?>
          <div class="box">
            <div class="img-box">
              <!-- <img src="assets/images/r-1.png" alt=""> -->
              <img src="admin/images/subcategories/<?php echo $row['image'] ?>" />
            </div>
            <div class="price">
              <h3><?php echo $row['subcname']; ?></h3>
              <h5><?php echo $row['subcatdescription'] ?></h5>

            </div>
          </div>
        <?php }
        ?>

      </div>
      <div>
        <div class="btn-box">
          <a href="product.php">
            See More
          </a>
        </div>

      </div>
  </section>


  <!-- end rent section -->

  <!-- blog section -->

  <!-- <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Latest Blog
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
    </div>
    <div class="blog_container">
      <div class="layout_padding2-top">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <?php
            $qry = "SELECT * FROM blog";
            $re = mysqli_query($conn, $qry);
            foreach ($re as $row)
              if ($row['status'] == 1) { { ?>
                  <div class="item">
                    <div class="box">
                      <div class="date-box">
                        <h6><?php echo $row['date'] ?></h6>

                      </div>
                      <div class="img-box">
                        <img src="admin/images/blog/<?php echo $row['image'] ?>" />

                      </div>
                      <div class="detail-box">
                        <h3><?php echo $row['title'] ?></h3>
                        <p><?php echo $row['description'] ?></p>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
            ?>
            <!-- <div class="item">
              <div class="box">
                <div class="date-box">
                  <h6>
                    04 Nov 2019
                  </h6>
                </div>
                <div class="img-box">
                  <img src="assets/images/b-2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Steering wheels
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using
                    Lorem </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="date-box">
                  <h6>
                    04 Nov 2019
                  </h6>
                </div>
                <div class="img-box">
                  <img src="assets/images/b-3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Buick Car
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using
                    Lorem </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="date-box">
                  <h6>
                    04 Nov 2019
                  </h6>
                </div>
                <div class="img-box">
                  <img src="assets/images/b-2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Steering wheels
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using
                    Lorem </p>
                </div>
              </div>
            </div> -->
          <!-- </div>
        </div>
      </div>
    </div> -->
  </section> -->

  <!-- end blog section -->

  <!-- us section -->

  <section class="us_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why choose Us
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
    </div>
    <div class="us_container layout_padding2">
      <div class="content_box">
        <div class="box">
          <div class="img-box">
            <img src="assets/images/u-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Low Rent
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/u-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Fast Car
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/u-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Safe Car
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/u-4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Quick Support
            </h5>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Is say Customer
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
      <div class="layout_padding2-top">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                 


                 It is a feature in cab booking applications that allows passengers to communicate their preferences and requirements directly to the driver. By using voice commands or quick text options, customers can specify their destination, request stops, or share any special needs, ensuring a more personalized and efficient ride experience.                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="assets/images/client-1.png" alt="" class="img-1">
                    <img src="assets/images/client-1-white.png" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Parthiv Solanki
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                  "Say Customer" is an innovative feature in cab booking apps that lets passengers voice their needs directly to drivers. Whether it's specifying a drop-off location, requesting a stop, or communicating special instructions, this tool streamlines the ride experience and enhances interaction, ensuring that every trip is Good to the customer's preferences.




                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="assets/images/client-2.png" alt="" class="img-1">
                    <img src="assets/images/client-2-white.png" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Darshit Thakkar
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                  

It is a feature in cab booking apps that allows passengers to use voice commands to convey their needs to drivers. This functionality enables riders to quickly share their destination, request specific routes, or highlight special requirements, making for a more seamless and personalized ride experience and relaxed tour and travel.
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="assets/images/client-1.png" alt="" class="img-1">
                    <img src="assets/images/client-1-white.png" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Jeel Dobariya
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                  I recently had the pleasure of using your luxury cab service, and I wanted to share my feedback.

Overall, my experience was fantastic! The cab was pristine and exuded a sense of elegance. The ride was smooth and comfortable, making my journey quite enjoyable. I also want to commend my driver for their professionalism.

                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="assets/images/client-1.png" alt="" class="img-1">
                    <img src="assets/images/client-1-white.png" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Bhavantu Vadoliya
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Request A call back
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form action="contact_insert.php" method="post" class="was-validated">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="name" placeholder="Name " name="name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" id="email" placeholder="Email id" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message" name="message" required>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="" name="submit">Send</button>
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
           Rajkot,Gujrat
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
  </section>

  <!-- end contact section -->

  <!-- map section -->



  <!-- end map section -->

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
<?php
} else {
  $_SESSION['error'] = "your are not authorize to access this page without login";
  header("location:register.php");
}
?>