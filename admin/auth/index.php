<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/authentication.css">
    <title>A.M.S | ADMIN | LOGIN</title>
</head>
<body>
    <div class="login_section">
        <div class="title">
        <h3 class="text-center">Attendance Management System</h3>
            <p class="text-center">Please fill in all the details and let's log you in.</p>
            <form autocomplete="off" action="login_fun.php" method="post">
                <?php
                    if(isset($_GET['error'])){
                        echo("<div class='text-danger text-center'>".$_GET['error']."</div>");
                    }
                ?>
                <div class="form-group">
                    <label for="useremail">Staff Id</label>
                    <input type="text" name="useremail" oninput="removeError(this.id)" id="useremail" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwords">Password</label>
                    <input type="password" name="passwords" oninput="removeError(this.id)" id="passwords" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" onclick="return validateEmail()" value="Continue" class="btn btn-primary w-100 shadow-none" name="sendemail">
                </div>
                <div class="form-group">
                    <a href="signup.php">Dont have account?</a>
                </div>
            </form>
            <p class="text-center text-small" id="text-small">Terms and conditions apply copyright &copy; ecommerce <span id="years"></span></p>
        </div>
    </div>
</body>
<script src="../form_validations/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a9545f17e8.js" crossorigin="anonymous"></script>
</html>