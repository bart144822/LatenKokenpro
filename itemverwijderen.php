<?php
//session_start(); 
//if (isset($_SESSION["rol"])){ 
//}
//else
//die("U heeft geen toegang tot deze pagina.")
?>
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
<?php 
    include 'head.html';
    include 'Dataconnectie.php';

if (isset($_POST["confirmation"])){
	$query="DELETE FROM items WHERE product_id='" .$_POST["product_id"] ."'";
	$result = mysqli_query($db, $query) or die (mysqli_error());
	echo("Het volgende commando is uitgevoerd: <b>$query</b><br>\n");
	if ($result){
        echo ("Product ID " .$_POST["product_id"] . " is verwijderd.<p>\n");
        ?>
        <form> <input type="button" value="Home" onclick="window.location.href='http://localhost/hoorcollege/week4/index.php'" /></form>
            <?php
    }

}else{
	$query = "SELECT * FROM items WHERE product_id='" .$_GET["product_id"] ."'";
	$result = mysqli_query($db, $query);
	if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
		echo "<h3>Verwijder dit record?</h3>" . "<p />";
		echo "<table>";
		echo "<tr><td>Product ID:</td><td> " . $row["product_id"]. "</td></tr> ";
		echo "<tr><td>Product Naam:</td><td> ".$row["product_naam"]. "</td></tr> " ;
		echo "<tr><td>Prijs:</td><td> ".$row["prijs"]. "</td></tr> " ;
		echo "</table><p><hr>";
    }
} 
else {
   echo "Geen record gevonden";
}
?>
<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post">
	<input type="hidden" name="confirmation" value="1">
	<input type="hidden" name="productid" value="<?php echo($_GET["product_id"]);?>">
	<input type="Submit" value="Verwijderen">
	<input type="Button" value="Terug naar overzicht" onclick="javascript:history.back();">
</form>
<?php
}
?>
<?php include 'Footer.php';?>