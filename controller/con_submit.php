<?php

require_once "../model/connect_db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] =="POST"){
    //connecting ashtutor
    $connect = connect_db();
   
    $description = $_POST['description'];
    $url = $_POST['url'];

    //getting author
    $myemail = $_SESSION['login_user'];
    $sql = "SELECT userID FROM users WHERE email = '$myemail'";
    $result = mysqli_query($connect,$sql);
    // If result matched $myemail and $mypassword, table row must be 1 row
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $author = $row['userID'];
    

    $sql_query = "INSERT INTO video (author,vidTopic,vidUrl) VALUES ('$author', '$description','$url')";
    $insertion = mysqli_query($connect, $sql_query);
    if($insertion){
        header("location: ../view/home.php");
    }
    else{
       // echo "Failed Terribly";
       //return false;
    }
}
?>