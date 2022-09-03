<?php
    session_start();
    if(isset($_POST['login'])){
        include("../admin/includes/connection.php");
        $admissionnumber = $_POST['admissionnumber'];
        $passwords = $_POST['passwords'];

        $sql = "SELECT * FROM students WHERE admno=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$admissionnumber]);
        $rows = $query -> rowCount();
        if($rows > 0){
            while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                $status = $results['password_reset'];
                $password = $results['passwords'];
                if($status == "Updated"){
                    $pass_check = password_verify($passwords,$password);
                    if($pass_check){
                        $_SESSION['student_login'] = $admissionnumber;
                        header("Location: ../index.php");
                    }else{
                        header("Location: index.php?error=sorry wrong password, please try again.");
                    }
                }else{
                    $_SESSION['reset'] = $admissionnumber;
                    header("Location: reset_password.php");
                }
            }
        }else{
            header("Location: index.php?error=User with these details do not exist.");
        }
    }
?>