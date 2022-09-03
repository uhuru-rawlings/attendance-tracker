<?php
    if(isset($_POST['addcourse'])){
        include("../includes/connection.php");
        $coursename = strtolower($_POST['coursename']);
        $abreviation = strtoupper($_POST['abreviation']);

        $sql = "SELECT * FROM courses WHERE coursename=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$coursename]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: uploadunits.php?courseerror=Sorry these details already exist.");
        }else{
            $new_course = "INSERT INTO courses(coursename,abreviation) VALUES(?,?)";
            $execute = $pdo -> prepare($new_course);
            $execute -> execute([$coursename,$abreviation]);
            if($execute){
                header("Location: uploadunits.php?coursesuccess=Course succesfylly added.");
            }else{
                header("Location: uploadunits.php?courseerror=Sorry something went wrong, course not added.");
            }
        }
    }
?>
