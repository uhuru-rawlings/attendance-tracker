<?php
        if(isset($_GET['export'])){
            include("../includes/connection.php");
            $sql = "SELECT * FROM Orders";
            $query = mysqli_query($conn, $sql);
            $row_result = mysqli_num_rows($query);
            while($results = mysqli_fetch_array($query)){
                $itemsP[] = $results;
            }
            if ($row_result > 0) {
                //Define the filename with current date
                $fileName = "Sales Reports" . ".xls";
        
                //Set header information to export data in excel format
        
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename=' . $fileName);
                header("Cache-Control: max-age=0");
        
                //Set variable to false for heading
                $heading = false;
        
                //Add the MySQL table data to excel file
                if (!empty($itemsP)) {
                    foreach ($itemsP as $item) {
                        if (!$heading) {
                            echo implode("\t", array_keys($item)) . "\n";
                            $heading = true;
                        }
                        echo implode("\t", array_values($item)) . "\n";
                    }
                }
                
                exit();
                echo("<script>history.go(-1)</script>");
            }else{
                echo("<script>alert('System cannot export empty details.')</script>");
                echo("<script>history.go(-1)</script>");
            }
        }

?>




