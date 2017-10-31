<html>
<title>Winkelmandje</title>
<body>
<?php
include 'head.html';
?>
<h1 align="center">Restaurant naam</h1>
<h2 align="right">Foto</h2>
<link href="style1.css" rel="stylesheet" type="text/css"/>
<div id="left_sidebar"> Hier komen de bestellingen</div>
<div id="content">
<fieldset>
<legend>Klantinformatie:</legend>
<br>
<table>
<form method="POST" action="*">
<tr><td>bezorgadres:</td></tr>
<tr><td><input type="text" value="Straatnaam en Huisnummer" name="adres" max="40"></td>
<td><input type="text" value="Postcode" max="7" name="Postcode"></td><td><input type="text" value="Plaatsnaam" name="Plaatsnaam"></td></tr>
</table>
<br><br>
<hr width="100%" color="black" size="1">
<br>
<table>
<tr><td>Betaalinformatie</td></tr>
</table>
<table><tr><td>
<input type="radio" name="IDeal" value="PayPal">IDeal</td><td>
<input type="radio" name="Contant" value="Contant">Contant</td><td>
<input type="radio" name="PayPal" value="PayPal">PayPal</td></tr>
</table>
<br><br>
<hr width="100%" color="black" size="1">
<table>
<tr><td>Gewenste bezorgtijd</td></tr>
<tr><td><select name="tijd">
		<option value="Zo snel mogelijk">Zo snel mogelijk</option>
		<option value="1 uur">Over 1 Uur</option>
		<option value="2 uur">Over 2 Uur</option>
		</select>
		</table>
		<br><br>
</fieldset>
<br>
<input type="submit" name="Bestelling" value="Bestelling plaatsen" align="left">
</div>
</body>
</html>	