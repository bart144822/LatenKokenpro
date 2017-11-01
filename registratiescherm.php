<!DOCTYPE html> 
<html> 
<head> 
<title>Registratiesecherm</title> 
</head> 
<body> 
<table>
<form action="registratiecheck.php">
<link rel="stylesheet" type="text/css" href="registratieschermstyle.css">
<div ID="Tableregistratie">
<tr><td>
<H2>Registratie scherm</H2>	
</td></tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>Voornaam:</td>
<td><input type="text" name="voornaam"></td>
<tr/>

<tr>
<td>Achternaam:</td>
<td><input type="text" name="achternaam"> </td>
<tr/>

<tr>
<td>Straatnaam:</td>
<td><input type="text" name="straatnaam"> </td>
<tr/>

<tr>
<td>Postcode:</td>
<td><input type="text" name="postcode"> </td>
<tr/>

<tr>
<td>Huisnummer:</td>
<td><input type="text" name="huisnummer"> </td>
<tr/>

<tr>
<td>Plaatsnaam:</td>
<td><input type="text" name="plaatsnaam"> </td>
<tr/>

<tr>
<td>Wachtwoord:</td>
<td><input type="password" name="wachtwoord"> </td>
<tr/>
<td>Wachtwoord_her:</td>
<td><input type="password" name="wachtwoordHer"> </td>
<tr/>

<tr><td><input ID="buttonregistratie" type="submit" value="registreer"></td></tr>

</form>
</div>
<?php include("footer.php"); ?>
</body> 
</html> 