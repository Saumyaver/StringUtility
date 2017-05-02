

<?php 
/*Write a PHP function that checks whether a 
passed string is a palindrome or not?*/
 
function check_palindrome($string)   
{  
  if ($string == strrev($string))  
      return 1;  
  else  
      return 0;  
}  
$str=$_POST["username"];
$ans=check_palindrome($str); 
if($ans==1)
		echo "String is a palindrome";
else	echo "String is not a palindrome";
?>
