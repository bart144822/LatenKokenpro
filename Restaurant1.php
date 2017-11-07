<?php
session_start();
?>
<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
<link rel="stylesheet" type="text/css" href="restaurantpaginastyle.css"> 
</head> 
<body> 
<?php include 'Dataconnectie.php';?>
<?php include 'head.html';?>
<?php $query = "SELECT * FROM items WHERE restaurant_restaurant_id = ".$_GET["id"];
$query2 = "SELECT restaurantnaam FROM restaurant WHERE restaurant_id = ".$_GET["id"];
$result = mysqli_query($db, $query);
$result2 = mysqli_query($db, $query2);
if (!$result) { 
die("Database query failed.");
}
?>
<h1 align="center">
<?php
$row2 = mysqli_fetch_assoc($result2);
$_SESSION['naam']= $row2['restaurantnaam']; 
echo $_SESSION['naam']; ?>
</h1>
<h2 align="right">
<?php
$row2 = mysqli_fetch_assoc($result2);
$_SESSION['plaatje'] = $row2['imgurl'];
echo $_SESSION['plaatje'];
?>
</h2>
<div id="content">
<fieldset>
<legend>Restaurant menu:</legend>
<br>
<table>
<form method="POST" action="winkelmandje.php">


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
<input type='submit' value='Toevoegen aan bestelling'>
<br><br>
</fieldset>
</form>
</div>
<?php //include 'Footer.php';?>
<?php include 'Dataeinde.php';?>
</body> 
</html>


