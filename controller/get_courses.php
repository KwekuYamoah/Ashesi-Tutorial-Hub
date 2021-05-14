<?php
require_once "../model/connect_db.php";
session_start();
    //functio to return json of courses
    function json_courses(){
        $db = connect_db();

        $sql = "SELECT vidTopic,vidUrl FROM video";
        $result = mysqli_query($db,$sql);
        // If result matched $myemail and $mypassword, table row must be 1 row
        $rows = array();
         
        while($row = mysqli_fetch_assoc($result)) {
            
            $rows[] = $row;
        }
        
        return json_encode($rows);
        
    }

    
?>

