<?php
    if(isset($_POST['addstudents'])){
        include("../includes/connection.php");
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
        $coursename = $_POST['coursename'];
        $password = password_hash("student123",PASSWORD_DEFAULT);

        $sql = "SELECT * FROM students WHERE admno=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$admno]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: addteachers.php?error=Student with these details already exist.");
        }else{
            $new_staff  = "INSERT INTO teachers(fname,sname,lname,dob,gender,phone,email,adress,tribe,semester,admno,coursename) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $execute = $pdo -> prepare($new_staff);
            $execute -> execute([$firstname,$secondname,$lastname,$dateofbirth,$gender,$phonenumber,$emailadress,$homeadress,$tribegroup,$semester,$admno,$coursename,$password]);
            if($execute){
                header("Location: addstudents.php?success=Student details saved succesfully.");
            }else{
                header("Location: addstudents.php?error=something went wrong, please try again."); 
            }
        }
    }
?>