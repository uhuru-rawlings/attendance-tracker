<?php
    session_start();
    include("../includes/connection.php");
    if(isset($_POST['login'])){
        $useremail = $_POST['useremail'];
        $passwords = $_POST['passwords'];
        
        $sql = "SELECT * FROM registration WHERE username=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$useremail]);
        $rows = $query -> rowCount();
        if($rows > 0){
            while($res = $query -> fetch(PDO::FETCH_ASSOC)){
                $password = $res['passwords'];
                if(password_verify($passwords,$password)){
                    $_SESSION['adminuser'] = $useremail;
                    header("Location: ../index.php");
                }
            }
        }else{
            header("Location: index.php?error=sorry user with these details do not exist.");
        }
    }
?>