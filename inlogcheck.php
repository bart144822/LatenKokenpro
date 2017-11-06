<?php
//variabelen aanmaken met basis waarden tegen de notice van undefined index.
$email = ""
$wachtwoordinlog = ""
//waarde meegeven aan de variabelen van het inlog forum.
$email = $_POST["email"];
$wachtwoordinlog = md5($_POST["wachtwoordinlog"]);

//connectie met de database
include 'dataconnectie.php';

//de query voor het ophalen van het wachtwoord die vergeleken wordt met het $wachtwoordinlog
$query = "SELECT ('wachtwoord')
FROM klant
WHERE email = $email";

$wachtwoordmd5 = mysqli_query($db, $query);

if($wachtwoordinlog == $wachtwoordmd5){
	include "head.php"
}
else{
	Echo "Het opgegeven wachtwoord en/of emailadres zijn niet correct";
}

?>