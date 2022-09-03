<?php
  include_once("../../config.php");
  include("../includes/connection.php");
  session_start();
  $_SESSION['name'] = "units";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | Upload Unit</title>

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
            <h1 class="m-0">Upload Unit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Upload Unit</li>
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
                    <h5>Add Courses</h5>
                    <form action="addcourse_fun.php" method="post">
                        <?php
                            if(isset($_GET['error'])){
                                echo "<p class='text-danger'>".$_GET['error']."</p>";
                            }else if($_GET['success']){
                                echo "<p class='text-success'>".$_GET['success']."</p>";
                            }
                        ?>
                       <div class="row">
                            <div class="form-group col">
                                <label for="coursename">Course</label>
                                <input type="text" name="coursename" id="coursename" class="form-control" placeholder="Course">
                            </div>
                            <div class="form-group col">
                                <label for="abreviation">Course</label>
                                <input type="text" name="abreviation" id="abreviation" class="form-control" placeholder="Abreviation">
                            </div>
                       </div>
                        <div class="form-group">
                            <input type="submit" name="addstudents" value="Save Details" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Add Units</h5>
                    <form action="addstudents_fun.php" method="post">
                        <?php
                            if(isset($_GET['error'])){
                                echo "<p class='text-danger'>".$_GET['error']."</p>";
                            }else if($_GET['success']){
                                echo "<p class='text-success'>".$_GET['success']."</p>";
                            }
                        ?>
                       <div class="row">
                            <div class="form-group col">
                                <label for="coursename">Course</label>
                                <select name="coursename" class="form-control" id="coursename"></select>
                            </div>
                            <div class="form-group col">
                                <label for="abreviation">Unit Name</label>
                                <input type="text" name="unitname" id="unitname" class="form-control" placeholder="Unit name">
                            </div>
                            <div class="form-group col">
                                <label for="unitabreviation">Abreviation</label>
                                <input type="text" name="unitabreviation" id="unitabreviation" class="form-control" placeholder="Abreviation">
                            </div>
                       </div>
                        <div class="form-group">
                            <input type="submit" name="addstudents" value="Save Details" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
 
//  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
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
