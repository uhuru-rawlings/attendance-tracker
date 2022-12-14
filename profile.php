<?php
  session_start();
  include_once("config.php");
  include("admin/includes/connection.php");
  $_SESSION['name'] = "teachers";

  if(isset($_SESSION['student_login'])){

  }else{
    header("Location: Auth/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | My Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="admin/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.min.js" integrity="sha512-rsE25pK/XkI20cvXanU1xC7QcyDEaM2cdcVS53Y/1oSNfKv8uCA/2DagW1BX/cwR6u6Zq3/zY+L+3zoBvfgi5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="css/user.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->

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
            <h1 class="m-0">My Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">My Profile</li>
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
                    <div class="row">
                      <div class="col col-md-6">
                        <div class="user_image_avataor">
                          <img src="images/user.png" width="100%" height="100%" alt="">
                        </div>
                      </div>
                      <div class="col col-md-6" id="userdetails">
                          <div class="details">
                            <?php
                                if(isset($_SESSION['student_login'])){
                                  $user = $_SESSION['student_login'];
                                  $sql = "SELECT * FROM students WHERE admno=?";
                                  $query = $pdo -> prepare($sql);
                                  $query -> execute([$user]);
                                  if($rows = $query -> rowCount() > 0){
                                    while($res = $query -> fetch(PDO::FETCH_ASSOC)){
                                      $fullname = $res['fname']. " ".$res['lname'];
                                      $email = $res['email'];
                                      $phone = $res['phone'];
                                      $course = $res['coursename'];
                                      $semester = $res['semester'];
                                      $admno = $res['admno'];
                                      echo "<li>Name: {$fullname}</li>";
                                      echo "<li>Email: {$email}</li>";
                                      echo "<li>Phone: {$phone}</li>";
                                      echo "<li>Course: {$course}</li>";
                                      echo "<li>Semester: {$semester}</li>";
                                      echo "<li>Adm No.: {$admno}</li>";
                                    }
                                  }else{
                                    header("Location: Auth/index.php");
                                  }
                                }else{
                                  header("Location: Auth/index.php");
                                }
                            ?>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <h4>My Units</h4>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Lecturer</th>
                            <th>Coursename</th>
                            <th>Semester</th>
                            <th>Unitname</th>
                            <th>Starttime</th>
                            <th>Endtime</th>
                            <th>Action</th>
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
                            <td><a href="attend.php?lesson=<?php echo $result['id']; ?>"><button class="btn btn-success">Attend</button></a></td>
                          </tr>
                          <?php
                                    }
                                  }
                                }else{
                                  echo "<tr><td colspan='7'>No unit scheduled</td></tr>";
                                }
                              }
                            }else{
                              header("Location: Auth/index.php");
                            }
                          }else{
                            header("Location: Auth/index.php");
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
        include_once("includes/footer.php");
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
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="admin/plugins/raphael/raphael.min.js"></script>
<script src="admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="admin/plugins/chart.js/Chart.min.js"></script>


<script src="admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/dist/js/pages/dashboard2.js"></script>
<script src="admin/form_validations/js/index.js"></script>
</body>
</html>
