<?php
    include("includes/connection.php");
    $sql = "SELECT * FROM Orders ORDER BY id DESC LIMIT 10";
    $query = mysqli_query($conn, $sql);
    if($rows = mysqli_num_rows($query)){
        $all;
        while($res = mysqli_fetch_array($query)){
            $all .= ",".$res['price'];
            echo($all);
        }
    }
?>