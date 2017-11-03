<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
</head> 
<body> 
<?php include 'Dataconnectie.php';?>
<?php include 'head.html';?>
<?php $query = "SELECT * FROM items WHERE restaurant_restaurant_id = 1 ";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<h1 align="center">Mccluskey</h1>
<h2 align="right">Foto</h2>
<div id="content">
<fieldset>
<legend>Restaurant menu:</legend>
<br>
<table>
<form method="POST" action="">
<?php while($row = mysqli_fetch_assoc($result)){ 
echo "<tr>"."<td>"."<input type='hidden' value='['product_id']'>".$item = $row["product_naam"] ."<td>"."<td>"."<td>"."<td>"."€".$prijs = $row["prijs"]."<td>"."<td>"."<input type='number' min='0' max='99' name='aantal'>"."</td>"."</tr>";
}
?>
</table>
<input type='submit' value='Toevoegen aan bestelling'>
<?php var_dump($_POST); ?>
<br><br>
</fieldset>
</from>
</div>
<?php //include 'Footer.php';?>
<?php include 'Dataeinde.php';?>
</body> 
</html> 