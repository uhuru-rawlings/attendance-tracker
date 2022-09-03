<?php
    if(isset($_POST['addteachers'])){
        include("../includes/connection.php");
        $firstname = $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $phonenumber = $_POST['phonenumber'];
        $emailadress = $_POST['emailadress'];
        $homeadress = $_POST['homeadress'];
        $tribegroup = $_POST['tribegroup'];
        $prevschool = $_POST['prevschool'];
        $staffid = $_POST['staffid'];

        $sql = "SELECT * FROM teachers WHERE staffid=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$staffid]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: addteachers.php?error=Staff with these details already exist.");
        }else{
            $new_staff  = "INSERT INTO teachers(fname,sname,lname,gender,phone,email,adress,tribe,previous_school,staffid) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $execute = $pdo -> prepare($new_staff);
            $execute -> execute([$firstname,$secondname,$lastname,$gender,$phonenumber,$emailadress,$homeadress,$tribegroup,$prevschool,$staffid]);
            if($execute){
                header("Location: addteachers.php?success=Staff details saved succesfully.");
            }else{
                header("Location: addteachers.php?error=something went wrong, please try again."); 
            }
        }
    }
?>