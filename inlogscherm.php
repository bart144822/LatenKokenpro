<!DOCTYPE html> 
<html> 
<head> 
<title>Inlogscherm</title> 
<link rel="stylesheet" type="text/css" href="inlogschermstyle.css">
<div ID="Tableinlog"><H2>Login</H2>
</head> 
<body>
<!--<fieldset>-->
<table>	
<form Action="inlogscherm.php" method="POST">
<tr>
<td>Email:</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>Wachtwoord:</td>
<td><input type="password" name="wachtwoord"></td>
<tr>
<td><input id="buttoninlog" type ="submit" value="Log in"></td>

</form>

<form action="registratiescherm.php">

<td><input id="buttoninlog" type="submit" Value="registreer"></td>

</form>
</table>
</div>
<?php include("footer.php")?>
<!--</fieldset>-->
</body> 
</html> 
	