<?php
session_start();
$klant_id=$_SESSION['klant_id'];
include "functions.php";
include "Dataconnectie.php";
//$order=order(4);
$res_id=$_SESSION['resid'];
orderitems($_POST,$res_id);
$order=$_SESSION['order'];
?>
<html>
<title>Winkelmandje</title>
<body>
<?php
include 'head.html';
$query = "SELECT * FROM order_items o JOIN items i ON items_product_id= product_id WHERE orders_order_id LIKE($order) ";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<h1 align="center" ><?php echo $_SESSION['naam']; ?></h1> <?php // hier komt later een variabel ?>
<h2 align="right"><?php echo $_SESSION['plaatje']; ?></h2> <?php // hier komt later een variabel ?>
<link href="style voor winkelmand.css" rel="stylesheet" type="text/css"/>
<div id="left_sidebar"> 
<div id="top_part">
Uw bestellingen
</div>
<table width="250px">
<?php while($row = mysqli_fetch_assoc($result)){
		echo"<tr><td>";
		echo $row['product_naam'];
		echo"<td><td><td><td>";
		echo "€".$row['prijs'];
		echo"<td><td>";
		echo $row['items_qty'];
		echo"<td><td>";
	}
	?>
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
<form method="POST" action="afgerond.php">
<tr><td>bezorgadres:</td></tr>
<tr><td><input type="text" placeholder="Straatnaam en Huisnummer" name="adres" max="40"></td>
<td><input type="text" placeholder="Postcode" max="7" name="Postcode"></td><td><input type="text" placeholder="Plaatsnaam" name="Plaatsnaam"></td></tr>
</table>
<br><br>
<hr width="100%" color="black" size="1">
<br>
<table>
<tr><td>Betaalinformatie</td></tr>
</table>
<table><tr><td>
<input type="radio" name="Betalen" value="PayPal" checked>IDeal</td><td>
<input type="radio" name="Betalen" value="Contant">Contant</td><td>
<input type="radio" name="Betalen" value="PayPal">PayPal</td></tr>
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
<input id="button1" type="submit" name="Bestelling" value="Bestelling plaatsen">
</form>
<br><br>
<form action="javascript:history.back();" align="right">
<input id="button2" type="submit" name="ga terug" value="Ga terug">
</form>
</div>
</body>
<?php include "footer.php";?>
</html>	
<?php
/* op het moment is nog niks gekoppeld en is de division
content af. Natuurlijk moeten er nog een paar dingen aan gebeuren 
maar het kan zo af zijn.
als je iets veranderd laat dan effe een comment achter hier met wat je hebt veranderd.
Danku
*/
