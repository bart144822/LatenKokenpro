<?php
session_start();
?>
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
	top: 175px;
	left: 50px;

}

.middle {
	position: fixed;
	top: 375px;
	left: 50px;
	
}

.bottom {
	position: fixed;
	top: 575px;
	left: 50px;
	
}

.button {
	padding-left: 50px;
	width: 150px;
	height: 25px;
}

.list {
	position: relative;
	width: 900px;
	height: 600px;
	left: 300px;
	top: 0px;
	
}

.title {
	position: relative;
	width: 900px;
	height: 50px;
	left: 300px;
	top: 0px;
}

.rl {
		width: 900px;
}

table, td {
	background-color: #CAEBF2;
	border: 1px solid black;
	border-collapse: collapse;
	height: 100px;
}

.c1 {
	width: 100px;
	text-align: center;
}

.c2 {
	width: 150px;
	text-align: center;
}

.c3 {
	padding: 20px;
}

.ad{
	position: fixed;
	height: 600px;
	width: 300px;
	background-color: #CAEBF2;
	left: 1300px;
	top: 175px;
}


</style>
</head>
<body>
<?php
include "functions.php";
include 'head.html';
include 'Dataconnectie.php';


$selectie=restaurantselectie($_POST['adres']);

if (empty($_POST["restaurant"])) {
    $query = "SELECT restaurant_id, restaurantnaam, straatnaam, imgurl FROM restaurant WHERE restaurant_id IN (".$selectie.")";
}
else {
	$query = "SELECT restaurant_id, restaurantnaam, straatnaam, imgurl FROM restaurant WHERE type = '".$_POST["restaurant"]."' AND restaurant_id IN (".$selectie.")";
	}
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
?>
<form action="restaurantlijst.php" method="post">
<input type="hidden" name="adres" value="<?php echo $_POST['adres'] ?>">
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

<div class="ad">
<a href="https://www.dominos.nl/?gclid=EAIaIQobChMIhK6c_tmt1wIVUxbTCh1BxwSYEAAYASAAEgLAbPD_BwE" target="_blank">
<img src="img/adpocaplypse.jpg">
</a>
</div>
</form>

<div class="title">
<H1>Zoekresultaten</H1>
</div>

<div class="list">


<?php $x=0; 

if ($result->num_rows == 0){
	echo "Er zijn geen resultaten gevonden";
}

while($row = mysqli_fetch_assoc($result)){
$x++;
    echo"<table class=\"rl\">";
	echo"<tr><td class=\"c1\"><a href=\"Restaurant1.php?id=".$row['restaurant_id']."\">".$row['restaurant_id']."</a></td>";
	echo"<td  class=\"c2\" >";
    if (!empty($row['imgurl'])) {echo "<img src=\"".$row['imgurl']."\" width=\"100\" >";}
    echo"</td><td class=\"c3\">";
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