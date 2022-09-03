<?php
    if(isset($_POST['updatestudents'])){
        include("../includes/connection.php");
        $id = $_POST['ids'];
        $firstname = $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $phonenumber = $_POST['phonenumber'];
        $emailadress = $_POST['emailadress'];
        $homeadress = $_POST['homeadress'];
        $tribegroup = $_POST['tribegroup'];
        $semester = $_POST['semester'];
        $admno = $_POST['staffid'];
        $coursename = strtolower($_POST['coursename']);
        $password = password_hash("student123",PASSWORD_DEFAULT);
        $sql = "SELECT * FROM students WHERE id=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$id]);
        $rows = $query -> rowCount();
        if($rows > 0){
            $new_staff  = "UPDATE students SET fname=?,sname=?,lname=?,dob=?,gender=?,phone=?,email=?,adress=?,tribe=?,semester=?,admno=?,coursename=?,passwords=? WHERE id=?";
            $execute = $pdo -> prepare($new_staff);
            $execute -> execute([$firstname,$secondname,$lastname,$dateofbirth,$gender,$phonenumber,$emailadress,$homeadress,$tribegroup,$semester,$admno,$coursename,$password,$id]);
            if($execute){
                header("Location: managestudents.php?success=Student details updated succesfully.&student={$id}");
            }else{
                header("Location: managestudents.php?error=something went wrong, please try again.&student={$id}"); 
            }
        }else{
            header("Location: managestudents.php?error=Student with these do not exist.&student={$id}");            
        }
    }
?>