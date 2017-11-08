<?php
session_start();
if (isset($_SESSION["rol"])){
}
else
die("U heeft geen toegang tot deze pagina.")
?>
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
<?php 
	include 'head.html';
    include 'Dataconnectie.php';
    //var_dump($_POST);
?> 

<?php
if (isset($_POST["confirmation"])){
	$query="UPDATE `items` SET `product_naam` = '". $_POST["naam"] ."', `prijs` = '". $_POST["prijs"] ."' WHERE `items`.`product_id` = '" .$_GET["product_id"] ."'";

//echo $query;
	$result = mysqli_query($db, $query);
	if ($result){
		echo "<h3>het volgende record is gewijzigd :</h3><p>";
		echo ("product " .$_GET["product_id"] . ".<hr>\n");?>
		<form><input type="button" value="Home" onclick="window.location.href='http://localhost/phpmyadmin/sandbox/project1.1/index.php'" /></form>
<?php
	}
}else{

	$query = "SELECT * FROM items WHERE product_id='" .$_GET["product_id"] ."'";
	$result = mysqli_query($db, $query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$naam = $row["product_naam"];
		$prijs = $row["prijs"];
		
    }
} else {
   echo "Geen record gevonden";
}
?>
<h3>Let op: Deze gegevens wijzigen?</h3>
<form action="" method="post">
	<input type="hidden" name="confirmation" value="1">
	<input type="hidden" name="productid" value="<?php echo($_GET["product_id"]);?>">
<table>

<tr><td>Product Naam:</td><td><input type="text" name="naam" value="<?php echo($naam);?>" size="30"></td></tr>
<tr><td>Prijs:</td><td><input type="text" name="prijs" value="<?php echo($prijs);?>" size="30"></td></tr>
</table>
<hr>

<input type ="Submit" value="Wijzig">
<input type="Button" value="Terug naar overzicht" onclick="javascript:history.back();">
</form>
<?php	
}
?>
<?php include 'Footer.php';?>