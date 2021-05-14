<?php
   session_start();
   
   if(session_destroy()) {
      
      header("Location: http://ashesi-tutorial-hub.herokuapp.com/");
   }
?>