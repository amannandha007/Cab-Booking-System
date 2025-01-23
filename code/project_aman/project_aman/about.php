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

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom ">
    <div class="container-fluid">
      <div class="row">
        <?php
        $qry = "SELECT * FROM about_us";
        $re = mysqli_query($conn, $qry);
        foreach ($re as $row)
          if ($row['status'] == 1) { { ?>
              <div class="col-md-7 px-0">
                <div class="img-box">
                  <img src="admin/images/about/<?php echo $row['image'] ?>" alt="" style="height:400px; width:650px">
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                <div class="detail-box">
                <h2><?php echo $row['about_title'] ?></h2>
              
                <p ><?php echo $row['about_description']?></p>
                  <a href="">
                    Read More
                  </a>
                </div>
              <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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