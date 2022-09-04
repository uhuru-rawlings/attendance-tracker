<?php
    session_start();
    if(isset($_SESSION['adminuser'])){
        unset($_SESSION['adminuser']);
        header("Location: index.php");
    }
?>