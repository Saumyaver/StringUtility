

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error($conn));
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS stringDB  ";
if (mysql_query( $sql,$conn)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysql_error($conn);
}


mysql_select_db("stringDB",$conn);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS userinfo (
Name VARCHAR(30) NOT NULL,
username VARCHAR(30) ,
email VARCHAR(50),
password VARCHAR(40) )";

if (mysql_query($sql,$conn)) {
    echo "Table myDB created successfully";
} else {
    echo "Error creating table: " . mysql_error($conn);
}


// Insertm database
	

	$password1=mysql_real_escape_string($_POST['password']);
	$userid=mysql_real_escape_string($_POST["txtname"]);
	$username1=mysql_real_escape_string($_POST["username"]);
	$useremail=mysql_real_escape_string($_POST["txtemail"]);


	$q="INSERT INTO userinfo(Name, username, email,password) VALUES ('$userid','$username1','$useremail','$password1')";

	if(mysql_query($q,$conn))
	{
	
		$_SESSION['user']=$username1;	
		echo "<script>window.location='login.php';</script>";
	}
	else{

		$message = "Sorry! Username already taken :()";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='Register.php';</script>";
	}
	header("location:login.php?flag=1");

?>
