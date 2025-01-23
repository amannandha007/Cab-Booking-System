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
            <div class="item">
              <div class="box">
                <div class="date-box">
                  <h6>
                    04 Nov 2019
                  </h6>
                </div>
                <div class="img-box">
                  <img src="images/b-1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Vintage
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
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
                  <img src="images/b-2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Steering wheels
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
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
                  <img src="images/b-3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Buick Car
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
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
                  <img src="images/b-2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Steering wheels
                  </h5>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable The point of using Lorem </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="blog_section layout_padding">
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
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end blog section -->

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