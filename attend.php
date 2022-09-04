<?php
    if(isset($_GET['lesson'])){
        include("admin/includes/connection.php");
        $time1 = date('h:m:s');
        $time2 = date('h:m:s',strtotime("+2 hours"));
        $tday = date('l');
        $id = $_GET['lesson'];
        $user = $_SESSION[''];
        
        $sql = "SELECT * FROM timetable WHERE id=?";
        $query = $pdo -> prepare($sql);
        $query -> execute([$id]);
        if($rows = $query -> rowCount() > 0){
          while($results = $query -> fetch(PDO::FETCH_ASSOC)){
            $teacher =$results['teacher'];
            $coursename =$results['coursename'];
            $unitname =$results['unitname'];
            $semester =$results['semster'];
            $starttime =$results['starttime'];
            $endtime =$results['endtime'];
            $day =$results['day'];
            if(($time1 > $starttime) && ($time1 < $endtime)  && $tday == $day){
                $sql = "INSERT INTO attendance(admno,teacher,coursename,unitname,semester,starttime,endtime,day,timesigned,) VALUES(?,?,?,?,?,?,?,?,?)";
                $query = $pdo -> prepare($sql);
                $query -> execute([$user,$teacher,$coursename,$unitname,$semester,$starttime,$endtime,$day,$time1]);
                if($query){
                    echo "<script>alert('Attendance signed succesfully.')</script>";
                    echo "<script>history.go(-1)</script>";
                }else{
                    echo "<script>alert('Something went wrong, attendance not signed, please contact your system admin.')</script>";
                    echo "<script>history.go(-1)</script>";
                }
            }else{
               echo "<script>alert('Signing attendance failed, time has elapse')</script>";
               echo "<script>history.go(-1)</script>";
            }
          }
        }else{
          echo "<tr><td colspan='7'>No unit scheduled</td></tr>";
        }
    }
?>