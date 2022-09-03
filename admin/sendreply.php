<?php
    include("includes/connection.php");
    if(isset($_POST['reply'])){
        $current_contact = mysqli_real_escape_string($conn, $_POST['current_contact']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $status = "Replied";
        // echo $current_contact;
        $sql = "UPDATE contactus SET reply='".$message."',status='".$status."' WHERE id='".$current_contact."'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: index.php");
        }else{
            header("Location: index.php");
        }
    }
?>