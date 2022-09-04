<?php
  include_once("../../config.php");
  include("../includes/connection.php");
  session_start();
  $_SESSION['name'] = "reports";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | Attendance Report</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.min.js" integrity="sha512-rsE25pK/XkI20cvXanU1xC7QcyDEaM2cdcVS53Y/1oSNfKv8uCA/2DagW1BX/cwR6u6Zq3/zY+L+3zoBvfgi5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <h1 class="m-0">Attendance Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Attendance Report</li>
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
                <p>Export all attendance list to excell</p>
                <a href="?export">
                  <button type="submit" class="btn btn-success">Export All To Excel</button>
                </a>
              <form action="" method="post">
              <?php
                if (isset($_POST["export"])) {
                    $coursename = $_POST['coursename'];
                    $unitname = $_POST['unitname'];
                    $semester = $_POST['semester'];
                    // include("../includes/connection.php");
                    $sql = "SELECT * FROM attendance WHERE coursename=? AND unitname=? AND semester=?";
                    $query = $pdo -> prepare($sql);
                    $query -> execute([$coursename,$unitname,$semester]);
                    $rows = $query -> rowCount();
                    if($rows > 0){
                        while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                          foreach($results as $result){
                            $items = array();
                            array_push($items,$result);
                          }
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
                    $fileName = "Attendance Report" . ".xls";
                
                    //Set header information to export data in excel format

                }
              ?>
                <p>Customize data exported to Excel</p>
                <div class="row">
                  <div class="form-group col">
                    <select name="coursename" id="coursename" class="form-control">
                      <?php
                        $sql = "SELECT coursename FROM attendance";
                        $query = $pdo -> prepare($sql);
                        $query -> execute();
                        $rows = $query -> rowCount();
                        if($rows > 0){
                          while($resulsts = $query -> fetchAll(PDO::FETCH_ASSOC)){
                            foreach($resulsts as $result){
                              echo ("<option value='{$result['coursename']}'>{$result['coursename']}</option>");
                            }
                          }
                        }else{
                          echo ("<option value=''>No Details</option>");
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col">
                    <select name="unitname" id="unitname" class="form-control">
                      <?php
                        $sql = "SELECT unitname FROM attendance";
                        $query = $pdo -> prepare($sql);
                        $query -> execute();
                        $rows = $query -> rowCount();
                        if($rows > 0){
                          while($resulsts = $query -> fetchAll(PDO::FETCH_ASSOC)){
                            foreach($resulsts as $result){
                              echo ("<option value='{$result['unitname']}'>{$result['unitname']}</option>");
                            }
                          }
                        }else{
                          echo ("<option value=''>No details</option>");
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col">
                    <select name="semester" id="semester" class="form-control">
                      <?php
                        $sql = "SELECT semester FROM attendance";
                        $query = $pdo -> prepare($sql);
                        $query -> execute();
                        $rows = $query -> rowCount();
                        if($rows > 0){
                          while($resulsts = $query -> fetchAll(PDO::FETCH_ASSOC)){
                            foreach($resulsts as $result){
                              echo ("<option value='{$result['semester']}'>{$result['semester']}</option>");
                            }
                          }
                        }else{
                          echo ("<option value=''>No details</option>");
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <button type="submit" name="export" class="btn btn-success">Export Excel</button>
              </form>
            </div>
          </div>
            <div class="card">
                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Adm No.</th>
                            <th>Lecturer</th>
                            <th>Coursename</th>
                            <th>Semester</th>
                            <th>Unitname</th>
                            <th>Starttime</th>
                            <th>Endtime</th>
                            <th>Day</th>
                            <th>Timesigned</th>
                            <th>Datesigned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM attendance";
                                $query = $pdo -> prepare($sql);
                                $query -> execute();
                                if($rows = $query -> rowCount() > 0){
                                    while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                                    foreach($results as $result){
                                ?>
                                    <tr>
                                        <td><?php echo $result['admno'] ?></td>
                                        <td><?php echo $result['teacher'] ?></td>
                                        <td><?php echo $result['coursename'] ?></td>
                                        <td><?php echo $result['semester'] ?></td>
                                        <td><?php echo $result['unitname'] ?></td>
                                        <td><?php echo $result['starttime'] ?></td>
                                        <td><?php echo $result['endtime'] ?></td>
                                        <td><?php echo $result['day'] ?></td>
                                        <td><?php echo $result['timesigned'] ?></td>
                                        <td><?php echo $result['datesigned'] ?></td>
                                    </tr>
                                <?php
                                    }
                                    }
                                }else{
                                    echo "<tr><td colspan='7'>No unit scheduled</td></tr>";
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
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->
    <?php
        include_once("../includes/footer.php");
    ?>
</div>

  <?php
  if (isset($_GET["export"])) {
      $sql = "SELECT * FROM attendance";
      $query = $pdo -> prepare($sql);
      $query -> execute();
      $rows = $query -> rowCount();
      if($rows > 0){
        //  $items = array();
          while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
            // foreach($results as $result){
            //   array_push($items,$result);
            // }
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
      $fileName = "Attendance Report" . ".xls";

      //Set header information to export data in excel format

  }
  ?>
<!-- ./wrapper -->
<style>
  .nicEdit-panelContain{
    color: #000 !important;
  }
</style>
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
<script src="../form_validations/js/index.js"></script>
</body>
</html>
