<?php
require_once "../config/connect_db.php";

if($_SERVER["REQUEST_METHOD"] =="POST"){
   
    $f_name = $_POST['f-name'];
    $l_name = $_POST['l-name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    //connecting youcouselyou
    $connect = connect_db();

    $sql_query = "INSERT INTO users (fname, lname, email, password) VALUES ('$f_name', '$l_name','$email', '$password')";
    $insertion = mysqli_query($connect, $sql_query);
    if($insertion){
        header("location: ../index.php");
    }
    else{
       // echo "Failed Terribly";
       //return false;
    }
}


?>