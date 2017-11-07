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
if (!($_SERVER["REQUEST_METHOD"] == "POST")){			
?>
		<form action="" method="post">
		<h2> Invoeren nieuwe product</h2>
		<hr />
		<table>
		<tr><td>Naam:</td><td><input type = "text" name = "product_naam"></td></tr>
		<tr><td>Prijs:</td><td><input type = "text" name = "prijs"></td></tr>
		</table><p>
				<input type="submit" value="Toevoegen aan menu" />
		</form>
		
<?php
		}
	else
	{
    $restaurant = $_GET["restaurant_restaurant_id"];
	$naam = mysqli_real_escape_string($db, $_POST["product_naam"]);
	$naam = ucfirst($_POST['product_naam']);
	if( !preg_match("/^[A-Za-z]*$/", $naam)) {
	die("Naam mag alleen letters en spaties bevatten.");
	}
	$prijs = mysqli_real_escape_string($db, $_POST['prijs']);
		if(!preg_match('/^([1-9]\d*)(?:\.\d{2})?$/', $prijs)) {
		die("Prijs invoer was onjuist");
	}
		$query = "INSERT INTO `items` (`product_id`, `restaurant_restaurant_id`, `product_naam`, `prijs`) 
        VALUES (NULL, $restaurant, '$naam', '$prijs')";
        //echo $query;
		$controle = mysqli_query($db,$query);
		if (!$controle) { 
            die("Database query failed.");
            }
			if ($controle == TRUE) {
				echo "Product  ". $naam." is toegevoegd aan de database."."<br/> ";
				echo "De prijs is: $prijs";
				}
			else
			{
				die("Fout geconstateerd."); 
			} 
		}	
?>	
    