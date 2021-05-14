<?php
//Get Heroku ClearDB connection information
/*$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);*/


//databse credentials
define("DATABASE",  "ASHTUTOR");
define("SERVER",  "localhost");
define("USERNAME", "root");
define("PASSWD","" );
/*$cleardb_db
$cleardb_server
$cleardb_username 
$cleardb_password*/
?>