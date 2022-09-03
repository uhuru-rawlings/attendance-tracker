<?php
    if(isset($_GET['unit'])){
        include("../includes/connection.php");
        $id = $_GET['unit'];
        $sql = "DELETE FROM units WHERE id=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$id]);
        if($query){
            echo "<script>alert('record deleted succesfully.')</script>";
            echo "<script>history.go(-1)</script>";
        }else{
            echo "<script>alert('something went wrong, record not deleted.')</script>";
            echo "<script>history.go(-1)</script>";
        }
    }
?>