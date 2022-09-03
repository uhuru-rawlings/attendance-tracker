<?php
    if(isset($_POST['signup'])){
        include("../includes/connection.php");
        $useremail = $_POST['useremail'];
        $staffid = $_POST['staffid'];
        $passwords = $_POST['passwords'];
                // check if user exist
        $sql = "SELECT * FROM registration WHERE username=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$staffid]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: signup.php?error=sorry user with these details already exist");
        }else{
            $new_user = "INSERT INTO registration(username,useremail,passwords) VALUES(?,?,?)";
            $execute = $pdo -> prepare($new_user);
            $password = password_hash($passwords, PASSWORD_DEFAULT);
            $execute -> execute([$staffid,$useremail,$password]);
            if($execute){
                header("Location: index.php");
            }else{
                header("Location: signup.php?error=sorry something went wrong, please try again");
            }
        }
    }else{

    }
?>