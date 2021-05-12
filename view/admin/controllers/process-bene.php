<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    if(isset($_POST['f-name']) and ($_POST['f-name'] != "")){
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
        

        $sqlInsert = "INSERT INTO beneficiaries (kayacare_id,fname,mname,lname,location,dob,sex) VALUES ('".$kayaid."','".$fname."','".$mname."','".$lname."','".$address."','".$dob."','".$sex."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
    }

    //Or data is coming from parent form
    else if(isset($_POST['mobileno']) and $_POST['mobileno'] != ""){
        $phone = isset($_POST['mobileno']) ? $_POST['mobileno'] : "";

        /* We need parents id from beneficiaries table
           In the db we specify that every even id represents 
           a parent. So we will get the last id representing the
           last parent inserted to the db add phone
        */

        $sqlSelect = "SELECT * FROM beneficiaries WHERE bene_id IN(SELECT bene_id FROM beneficiaries WHERE bene_id%2 = 0) ORDER BY bene_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $bene_id = $row["bene_id"];
        
        if(!$bene_id){
            $result = mysqli_error($connect);
        }

        //Now let's prepare query for insert
        $sqlInsert = "INSERT INTO parent(parentBene_id,phone) VALUES ('".$bene_id."','".$phone."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            echo mysqli_error($connect);
        }
        

    }

    //Or data is coming from child form
    else if(isset($_POST['development']) and $_POST['development'] != ""){
        $development_stage = isset($_POST['development']) ? $_POST['development'] : "";

        /* Child Table needs a beneficiary id so
          we grab it from the beneficiaries table
          based on odd ids and we select the last 
          one
        */ 
        $sqlSelect = "SELECT * FROM beneficiaries WHERE bene_id IN(SELECT bene_id FROM beneficiaries WHERE bene_id%2 <> 0) ORDER BY bene_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $bene_id = $row["bene_id"];

        if(!$bene_id){
            echo mysqli_error($connect);
        }

        /* Every child has a parent
           so we get the last parent id
           from parent table
        */
        $sqlSelect = "SELECT parentBene_id FROM parent ORDER BY parentBene_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //Get needed values
        $parentBene_id = $row["parentBene_id"];
        if(!$parentBene_id){
            echo mysqli_error($connect);
        }


        /* Child needs the health worker
           id so we grab it from the health 
           worker table
        */
        $sqlSelect = "SELECT healthWorker_id FROM health_worker";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $healthWorker_id = $row["healthWorker_id"];

        if(!$healthWorker_id){
            echo mysqli_error($connect);
        }

        /* We determine Child's care giver based 
           on the development stage so we extract
           that from the care_giver table
        */
        $sqlSelect = "SELECT careGiver_id FROM care_giver WHERE assgined_stage ='".$development_stage."'";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $careGiver_id = $row["careGiver_id"];

        if(!$careGiver_id){
            echo mysqli_error($connect);
        }

        /* Now we need to get last record 
           from records table. Child table
           needs it
        */

        $sqlSelect = "SELECT * FROM records ORDER BY record_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //Get needed values
        $record_id = $row["record_id"];
        $kayacare_id = $row["kayacare_id"];
        $development_gap = $row["development_gap"];
        $record_date = $row['record_date'];
        if(!$record_id){
            echo mysqli_error($connect);
        }
        //Now let's prepare query for insert
        $sqlInsert = "INSERT INTO child (bene_id,parentBene_id,healthWorker_id,careGiver_id,development_stage,record_id,kayacare_id,development_gap,record_date) VALUES ('".$bene_id."','".$parentBene_id."','".$healthWorker_id."','".$careGiver_id."','".$development_stage."','".$record_id."','".$kayacare_id."','".$development_gap."','".$record_date."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            echo mysqli_error($connect);
        }


        
    }
    
?>