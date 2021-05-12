<?php
    require_once("../config/class-db.php");

    //Connect to database
    $db = new DB();
    $parent = $db->get_bene_insight();
    $staff = $db -> get_staff_insight();
    $dev_gap = $db -> get_dev_insight();

    echo $parent ."<br>" .$staff ."<br>".$dev_gap;
?>