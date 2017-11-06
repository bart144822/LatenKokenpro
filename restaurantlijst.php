<html>
<head>
<style>
body{
	background-color:#EFEFEF;
}
h1 {
	color:#A9A9A9;
}
.selector { 
	color:#A9A9A9; 
	background-color: #CAEBF2;
	width: 200px;
	height: 200px;
}

.top {
	position: fixed;
	top: 150px;
	left: 50px;

}

.middle {
	position: fixed;
	top: 350px;
	left: 50px;
	
}

.bottom {
	position: fixed;
	top: 550px;
	left: 50px;
	
}

.button {
	padding-left: 50px;
	width: 150px;
	height: 25px;
}

.list {
	position: relative;
	background-color: #CAEBF2;
	width: 900px;
	height: 1200px;
	left: 300px;
	top: 75px;
	
}

.rl {
	border: 1px solid black;
}



</style>
</head>
<body>
<?php
include 'head.html';
?>
<?php include 'Dataconnectie.php';?>
<?php 
if (empty($_GET["restaurant"])) {
	$query = "SELECT restaurant_id, restaurantnaam, straatnaam, imgurl FROM restaurant ";
}
else {
	$query = "SELECT restaurant_id, restaurantnaam, straatnaam, imgurl FROM restaurant WHERE type = '".$_GET["restaurant"]."'";
}
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<form action="restaurantlijst.php">
<div  class="selector top">
Restaurant filter <br>
<input type="radio" name="restaurant" value="Chinees"> Chinees<br>
<input type="radio" name="restaurant" value="Italiaans"> Italiaans<br>
<input type="radio" name="restaurant" value="Amerikaans"> Amerikaans<br>
<input type="radio" name="restaurant" value="Indisch"> Indisch <br>

</div>

<div  class="selector middle">
Bezorgkosten <br>
<input type="radio" name="bezorgkosten" value="GeenVoorkeur"> Geen voorkeur<br>
<input type="radio" name="bezorgkosten" value="Gratis"> Gratis<br>
<input type="radio" name="bezorgkosten" value="Minder2"> Minder dan 2 euro<br>
<input type="radio" name="bezorgkosten" value="Minder5"> Minder dan 5 euro<br>

</div>

<div  class="selector bottom">
Minimum bestelbedrag <br>
<input type="radio" name="bestelbedrag" value="GeenVoork"> Geen voorkeur<br>
<input type="radio" name="bestelbedrag" value="Minder10"> Minder dan 10 euro<br>
<input type="radio" name="bestelbedrag" value="Minder15"> Minder dan 15 euro<br><br><br>


<div class="selector button">
<input type="submit" value="Zoeken" style="background-color:#FF3B3F"><br>

</div>
</div>
</form>

<div class="list">


<?php $x=0; 

if ($result->num_rows == 0){
	echo "Er zijn geen resultaten gevonden";
}

while($row = mysqli_fetch_assoc($result)){
$x++;
    echo"<table class=\"rl\">";
	echo"<tr><td><a href=\"Restaurant1.php?id=".$row['restaurant_id']."\">".$row['restaurant_id']."</a></td>";
	echo"<td style=\"width: 900px;\">";
    if (!empty($row['imgurl'])) {echo "<img src=\"".$row['imgurl']."\" width=\"100\" >";}
    echo"</td><td>";
	echo $row['restaurantnaam'];
	echo"<br>";
    echo $row['straatnaam'];
    echo"</td></tr>";
    echo"</table>";
}
?>


</div>




</body>
</html>