<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment</title>
  <!-- css -->
  <?php
  include("include/style.php");
  ?>
  <!-- css over -->
</head>
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
              <h1 class="m-0">Payment</h1>
              
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Payment </li>
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
                  <!-- <a href="Payment_add.php"><button class="btn btn-primary float-right">add new </button></a> -->

                  <!--  <button class="btn btn-primary">ADD NEW</button>-->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>payment_method</th>
                        <th>name_on_card</th>
                        <th>card_number</th>
                        <th>exp_month</th>
                        <th>exp_year</th>
                        <th>cvv</th>
                        <th>paypal_email</th>
                        <th>account_number</th>
                        <th>bank_name</th>
                        <th>Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once("../connection/connection.php");
                      $qry = "select * from payment";
                      $result = mysqli_query($conn, $qry) or exit("payment select fail" . mysqli_error($conn));
                      while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                          <th><?php echo $row['id']; ?></th>
                          <th><?php echo $row['payment_method']; ?></th>
                          <th><?php echo $row['name_on_card']; ?></th>
                          <th><?php echo $row['card_number']; ?></th>

                          <th><?php echo $row['exp_month']; ?></th>
                          <th><?php echo $row['exp_year']; ?></th>
                          <th><?php echo $row['cvv']; ?></th>
                          <th><?php echo $row['paypal_email']; ?></th>
                          <th><?php echo $row['account_number']; ?></th>
                          <th><?php echo $row['bank_name']; ?></th>

                          
                          <th>

                           
                          
                        <?php
                      }
                      ?>


                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>payment_method</th>
                        <th>name_on_card</th>
                        <th>card_number</th>
                        <th>exp_month</th>
                        <th>exp_year</th>
                        <th>cvv</th>
                        <th>paypal_email</th>
                        <th>account_number</th>
                        <th>bank_name</th>
                        <th>created_at</th>


                      </tr>
                    </tfoot>

                  </table>

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