<?php
$y=$_REQUEST["r"];
$ns=$_REQUEST["p"];
$str=$_REQUEST["q"];

switch ($y){
	case 'upper':
					echo strtoupper($str);
					break;
	case 'palindrome': 
						if ($str == strrev($str)){echo "It Is A Palindrome!";}
						else {echo "It Is Not A Palindrome";}
						break;
	case 'lower':	
					echo strtolower($str);
					break;
	case 'split':	
					
					$ni=intval($ns);
					echo substr(chunk_split($str, $ni, '--'), 0, -1)."\n"; 
					break;
	case 'reverse': 
					echo strrev($str);
					break;
	case 'lastn':	
					    
					$ni=(int)$ns;
					echo substr($str, -$ni);
					break;
	case 'splitArray': 	
						print_r(str_split($str));
						break;
	case 'wordwrapbr': 
						    
						$ni=(int)$ns;
						echo wordwrap($str,$ni,"<br>\n");
						break;
	case 'distinctChar': 	
						echo count_chars($str,3);
						break;
	case 'length':
					echo strlen($str);
					break;
	case 'striptag':	
					echo strip_tags($str);
					break;
}
?>