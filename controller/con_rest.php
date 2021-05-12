<?php
require_once "../model/connect_db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] =="POST"){
   
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    //connecting ashtutor
    $connect = connect_db();

    //get email from session array
    $email = $_SESSION['forget_user'];

    $sql = "UPDATE students set password = '$password' where ashesi_mail = '$email'";
    $result = mysqli_query($connect,$sql) or die ( mysqli_error($connect));

    if($result){
        session_destroy();
        header('location: ../index.php');
        exit();
    }
    else{
    // echo "Failed Terribly";
    //return false;
    }
}


?>