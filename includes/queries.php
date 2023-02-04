<?php
	function login($username, $password)
	{
		global $dbcon;
		return mysqli_query($dbcon, "Select * from cust Where username = '".$username."' && password = '".$password."'");
	}
	function register($username, $password, $email, $phone)
	{
		global $dbcon;
		return mysqli_query($dbcon, "INSERT INTO cust (`username`, `password`, `email`, `phone`) VALUES ('$username', '$password', '$email', '$phone')");
	}
?>