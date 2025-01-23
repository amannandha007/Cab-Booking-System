<?php
session_start();
if (isset($_SESSION['uname'])) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add subSub category | Dashboard</title>

    <?php
    include_once('include/style.php');
    ?>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

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

                <h1 class="m-0">Sub Categories</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="subcategory.php">Sub category</a></li>
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
                    <h3 class="card-title">Sub Category ADD</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <?php
                  include_once("../connection/connection.php");
                  $qry = "select * from categories order by id asc";
                  $result = mysqli_query($conn, $qry) or exit("category select fail" . mysqli_error($conn));
                  ?>
                  <form action="subcategory_add_db.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Category Name</label>
                        <select name="catid" id="catid" class="form-control">
                          <option value="" selected disabled>select category</option>
                          <?php
                          while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['cname'] ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sub Category Name</label>
                        <input type="text" class="form-control" id="subcname" name="subcname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Sub Category description</label>
                        <textarea name="subcatdescription" class="form-control" id="subcatdescription"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" name="price" class="form-control" id="price" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">select image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>

                        </div>
                      </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">ADD</button>
                    </div>
                  </form>
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
  if (isset($_SESSION['add1'])) { ?>
    <script>alert("Sub Category Upload Failed")</script>
    <?php
    unset($_SESSION['add1']);
  }
  ?>
  <?php
  if (isset($_SESSION['upd'])) { ?>
    <script>alert("Sub Category Updated Failed")</script>
    <?php
    unset($_SESSION['upd']);
  }
  ?>
  <?php
  if (isset($_SESSION['upd1'])) { ?>
    <script>alert("Sub Category Updated Sucessfully")</script>
    <?php
    unset($_SESSION['upd1']);
  }
?>
<?php
} else {
  $_SESSION['error'] = "your are not authorize to access this page without login";
  header("location:index.php");
}
?>