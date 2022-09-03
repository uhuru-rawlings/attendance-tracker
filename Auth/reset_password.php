<?php
    session_start();
    if(isset($_SESSION['reset'])){

    }else{
        header("Location: index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/authentication.css">
    <link rel="stylesheet" href="../css/students.css">
    <title>A.M.S | Login</title>
</head>
<body>
    <div class="shadow_login_sections">
        <div class="login_sections">
            <h3>Attendance Management System</h3>
            <p>First time login in, please reset password to proceed.</p>
            <form action="reset_fun.php" method="post">
                <?php
                    if(isset($_GET['error'])){
                        echo "<p class='text-danger'>".$_GET['error']."</p>";
                    }
                ?>
                <div class="form-group">
                    <label for="passwords">New Password</label>
                    <input type="password" name="passwords" id="passwords" class="form-control shadow-none" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label for="passwords">Confirm Password</label>
                    <input type="password" name="passwords" id="passwords" class="form-control shadow-none" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input type="submit" name="resetpassword" id="login" class="btn btn-primary w-100" value="Reset Password">
                </div>
            </form>
        </div>
    </div>
</body>
</html>