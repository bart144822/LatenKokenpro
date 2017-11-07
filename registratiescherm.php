<!DOCTYPE html> 
<html> 
<head> 
<?php include "head.html"; ?>
<title>Registratiesecherm</title> 
</head> 
<body> 
<table>
<form method="POST" action="registratiecheck.php">
<link rel="stylesheet" type="text/css" href="registratieschermstyle.css">
<div ID="Tableregistratie">
<tr><td>
<H2>Registratie scherm</H2>	
</td></tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Voornaam:</td>
<td><input type="text" name="voornaam" required></td>
<tr/>

<tr>
<td>Achternaam:</td>
<td><input type="text" name="achternaam" required> </td>
<tr/>

<tr>
<td>Postcode:</td>
<td><input type="text" name="postcode" required> </td>
<tr/>

<tr>
<td>Straatnaam:</td>
<td><input type="text" name="straatnaam" required> </td>
<tr/>

<tr>
<td>Huisnummer:</td>
<td><input type="text" name="huisnummer" required> </td>
<tr/>

<tr>
<td>Plaatsnaam:</td>
<td><input type="text" name="plaatsnaam" required> </td>
<tr/>

<tr>
<td>Wachtwoord:</td>
<td><input type="password" name="wachtwoord" required> </td>
<tr/>
<td>Wachtwoord_her:</td>
<td><input type="password" name="wachtwoord2" required> </td>
<tr/>

<tr><td><input ID="buttonregistratie" type="submit" value="registreer"></td></tr>

</form>
</div>
<?php include "footer.php"; ?>
</body> 
</html> 