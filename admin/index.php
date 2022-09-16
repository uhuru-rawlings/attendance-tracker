<?php
  session_start();
  include_once("../config.php");
  include("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="css/main.d810cf0ae7f39f28f336.css"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo BASE_URL . 'dist/img/vooc.png' ?>" alt="A.M.S Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
    <?php
        include_once("includes/top_nav.php");
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <span class="brand-text font-weight-light">A.M.S</span>
        </a>
        <?php
            include_once("includes/side_nav.php");
        ?>
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Attendance</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * FROM attendance";
                    $query = $pdo -> prepare($sql);
                    $query -> execute();
                    $rows = $query -> rowCount();
                    echo $rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * FROM students";
                    $query = $pdo -> prepare($sql);
                    $query -> execute();
                    $rows = $query -> rowCount();
                    echo $rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lessons</span>
                <span class="info-box-number">
                <?php
                    $sql = "SELECT * FROM timetable";
                    $query = $pdo -> prepare($sql);
                    $query -> execute();
                    $rows = $query -> rowCount();
                    echo $rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-chalkboard-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lectures</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * FROM teachers";
                    $query = $pdo -> prepare($sql);
                    $query -> execute();
                    $rows = $query -> rowCount();
                    echo $rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                  <h4>Current Lessons</h4>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Lecturer</th>
                          <th>Coursename</th>
                          <th>Semester</th>
                          <th>Unitname</th>
                          <th>Starttime</th>
                          <th>Endtime</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(isset($_SESSION['student_login'])){
                          $user = $_SESSION['student_login'];
                          $sql = "SELECT * FROM students WHERE admno=?";
                          $query = $pdo -> prepare($sql);
                          $query -> execute([$user]);
                          if($rows = $query -> rowCount() > 0){
                            while($res = $query -> fetch(PDO::FETCH_ASSOC)){
                              $course = $res['coursename'];
                              $semester = $res['semester'];
                              $sql = "SELECT * FROM timetable WHERE coursename=? AND semster=?";
                              $query = $pdo -> prepare($sql);
                              $query -> execute([$course,$semester]);
                              if($rows = $query -> rowCount() > 0){
                                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                                  foreach($results as $result){
                        ?>
                        <tr>
                          <td><?php echo $result['teacher'] ?></td>
                          <td><?php echo $result['coursename'] ?></td>
                          <td><?php echo $result['semster'] ?></td>
                          <td><?php echo $result['unitname'] ?></td>
                          <td><?php echo $result['starttime'] ?></td>
                          <td><?php echo $result['endtime'] ?></td>
                        </tr>
                        <?php
                                  }
                                }
                              }else{
                                echo "<tr><td colspan='7'>No unit scheduled</td></tr>";
                              }
                            }
                          }else{
                            // header("Location: Auth/index.php");
                          }
                        }else{
                          // header("Location: Auth/index.php");
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
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
        include_once("includes/footer.php");
    ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="css/main.d810cf0ae7f39f28f336.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>


<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
<style>
  .contacts-list-msg {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* number of lines to show */
      -webkit-box-orient: vertical;
    }
</style>
</html>
