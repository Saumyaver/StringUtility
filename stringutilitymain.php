<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>String Main Page</title>
	  <link rel="stylesheet" type="text/css" href="mainstyle.css">
	<script>
function calc(str,pos,x) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
       
        xmlhttp.open("GET", "one.php?q="+str+"&p="+pos+"&r="+x, true);
    	xmlhttp.send();
    }


}</script>
</head>
<body style="background-image: url('c.gif'); "> <!-- CHANGE THE BACKGROUND TO BLACK IF THIS DOESNT LOOK GOOD -->
<div class="head" style="background-color: rgb(50,50,50);">
		<p class="heading" style="color:#DC143C;" ><strong>STRING UTILITY TOOLS</strong></p>
</div>

<div class="sessc">
	<p class="sess" style="color:#DC143C; background-color: black;"><strong> Hey! <?php 
		echo $_SESSION['user'];
		?>
			!:D
</strong></p>
</div>

<p class="ans" style="color:#FFD700; font-size: 50px;">Answer: <span id="txtHint"></span></p>


<div class="sc">
<div class="F1">
<img src="upper.jpg" height=250px width=300px >
<form style="color:#DC143C;">      
STRING: : <input type="text" onkeyup="calc(this.value,'0','upper')">
</form>
</div>


<div class="F2">
<img src="palindrome.jpg" height=250px width=300px  > 
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','palindrome')">
</form>
</div>


<div class="F3">
<img src="lower.jpg" height=250px width=300px>
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','lower')">
</form>      
</div>

<div class="F4">
<img src="split.jpg" height=200px width=200px>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black" style="color:#DC143C;">
    Split @ 3</div>
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'3','split')">
</form>
</div>

<div class="F5">
<img src="reverse.jpg" height=200px width=200px>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black" style="color:#DC143C;">
    REVERSE</div>
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','reverse')">
</form>
</div>

<div class="F6">
<img src="lastn.jpg" height=200px width=150px>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black" style="color:#DC143C;">
    Last @3</div>
<form style="color:#DC143C;" method="post">       
STRING: : <input type="text" onkeyup="calc(this.value,'3','lastn')">
</form>
</div>



<div class="F7">
<img src="splitArray.jpg" height=250px width=300px >
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black" style="color:#DC143C;">
    Split => Array</div>
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','splitArray')">
</form>
</div>

<div class="F8">
<img src="wordwrapbr.jpg" height=250px width=300px >
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'5','wordwrapbr')">
</form>
</div>

<div class="F9">
<img src="distinctChar.jpg" height=250px width=300px >
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','distinctChar')">
</form>
</div>

<div class="F10">
<img src="length.jpg" height=250px width=300px >
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','length')"><br>
</form>
</div>

<div class="F11">
<img src="striptag.jpg" height=250px width=300px >
<form style="color:#DC143C;">       
STRING: : <input type="text" onkeyup="calc(this.value,'0','striptag')"><br>
</form>
</div>


<div class="xmlx">
	<a href="contactus.xml">Copyright Details!!</a>
</div>



</body>
</html>