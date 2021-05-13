<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);


//databse credentials
define("DATABASE", $cleardb_db ?? "ASHTUTOR");
define("SERVER", $cleardb_server ?? "localhost");
define("USERNAME", $cleardb_username ?? "root");
define("PASSWD",$cleardb_password ?? "" );

?>