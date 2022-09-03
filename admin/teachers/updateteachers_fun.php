<?php
    if(isset($_POST['updateteachers'])){
        include("../includes/connection.php");
        $id = $_POST['ids'];
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

        $sql = "SELECT * FROM teachers WHERE id=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$id]);
        $rows = $query -> rowCount();
        if($rows > 0){
            $new_staff  = "UPDATE teachers SET fname=?,sname=?,lname=?,gender=?,phone=?,email=?,adress=?,tribe=?,previous_school=?,staffid=? WHERE id=?";
            $execute = $pdo -> prepare($new_staff);
            $execute -> execute([$firstname,$secondname,$lastname,$gender,$phonenumber,$emailadress,$homeadress,$tribegroup,$prevschool,$staffid,$id]);
            if($execute){
                header("Location: manage-teachers.php?success=Staff details updated succesfully.&teacher={$id}");
            }else{
                header("Location: manage-teachers.php?error=something went wrong, please try again.&teacher={$id}"); 
            }
        }else{
            header("Location: manage-teachers.php?error=Staff with these do not exist.&teacher={$id}");            
        }
    }
?>