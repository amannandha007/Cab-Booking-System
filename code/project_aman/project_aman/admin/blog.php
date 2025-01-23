<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blogs</title>
  <!-- css -->
  <?php
  include("include/style.php");
  ?>
  <!-- css over -->
</head>
<script src="editor/ckeditor.js"></script>
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

   

    <!-- Navbar -->
    <?php
    include("include/header.php");
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include("include/sidebar.php");
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Blogs </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">blogs</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                  <a href="blog_add.php"><button class="btn btn-primary float-right">add new </button></a>

                  <!--  <button class="btn btn-primary">ADD NEW</button>-->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Last Update</th>
                        <th>Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once("../connection/connection.php");
                      $qry = "select * from blog";
                      $result = mysqli_query($conn, $qry) or exit("blog us select fail" . mysqli_error($conn));
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                          <th><?php echo $row['id']; ?></th>              
                         <th><?php echo $row['date']; ?></th>
                        <th><?php echo $row['title']; ?></th>
                          <th><img src="images/blog/<?php echo $row['image']; ?>" alt="" width="150px"></th>
                          <th>
                            <?php
                            if ($row['status'] == 1) {
                              echo '<p><a href="blog_activestatus.php?id=' . $row['id'] . '&status=0" class="btn btn-success">Active</a></p>';
                            } else {
                              echo '<p><a href="blog_activestatus.php?id=' . $row['id'] . '&status=1" class="btn btn-danger">InActive</a></p>';

                            }

                            ?>
                          </th>
                          <th>

                            <?php
                            $date = $row['last_update'];
                            echo date("d-m-y H:i:s", strtotime($date)); ?>
                          </th>
                          <td>
                            <a href="blog_delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>
                            <a href="blog_edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>


                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Last Update</th>
                        <th>Action</th>



                      </tr>
                    </tfoot>

                  </table>
                  <!-- <a href="product_add.php" class="btn btn-secondary mt-3" name="product_add">Add</a>   -->
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php
  include("include/script.php");
  ?>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>