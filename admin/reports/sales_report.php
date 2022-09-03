<?php
  include_once("../../config.php");
  include("../includes/connection.php");
  include("excel.php");
  session_start();
  $_SESSION['name'] = "reports";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | Reports</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->

  <!-- Navbar -->
    <?php
        include_once("../includes/top_nav.php");
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <a href="../index.php" class="brand-link">
            <img src="../dist/img/vooc.png" alt="A.M.S Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">A.M.S</span>
        </a>
        <?php
            include_once("../includes/side_nav.php");
        ?>
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="expot_to_excell">
                <a href="?export">
                    <button type="submit" id="export" name="export" value="Export to excel" class="btn btn-success">Export To Excel</button>
                </a>
              </div>
              <?php
                  if (isset($_GET["export"])) {
                      include("../includes/connection.php");
                      $sql = "SELECT * FROM Orders";
                      $query = mysqli_query($conn, $sql);
                      $rows = mysqli_num_rows($query);
                      if($rows > 0){
                          while($results = mysqli_fetch_array($query)){
                              $items[] = $results;
                          }
                          header('Content-Type: application/vnd.ms-excel');
                          header('Content-Disposition: attachment;filename=' . $fileName);
                          header("Cache-Control: max-age=0");
                      
                          //Set variable to false for heading
                          $heading = false;
                          //Add the MySQL table data to excel file
                          if (!empty($items)) {
                              foreach ($items as $item) {
                                  if (!$heading) {
                                      echo implode("\t", array_keys($item)) . "\n";
                                      $heading = true;
                                  }
                                  echo implode("\t", array_values($item)) . "\n";
                              }
                          }
                          exit();
                      }
                      //Define the filename with current date
                      $fileName = "Sales Report" . ".xls";
                  
                      //Set header information to export data in excel format

                  }
              ?>
            <table id="example" class="table table-hover">
                      <thead>
                        <tr>
                          <th>Client</th>
                          <th>Contact</th>
                          <th>Name</th>
                          <th>Quantity</th>
                          <th>Order Id</th>
                          <th>Delivery</th>
                          <th>Payment</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $sql  = "SELECT * FROM Orders";
                          $query = mysqli_query($conn, $sql);
                          $rows = mysqli_num_rows($query);
                          if($rows > 0){
                            while($results = mysqli_fetch_array($query)){
                        ?>
                        <tr style='font-size: 14px;'>
                          <td><?php echo $results['Client'] ?></td>
                          <td><?php echo $results['Phone_number'] ?></td>
                          <td><?php echo $results['item_name'] ?></td>
                          <td><?php echo $results['Quantity'] ?></td>
                          <td><?php echo $results['order_id'] ?></td>
                          <td>
                            <?php 
                                if($results['Delivery_status'] == "Not delivered"){
                                  echo "<button style='font-size: 14px;' class='btn btn-info'>".$results['Delivery_status']."</button>";
                                }else{
                                  echo "<button style='font-size: 14px;' class='btn btn-success'>".$results['Delivery_status']."</button>";
                                }
                            ?>
                          </td>
                          <td><?php echo $results['Payment_status'] ?></td>
                          <td><?php echo $results['Date_added'] ?></td>
                        </tr>
                        <?php
                            }
                          }else{
                        ?>
                        <tr>
                          <td colspan="8" class="text-center">No Current orders</td>
                        </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                  </table>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
    <?php
        include_once("../includes/footer.php");
    ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="../plugins/chart.js/Chart.min.js"></script>


<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
