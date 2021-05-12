<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);


//databse credentials
define("DATABASE", $cleardb_db);
define("SERVER", $cleardb_server);
define("USERNAME", $cleardb_username);
define("PASSWD",$cleardb_password );

?>