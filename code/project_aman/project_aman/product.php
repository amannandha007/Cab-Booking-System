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

  <title>Namaste Cab</title>

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
        $qry = "SELECT * FROM subcategories";
        $re = mysqli_query($conn, $qry);
        foreach ($re as $row)
          if ($row['status'] == 1) { { ?>
              <div class="box">
                <div class="img-box">
                <img src="admin/images/subcategories/<?php echo $row['image'] ?>" />
                </div>
                <div class="detail-box">
                <h5><?php echo $row['subcname'] ?></h5>
                <p><?php echo $row['subcatdescription'] ?></p>
                  <a href="cabbook.php?id=<?php echo $row['id'];?>">
                     BOOK NOW
                  </a>
                </div>
             
        </div>
       
        <!-- <div class="box">
          <div class="img-box">
            <img src="assets/images/c-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Get Your Car
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/c-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Contact Your Dealer
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div> -->
        <?php }
          } ?>
      </div>
      
    </div>
  </section>

  <!-- end car section -->


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
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end best section -->

  <!-- rent section -->

  

  <!-- end rent section -->

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