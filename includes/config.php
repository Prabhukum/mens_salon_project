<?php
	session_name('saloon');
	session_start();
    ini_set("display_errors","0");

    $dbcon = mysqli_connect("localhost", "root", "", "saloon") or die("Could not connect to Database");
?>