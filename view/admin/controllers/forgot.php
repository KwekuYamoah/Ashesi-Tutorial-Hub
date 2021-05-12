<?php
require_once "../config/connect_db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] =="POST"){
   
    $email = $_POST['email'];

    //connecting kay71712022
    $connect = connect_db();

    $sql = "SELECT email FROM users WHERE email = '$email'";

    $result = mysqli_query($connect,$sql) or die ( mysqli_error($sql));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $email, table row must be 1 row
        
    if($count == 1) {
        
        $_SESSION['forget_user'] = $email;
        header("location: ../view/reset.html");
    }
    else {
        $GLOBALS['error'] = '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript"> 
           setTimeout(function () {
              swal({
                 title: "Validation Failed!",
                 text: "Your username is invalid!",
                 icon: "error",
                 button: "Try again",
             });
           }, 2000);
        
        </script>';
     }
  
}
?>