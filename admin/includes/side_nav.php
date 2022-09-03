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
                <i class="nav-icon fas fa-copy"></i>
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
        <li class="nav-item <?php if($_SESSION['name'] == "ridders"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                Students
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/ridders/addriders.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Add Riders</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/ridders/updateriders.php' ?>" class="nav-link">
                    <i class="fa-solid fa-plus nav-icon"></i>
                    <p>Manage Riders</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/ridders/listriders.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Riders</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "users"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                Units
                <i class="right fas fa-angle-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/users/listadmins.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Admin</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/users/listusers.php' ?>" class="nav-link">
                    <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Users</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/users/addadmins.php' ?>" class="nav-link">
                    <i class="fa-solid fa-user-check nav-icon"></i>
                    <p>Admin</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item <?php if($_SESSION['name'] == "orders"){ echo("menu-open"); } ?>">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-basket-shopping nav-icon"></i>
                <p>
                Attendance
                <i class="fas fa-angle-right right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/orders/listorders.php' ?>" class="nav-link">
                <i class="fa-solid fa-list nav-icon"></i>
                    <p>List Orders</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL .'admin/orders/payments.php' ?>" class="nav-link">
                <i class="fa-solid fa-dollar nav-icon"></i>
                    <p>Payments</p>
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
                <a href="<?php echo BASE_URL .'admin/reports/sales_report.php' ?>" class="nav-link">
                    <i class="fa-solid fa-file-excel"></i>
                    <p>Attendance Report</p>
                </a>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->