<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "attendance";
    if($_SERVER['HTTP_HOST'] == "127.0.0.1" || $_SERVER['HTTP_HOST'] == "localhost"){
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "attendance";

    }

    $conn = "mysql:host=".$db_host.";dbname=".$db_name;
    $pdo = new PDO($conn,$db_user,$db_password);
    if($pdo){
    }else{
        echo("<script>alert('could not establish connection to the server, please contact your database administrator.')</script>");
    }
