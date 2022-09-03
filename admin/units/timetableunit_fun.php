<?php
    if(isset($_POST['titmtable'])){
        include("../includes/connection.php");
        $teacher = $_POST['teacher'];
        $coursename = $_POST['coursename'];
        $unitname = $_POST['unitname'];
        $semester = $_POST['semester'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];

        $sql = "SELECT * FROM timetable WHERE semster=? AND starttime=? AND endtime=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$semester,$starttime,$endtime]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: timttableunits.php?error=There is a lesson scheduled for this time.");
        }else{
            $sql = "INSERT INTO timetable(teacher,coursename,unitname,semster,starttime,endtime) VALUES(?,?,?,?,?,?)";
            $query = $pdo -> prepare($sql);
            $query -> execute([$teacher,$coursename,$unitname,$semester,$starttime,$endtime]);
            if($query){
                header("Location: timttableunits.php?success=unit succesfully timetabled");
            }else{
                header("Location: timttableunits.php?error=sorry something went wrong, unit not timetabled.");
            }
        }
    }
?>