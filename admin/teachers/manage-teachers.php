<?php
  include_once("../../config.php");
  include("../includes/connection.php");
  session_start();
  $_SESSION['name'] = "teachers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.M.S | Update Teachers</title>

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
            <h1 class="m-0">Update Teachers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Update Teachers</li>
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
                    <?php
                      if(isset($_GET['teacher'])){
                        $id = $_GET['teacher'];
                        $sql = "SELECT * FROM teachers WHERE id=?";
                        $query = $pdo -> prepare($sql);
                        $query -> execute([$id]);
                        $rows = $query -> rowCount();
                        if($rows > 0){
                          while($res = $query -> fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <form action="updateteachers_fun.php" method="post">
                        <?php
                            if(isset($_GET['error'])){
                                echo "<p class='text-danger'>".$_GET['error']."</p>";
                            }else if($_GET['success']){
                                echo "<p class='text-success'>".$_GET['success']."</p>";
                            }
                        ?>
                        <div class="form-group" style="display: none;">
                            <label for="firstname">Id</label>
                            <input type="text" value="<?php echo $res['id'] ?>" name="ids" id="ids" class="form-control" placeholder="Firstname">
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="firstname">Firstname</label>
                                <input type="text" value="<?php echo $res['fname'] ?>" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="form-group col">
                                <label for="secondname">Secondname</label>
                                <input type="text" value="<?php echo $res['sname'] ?>" name="secondname" id="secondname" class="form-control" placeholder="Secondname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="lastname">Lastname</label>
                                <input type="text" value="<?php echo $res['lname'] ?>" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
                            </div>
                            <div class="form-group col">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option <?php if($res['gender'] == "Male"){ echo "selected"; } ?> value="Male">Male</option>
                                    <option <?php if($res['gender'] == "Female"){ echo "selected"; } ?> value="Female">Female</option>
                                    <option <?php if($res['gender'] == "Other"){ echo "selected"; } ?> value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="phonenumber">Phone</label>
                                <input type="tel" value="<?php echo $res['phone'] ?>" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phonenumber">
                            </div>
                            <div class="form-group col">
                                <label for="emailadress">Email</label>
                                <input type="email" value="<?php echo $res['email'] ?>" name="emailadress" id="emailadress" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="homeadress">Adress</label>
                                <input type="text" value="<?php echo $res['adress'] ?>" name="homeadress" id="homeadress" class="form-control" placeholder="Adress">
                            </div>
                            <div class="form-group col">
                                <label for="tribegroup">Tribe</label>
                                <input type="text" value="<?php echo $res['tribe'] ?>" name="tribegroup" id="tribegroup" class="form-control" placeholder="Tribe">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="prevschool">Previous School</label>
                                <input type="text" value="<?php echo $res['previous_school'] ?>" name="prevschool" id="prevschool" class="form-control" placeholder="Previous School">
                            </div>
                            <div class="form-group col">
                                <label for="staffid">Staff Id</label>
                                <input type="text" name="staffid" value="<?php echo $res['staffid'] ?>" id="staffid" class="form-control" placeholder="StaffId">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="updateteachers" value="Update Details" class="btn btn-primary">
                        </div>
                    </form>
                    <?php
                          }
                        }else{
                          header("Location: listteachers.php");
                        }
                      }
                    ?>
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
