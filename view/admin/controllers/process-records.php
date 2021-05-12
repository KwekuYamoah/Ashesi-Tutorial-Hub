<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    //Asserting if data was gotten from records form
    if(isset($_POST['finish']) and $_POST['finish'] !=""){
        $orgDate = isset($_POST['finish']) ? $_POST['finish'] : "";
        $development_gap = isset($_POST['development']) ? $_POST['development'] : "";
        $kayaid = 1;

        //date processing
        $date1 = str_replace('."', '-', $orgDate);  
        $date = date("Y-m-d", strtotime($date1));

        $sqlInsert = "INSERT INTO records (kayacare_id,development_gap,record_date) VALUES ('".$kayaid."','".$development_gap."','".$date."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
    
    }

    //Asserting if data was gotten from cognitive form
    elseif(isset($_POST['rwindex']) and $_POST['rwindex'] !=""){
        //Expected data from form
        $rw_index = isset($_POST['rwindex']) ? $_POST['rwindex'] : "";
        $numeracy_skills= isset($_POST['numeracy']) ? $_POST['numeracy'] : "";
        $decision_making = isset($_POST['decision']) ? $_POST['decision'] : "";
        $ct_index = isset($_POST['ct']) ? $_POST['ct'] : "";
        $problem_solving = isset($_POST['problem']) ? $_POST['problem'] : "";
        $curiosity = isset($_POST['curiosity']) ? $_POST['curiosity'] : "";

        //Cognitive data will be inserted form last record inserted in records 
        //So we need to get record_id
        $sqlSelect = "SELECT record_id FROM records ORDER BY record_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $record_id = $row["record_id"];
        if(!$record_id){
            $result = mysqli_error($connect);
        }

        //Now let's prepare query for insert
        $sqlInsert = "INSERT INTO cognitive_data(record_id,rw_index,numeracy_skills,decision_making,ct_index,problem_solving,curiosity) VALUES ('".$record_id."','".$rw_index."','".$numeracy_skills."','".$decision_making."','".$ct_index."','".$problem_solving."','".$curiosity."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
    }

    //Asserting if data was gotten from HealtH form
    elseif(isset($_POST['length']) and $_POST['length'] !=""){
        //Expected data from form
        $length = isset($_POST['length']) ? $_POST['length'] : "";
        $weight= isset($_POST['weight']) ? $_POST['weight'] : "";
        $blood_pressure = isset($_POST['blood']) ? $_POST['blood'] : "";
        $immunization = isset($_POST['immu']) ? $_POST['immu'] : "";
        $ears = isset($_POST['ears']) ? $_POST['ears'] : "";
        $eyes= isset($_POST['eyes']) ? $_POST['eyes'] : "";
        $allergies = isset($_POST['allergies']) ? $_POST['allergies'] : "";

        //HealtH data will be inserted form last record inserted in records 
        //So we need to get record_id
        $sqlSelect = "SELECT record_id FROM records ORDER BY record_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $record_id = $row["record_id"];
        if(!$record_id){
            $result = mysqli_error($connect);
        }

        //Now let's prepare query for insert
        $sqlInsert = "INSERT INTO health_data(record_id,length,weight,blood_pressure,immunization,ears,eyes,allergies) VALUES ('".$record_id."','".$length."','".$weight."','".$blood_pressure."','".$immunization."','".$ears."','".$eyes."','".$allergies."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
    }
    //We now know data is coming from nutrition from
    else if(isset($_POST['iron']) and $_POST['iron'] !=""){
        //Expected data from form
        $iron_deficiency = isset($_POST['iron']) ? $_POST['iron'] : "";
        $zinc_deficiency= isset($_POST['zinc']) ? $_POST['zinc'] : "";
        $growth = isset($_POST['growth']) ? $_POST['growth'] : "";
        

        //Nutrition data will be inserted form last record inserted in records 
        //So we need to get record_id
        $sqlSelect = "SELECT * FROM records ORDER BY record_id DESC LIMIT 1";
        $result = mysqli_query($connect, $sqlSelect);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $record_id = $row["record_id"];
        if(!$record_id){
            $result = mysqli_error($connect);
        }

        //Now let's prepare query for insert
        $sqlInsert = "INSERT INTO nutrition_data(record_id,iron_deficiency,zinc_deficiency,growth) VALUES ('".$record_id."','".$iron_deficiency."','".$zinc_deficiency."','".$growth."')";

        $result = mysqli_query($connect, $sqlInsert);

        if (!$result) {
            $result = mysqli_error($connect);
        }
    }