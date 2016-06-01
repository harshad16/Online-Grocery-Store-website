<?php
	session_start(); //starts the session
	if($_SESSION['employee']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("dbms") or die("Cannot connect to database"); //Connect to database
		$id = $_GET['sno'];
		mysql_query("DELETE FROM cashier WHERE sno='$id'");
		header("location: empbill.php");
	}
?>