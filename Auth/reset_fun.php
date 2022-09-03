<?php
    session_start();
    if(isset($_POST['resetpassword'])){
        include("../admin/includes/connection.php");
        $passwords = $_POST['passwords'];
        $user = $_SESSION['reset'];
        $status = "Updated";
        $password = password_hash($passwords, PASSWORD_DEFAULT);

        $sql = "UPDATE students SET passwords=?, password_reset=? WHERE admno=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$password,$status,$user]);
        if($query){
            $_SESSION['student_login'] = $user;
            header("Location: ../index.php");
        }else{
            header("Location: reset_password.php?error=sorry something went wrong, try again");
        }
    }
?>