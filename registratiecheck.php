<!DOCTYPE html> 
<html> 
<head> 
<title>registratie check</title> 
</head>
<link rel="stylesheet" type="text/css" href="registratiecheckbuttonsstyle.css"> 
<body> 
<?php
include "Dataconnectie.php";
$email = $_POST["email"];
$voornaam=ucwords ($_POST["voornaam"]);
$achternaam= ucwords($_POST["achternaam"]);
$postcode=$_POST["postcode"];
$straatnaam=$_POST["straatnaam"];
$huisnummer=$_POST["huisnummer"];
$plaatsnaam=$_POST["plaatsnaam"];
$wachtwoord= $_POST['wachtwoord'];
$md5wachtwoord = md5($wachtwoord);
$wachtwoord2= $_POST['wachtwoord2'];
$Error="";
$adres= $straatnaam." ".$huisnummer." ".$postcode." ".$plaatsnaam;


function GetAdres($adres){

    $adres = str_replace(" ", "+", $adres); // alle spaties worden een +

    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$adres&key=AIzaSyAH6pW-QzhczP66NDe_BIBpejdzc1Hh1wA";

    $response = file_get_contents($url);

    $json = json_decode($response,TRUE); //het resultaat word in een array gezet
  if ($json["status"]=="ZERO_RESULTS"){
      //var_dump($json);
      return "a";
  }else{
      //var_dump($json);
      return "";
  }

}

If($_SERVER["REQUEST_METHOD"] == "POST"){
	//checken of de voornaam alleen lettets, hoofdletters en spaties heeft
	if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)){
		$Error .= "De ingevoerde voornaam is niet van toepassing <br/>";
	}
	//checken of de achternaam alleen lettets, hoofdletters en spaties heeft
	if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)){
		$Error .= "De ingevoerde achternaam is niet van toepassing <br/>";
	}
	if(GetAdres("$adres")=="a"){
	$Error .= "Voer een geldig adres in </br>";
	}
	if (!preg_match("/^[A-Z0-9 ]*$/",$postcode)){
		$Error .= "De ingevoerde postcode is niet van toepassing.<br/>";
	}
	//straatnaam checken of er geen cijfers in staan
	if (!preg_match("/^[a-zA-Z ]*$/",$straatnaam)){
		$Error .= "Een straatnaam mag geen cijfers bevatten. <br/>";
	}
	//check of het huisnummer alleen uit getallen bestaat
	if (!preg_match("/^[A-Z0-9 ]*$/",$huisnummer)){
		$Error .= "Voer een geldig huisnummer in.<br/>";
	}
	//plaastnaam checken of er geen cijfers in staan
	if (!preg_match("/^[a-zA-Z ]*$/",$plaatsnaam)){
		$Error .= "Een plaatsnaam mag geen cijfers bevatten";
	}
	//check of de wachtwoorden overeen komen
	if($wachtwoord==$wachtwoord2){
	}
	else{
		$Error .= "de twee ingevoerde wachtwoorden komen niet overeen.</br>";
	}
}

//if(database query voor het checken of gegevens al in de database staan){
	//als alles goed is ingevuld en de email nog niet in de database staat wordt het toegevoegd aan de database en dan krijgt de klant de optie om naar het homescreen te gaan of in te loggen. 
	if ($Error == ""){
		$query = "INSERT INTO `klant` (`klant_id`, `voornaam`, `achternaam`, `straatnaam`, `postcode`, `huisnummer`, `plaatsnaam`, `email`, `wachtwoord`) VALUES ('','$voornaam', '$achternaam', '$straatnaam', '$postcode', '$huisnummer', '$plaatsnaam', '$email', '$md5wachtwoord')";
		mysqli_query($db, $query);
		include "registratiecheckbuttons.php";
	}
	//weergave van alle errors als die er zijn
	else{
		echo "$Error";
	}
//}
include "Dataeinde.php";

?>
</body> 
</html> 
