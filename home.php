<!-- <?php
	require_once('auth.php');
?> -->

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
<style type="text/css">


.body{
	background-color: black;
}

.button{ background-color: white;}

.dropbtn {
    background-color: grey;
    color: white;
    padding: 8px;
    font-size: 18px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}
.style1{color:white; font-size:"50px";}
</style>
</head>
 
<body class="body">
<h1 align="center" class="style1">Welcome Admin</h1><br>

<h2 align="center" class="style1">Kindly choose the what you want to do from the following</h2><br>
<form name="selection_form" action="option_check.php" method="POST">
<div align="center">


<div class="dropdown">
<select name="dropdownmenu" class="dropbtn">
<option value="Insert">Insert</option>
<option value="Delete">Delete</option>
<option value="Update">Update</option>
<option value="View">View</option>
</select>
<br><br>
<input name="submit" type="submit" value="submit" />
</div>
</form>
<p align="center"><a href="index.php">logout</a></p>
</body>
</html>
