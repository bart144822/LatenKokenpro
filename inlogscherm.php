<!DOCTYPE html> 
<html> 
<head> 
<title>Inlogscherm</title> 
<link rel="stylesheet" type="text/css" href="inlogschermstyle.css">
<div ID="Tableinlog"><H2>Login</H2>
</head> 
<?php include "head.html"; ?>
<body>
<!--<fieldset>-->
<table>	
<form action="inlogcheck.php" method="POST">
<tr>
<td>Email:</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Wachtwoord:</td>
<td><input type="password" name="wachtwoordinlog" required></td>
<tr>
<td><input id="buttoninlog" type ="submit" name="buttoninlog" value="Log in"></td>


</form>

<form action="registratiescherm.php">

<td><input id="buttoninlog" type="submit" Value="registreer"></td>

</form>
</table>
</div>
<?php include "footer.php"?>
<!--</fieldset>-->
</body> 
</html> 
	
