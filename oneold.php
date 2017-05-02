<!DOCTYPE html>
<?php
	session_start();
	
?>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	STRING : <input type="text" name="user_field"/>
	Search String: <input type="text" name="user_field2" disabled="disPhp1()" />
	Position: <input type="text" name="user_field3" disabled="disPhp2()"/>
	<input type="submit" name="Let Find out" onclick="callpage()">
	
</form>
<p><?php 
	echo  $_POST['str'];
	
?></p>
<?php
	function disPhp1(){
		$y=$_POST['id'];
		switch ($y){
			case 10: return true; break;
			case 11: return true; break;
			case 12: return true; break;
			case 13: return true; break;
			case 20: return false; break; 
			case 21: return false; break;
			case 30: return true; break; /*case 1 is the case where only 1 string is required, case2 is where string and pos is required and case3 is where 2 strings are required*/
		}  //end of switch
	}
	function disPhp2()
	{
		$y=$_SESSION['id'];
		switch ($y){
			case 10: return true; break;
			case 11: return true; break;
			case 12: return true; break;
			case 13: return true; break;
			case 20: return true; break; 
			case 21: return true; break; 
			case 30: return false; break;
	}}
	function callpage(){
		$y=$_SESSION['id'];
		

		switch ($y){
			case "10": echo "Saumya";break;
			case 11: return true; break;
			case 12: return true; break;
			case 13: return true; break;
			case 20: return false; break; 
			case 21: return false; break;
			case 30: return true; break; 

	}}
	function check_palindrome($string)   
	{  
  		if ($string == strrev($string))  
      		return 1;  
  		else  
    		  return 0;  

    	if($ans==1)
			alert("String is a palindrome");
		else	 
			alert("String is not a palindrome");

	}  
?>
</body>
</html>