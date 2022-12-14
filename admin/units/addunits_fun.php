<?php
    if(isset($_POST['addunit'])){
        include("../includes/connection.php");
        $coursename = strtolower($_POST['coursename']);
        $unitname = strtolower($_POST['unitname']);
        $unitabreviation = strtoupper($_POST['unitabreviation']);


        $sql = "SELECT * FROM units WHERE coursename=? AND unitname=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$coursename,$unitname]);
        $rows = $query -> rowCount();
        if($rows > 0){
            header("Location: uploadunits.php?unitserror=Sorry these details already exist.");
        }else{
            $sql = "INSERT INTO units(coursename,unitname,abreviation)VALUES(?,?,?)";
            $query = $pdo -> prepare($sql);
            $query -> execute([$coursename,$unitname,$unitabreviation]);
            if($query){
                header("Location: uploadunits.php?unitssuccess=Course succesfylly added.");
            }else{
                header("Location: uploadunits.php?unitserror=Sorry something went wrong, course not added.");
            }
        }
    }
?>