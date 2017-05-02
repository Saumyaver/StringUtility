
<?php
session_start(void);

$conn=mysql_connect("localhost","root","");
mysql_select_db("stringDB",$conn);

$username2=mysql_real_escape_string($_POST["username1"]);
$password2=mysql_real_escape_string($_POST["password1"]);

$sql="SELECT * FROM userinfo WHERE username='$username2' AND password='$password2'";
$result=mysql_query($sql,$conn);
if(mysql_num_rows($result)>0){
	$_SESSION['user']=$username2;
	echo "<script>window.location='stringutilitymain.php';</script>";
}
else{
	$message="Incorrect username/password found!";
		echo "<script type='text/javascript'>alert('$username2');</script>";
		echo "<script>window.location='login.php';</script>";
		echo"<script>close()</script>";
}

?>