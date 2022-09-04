<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?php echo BASE_URL .'admin/index.php' ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "teachers"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-chalkboard-user"></i>
                <p>
                Teachers
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/teachers/addteachers.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Add Teachers</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/teachers/manage-teachers.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Manage Teachers</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/teachers/listteachers.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Teachers</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "students"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-user"></i>
                <p>
                Students
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/students/addstudents.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Add Students</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/students/managestudents.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Manage Students</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/students/liststudents.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Students</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "units"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Units
                <i class="right fas fa-angle-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/units/uploadunits.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>Upload Units</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/units/listunits.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Units</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/units/timttableunits.php' ?>" class="nav-link">
                    <i class="fa-solid fa-user-check nav-icon"></i>
                    <p>Timetable</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "reports"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-chart-line"></i>
                <p>
                Reports
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/reports/attendance_report.php' ?>" class="nav-link">
                    <i class="fa-solid fa-file-excel"></i>
                    <p>Attendance Report</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "reports"){ echo("menu-open"); } ?>">
            <a href="<?php echo BASE_URL.'admin/logout.php'?>" class="nav-link">
                <i class="fa-solid fa-chart-line"></i>
                <p>
                Logout
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->