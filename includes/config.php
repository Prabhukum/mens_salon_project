<?php
	session_name('saloon');
	session_start();
    ini_set("display_errors","0");
    $mode = "local";
    if ($mode == "local") {
        $dbcon = mysqli_connect("localhost", "root", "mysql", "saloon") or die("Could not connect to Database");
    }
    if ($mode == "production") {
        $dbcon = mysqli_connect("sql304.epizy.com", "epiz_32968153", "9cLcFv93ECj8qM", "epiz_32968153_saloon") or die("Could not connect to Database");
    }
?>