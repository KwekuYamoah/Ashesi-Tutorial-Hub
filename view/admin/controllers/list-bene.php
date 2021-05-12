<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    $json = array(); //encode query results here
    $sql = "SELECT * FROM child
            RIGHT JOIN beneficiaries ON child.bene_id = beneficiaries.bene_id  
            INNER JOIN (select parentBene_id,fname AS pfname, mname AS pmname, lname AS plname, phone FROM 
            parent INNER JOIN beneficiaries ON parent.parentBene_id = beneficiaries.bene_id) 
            parent ON child.parentBene_id = parent.parentBene_id;";

    $result = mysqli_query($connect, $sql);
    $bene_array = array();

    foreach($result as $row){
        $bene_array[] = array(
        'bene_id'   => $row["bene_id"],
        'parent_name'   => $row["pfname"] ." ". $row["pmname"] ." ". $row["plname"],
        'phone'   => $row["phone"],
        'child_name'   => $row["fname"] ." ". $row["mname"] ." ". $row["lname"],
        'dob' => $row['dob'],
        'sex' => $row['sex'],
        'development_stage' => $row["development_stage"],
        'development_gap' => $row['development_gap'],
        'location' => $row["location"],
        'delete' => '<button type="button" name="delete" id="'.$row["bene_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
        );
}
    mysqli_free_result($result); //freeing memory associated with result

    mysqli_close($connect);
    echo json_encode($bene_array);

?>