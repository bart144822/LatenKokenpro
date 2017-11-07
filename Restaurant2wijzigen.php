<!DOCTYPE html> 
<html> 
<?php
//session_start(); 
//if (isset($_SESSION["rol"])){ 
//}
//else
//die("U heeft geen toegang tot deze pagina.")
?>
<head> 
<title></title> 
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
</head> 
<body> 
<?php include 'Dataconnectie.php';?>
<?php include 'head.html';?>
<?php $query = "SELECT * FROM items WHERE restaurant_restaurant_id = 2 ";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<h1 align="center">Steaks & Chops</h1>
<img src= "bobs-steak-chop-house-logo.png" width=400 align="right"></img>
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
    echo"<td><td>";
    echo "<a href=\"updateitem.php?product_id=".$row['product_id']."\"> Wijzig</a>";
    echo"<td><td>";
    echo "<a href=\"itemverwijderen.php?product_id=".$row['product_id']."\"> Verwijder</a>"; 
}
?>
</table>
<br><br>
<a href="toevoegen.php?restaurant_restaurant_id='2'"."\"> Nieuw product toevoegen</a>
<?php //var_dump($_POST); ?>
<br><br>
</fieldset>
</from>
</div>
<?php include 'Footer.php';?>
<?php include 'Dataeinde.php';?>
</body> 
</html>


