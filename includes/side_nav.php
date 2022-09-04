<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?php echo BASE_URL .'index.php' ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "profile"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                Profile
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'profile.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Details</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'listattendance.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Attendance</p>
                </a>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->