<?php
session_name('saloon');

session_start();

session_destroy();
header("Location:index.php");
?>