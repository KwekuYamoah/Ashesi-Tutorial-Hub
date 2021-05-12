<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db
    if( $_POST['f-name'] !=""){
        $fname = isset($_POST['f-name']) ? $_POST['f-name'] : "";
        $mname = isset($_POST['m-name']) ? $_POST['m-name'] : "";
        $lname = isset($_POST['l-name']) ? $_POST['l-name'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $address = isset($_POST['address']) ? $_POST['address'] : "";

        $phone = isset($_POST['mobileno']) ? $_POST['mobileno'] : "";
        $orgDate = isset($_POST['finish']) ? $_POST['finish'] : "";
        $sex = isset($_POST['gender']) ? $_POST['gender'] : "";
        $kayaid = 1;

        //dob processing
        $date = str_replace('."', '-', $orgDate);  
        $dob = date("Y-m-d", strtotime($date));  
        

        $sqlInsert = "INSERT INTO staff (kayacare_id,fname,mname,lname,email,phone,address,dob,sex) VALUES ('".$kayaid."','".$fname."','".$mname."','".$lname."','".$email."','".$phone."','".$address."','".$dob."','".$sex."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
        }
    
?>