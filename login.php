<html>
<head>
  <title>Login Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

  
 <!-- <script language="javascript" type="text/javascript">
 /* function fun_val()
  	{
  		var l=document.loginsell.username.value;
  		if(l=="")
  		{
  			alert("Please Enter User name");
  			document.loginsell.username.focus;
  			return false;
  		}

  		var p=document.loginsell.password.value;
  		if(p=="")
  		{
  			alert("Please Enter Password");
  			document.loginsell.password.focus;
  			return false;
  		}
  	}*/
  </script>*/-->

<body style="background-image: url('lr.jpg');">

<p align="center" id="loginpage"><br><TR></tr>
<form name="loginform" action="loginsession.php" method="post"><TR></tr>
  <table font-family = "Georgia" class = "table" width="400" height="178"  align="center" cellpadding="1"cellspacing="1" border="3">
    <tr>
      <td height="41" colspan="2" align="center"><h2><b>Login Form</b></h2></td>
    </tr>
    <tr>
      <td width="170" height="40"  align="center"><b>User Name</b></td>
      <td width="213">
         <input type="text" name="username1" style="background" required="required" />
      </font></td>
    </tr>
    <tr>
      <td height="38" align="center"><b>Password</b></td>
      <td>
        <input type="password" name="password1" maxlength="8" required="required"/>
        </font></td>
    </tr>
    <br />
    <tr>
      <td height="48" colspan="2" align="center">
        <input type="submit"  value="Submit" name="ok" />

        <a href="userinfo.php">
        <br/><br />New User?</a></font></td>
    </tr>
  </table>
<p>&nbsp;</p>
</form>
</body>
</html>
