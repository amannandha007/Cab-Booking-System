<?php
session_start();
if (isset($_SESSION['uname'])) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about us</title>

    <?php
    include_once('include/style.php');
    ?>
        <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>

  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

     

      <!-- Navbar -->
      <?php
      include_once('include/header.php');
      ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
      include_once('include/sidebar.php');
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">

                <h1 class="m-0">About Us</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="aboutus.php">About</a></li>
                  <li class="breadcrumb-item active">About Edit</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">About Edit</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <?php
                  include_once("../connection/connection.php");
                  $id = $_REQUEST['id'];
                  $qry = "select * from about_us where id=$id";
                  $result = mysqli_query($conn, $qry) or exit("about usselect fail" . mysqli_error($conn));
                  $row = mysqli_fetch_array($result);
                  ?>
                  <form action="aboutus_edit_db.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Slider Title</label>
                        <textarea name="atitle" class="form-control"
                        id="atitle"><?php echo $row['about_title']; ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Select Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">old images</label>
                        <input type="hidden" name="oldimages" value="<?php echo $row['image']; ?>">
                        <img src="images/about/<?php echo $row['image']; ?>" alt="" width="150px">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Slider Description</label>
                        <textarea name="adescription" class="form-control"
                          id="adescription"><?php echo $row['about_description']; ?></textarea>
                      </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                  <script>
                    CKEDITOR.replace('atitle');
                    CKEDITOR.replace('adescription');

                  </script>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php
      include_once('include/footer.php');
      ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
    include_once('include/script.php');
    ?>
  </body>

  </html>
  <?php
  if (isset($_SESSION['er'])) { ?>
    <script>alert("file upload successfully")</script>
    <?php
    unset($_SESSION['error']);
  }
?>
<?php
} else {
  $_SESSION['error'] = "your are not authorize to access this page without login";
  header("location:index.php");
}
?>