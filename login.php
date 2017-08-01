<!DOCTYPE html>

<html>
<title>Login</title>
 <head>
<link rel="stylesheet" type="text/css" href="st.css">
</head>
<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
				
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><label><input  type="radio" name="auth_type" value="Admin"/>Admin</label></td>
  </tr>
  <tr>
  <td><div align="right"></div></td>
    <td><label><input type="radio" name="auth_type" value="Customer"/>Customer</label></td>
  </tr>
<tr>
    <td><div align="right"></div></td>
    <td><label><input  type="radio" name="auth_type" value="Driver"/>Driver</label></td>
  </tr>

  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
    <td><a href="reg1.php">REGISTER</a></td>
   </tr>
</table>
</form>
</html>
