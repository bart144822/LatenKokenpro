<html>
<title>Winkelmandje</title>
<body>
<?php
include 'head.html';
?>
<h1 align="center" >Restaurant naam</h1> <?php // hier komt later een variabel ?>
<h2 align="right">Foto</h2> <?php // hier komt later een variabel ?>
<link href="style voor winkelmand.css" rel="stylesheet" type="text/css"/>
<div id="left_sidebar"> 
<div id="top_part">
Uw bestellingen
</div>
<table width="250px">
<tr><td>Item 1 </td><td> Prijs 1</td></tr><?php // alle items en prijzen worden later nog variablen ?>
<tr><td>Item 2 </td><td> Prijs 2</td></tr>
<tr><td>Item 3 </td><td> Prijs 3</td></tr>
<tr><td>Item 4 </td><td> Prijs 4</td></tr>
<tr><td>Item 5 </td><td> Prijs 5</td></tr>
</table>
</div>
<div id="content">
<?php
/*hier komen de gegevens van de klant qua adres enzo
*/
//momenteel niet gekoppeld aan database!!!!
?>
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
<input type="radio" name="IDeal" value="PayPal" checked>IDeal</td><td>
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
<input id="button" type="submit" name="Bestelling" value="Bestelling plaatsen">
</form>
<br><br>
<form action="*">
<input id="button" type="submit" name="ga terug" value="ga terug">
</form>
</div>
</body>
</html>	
<?php
/* op het moment is nog niks gekoppeld en is de division
content af. Natuurlijk moeten er nog een paar dingen aan gebeuren 
maar het kan zo af zijn.
als je iets veranderd laat dan effe een comment achter hier met wat je hebt veranderd.
Danku
*/
