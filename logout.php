<?php
    session_start();
    if(isset($_SESSION['student_login'])){
        unset($_SESSION['student_login']);
        header("Location: index.php");
    }
?>