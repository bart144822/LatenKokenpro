<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
</head> 
<body> 
<?php include 'Dataconnectie.php';?>
<?php include 'head.html';?>
<?php $query = "SELECT * FROM items WHERE restaurant_restaurant_id = 5 ";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<h1 align="center">Pepe's Restaurant</h1>
<img src= "pepes-restaurant.png" width=500 align="right"></img>
<div id="content">
<fieldset>
<legend>Restaurant menu:</legend>
<br>
<table>
<form method="POST" action="">


<?php $x=0; while($row = mysqli_fetch_assoc($result)){
$x++;
    echo"<tr><td>";
    //echo "<input name='id$x' type='hidden'  value=".$row['product_id'].">";
    echo $row['product_naam'];
    echo"<td><td><td><td>";
    echo "€".$row['prijs'];
    echo"<td><td>";
    echo "<input type='number' min='0' max='99' name='".$row['product_id']."'>";
}
?>
</table>
<br><br>
<input type='submit' value='Toevoegen aan bestelling'>
<?php //var_dump($_POST); ?>
<br><br>
</fieldset>
</from>
</div>
<?php include 'Footer.php';?>
<?php include 'Dataeinde.php';?>
</body> 
</html>


