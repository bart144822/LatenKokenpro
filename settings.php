<html>
<title>Settings</title>
<body>
<link href="style voor settings.css" rel="stylesheet" type="text/css"/>
<?php
include 'Dataconnectie.php';
include 'head.html'; 
$query = "SELECT * FROM klant WHERE klant_id ='" .$_GET["klant_id"]."";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){
		$voornaam = $row["voornaam"];
		$achternaam = $row["achternaam"];
		$straatnaam = $row["straatnaam"];
		$huisnummer = $row["huisnummer"];
		$postcode = $row["postcode"];
		$plaatsnaam = $row["plaatsnaam"];
	$email = $row["email"];}
	?>
<h3>Let op: Deze gegevens wijzigen?</h3>
<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post"> 
<input type="hidden" name="confirmation" value="1"> 
<input type="hidden" name="klant_id" value="<?php echo($_GET["klant_id"]);?>"> 
<h2>Settings</h2>
<table>
<tr><td>Voornaam: </td><td><input type="text" name="voornaam" value="<?php echo($voornaam);?>"></td></tr>
<tr><td>Achternaam: </td><td><input type="text" name="achternaam" value="<?php echo($achternaam);?>"></td></tr>
<tr><td>E-mail: </td><td><input type="text" name="email" value="<?php echo($email);?>"></td></tr>
<tr><td>Straatnaam: </td><td><input type="text" name="straatnaam" value="<?php echo($straatnaam);?>"></td></tr>
<tr><td>Huisnummer: </td><td><input type="text" name="huisnummer" value="<?php echo($huisnummer);?>" size="5"></td></tr>
<tr><td>Postcode: </td><td><input type="text" name="postcode" value="<?php echo($postcode);?>"></td></tr>
<tr><td>Plaatsnaam: </td><td><input type="text" name="plaatsnaam" value="<?php echo($plaatsnaam);?>"></td></tr>
</table>
<hr>

<input type="submit" value="wijzig">
<input type="submit" value="Nee terug" onclick="javascript:history.back();">
</form>

<?php
if (isset($_POST["confirmation"])){ 
$query="UPDATE klant SET 
voornaam = '". $_POST["voornaam"] ."',
achternaam = '". $_POST["achternaam"] ."', 
straatnaam = '". $_POST["straatnaam"] ."', 
huisnummer = '". $_POST["huisnummer"] ."', 
postcode = '". $_POST["postcode"] . "', 
plaatsnaam = '". $_POST["plaatsnaam"] ."'
WHERE klant_id='" .$_POST["klant_id"] ."'"; 
}
}
?>
</body>
</html>