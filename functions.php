<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 11/02/2017
 * Time: 11:04
 */
function GetAdres($adres){

    $adres = str_replace(" ", "+", $adres); // alle spaties worden een +

    //$url="http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($add);
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$adres&key=AIzaSyAH6pW-QzhczP66NDe_BIBpejdzc1Hh1wA";

    $response = file_get_contents($url);

    $json = json_decode($response,TRUE); //het resultaat word in een array gezet
  if ($json["status"]=="ZERO_RESULTS"){
      //var_dump($json);
      return"ingevulde adres klopt niet";
  }else{
      //var_dump($json);
      return ($json['results'][0]['geometry']['location']['lat']." ".$json['results'][0]['geometry']['location']['lng']);
  }

}

//$locationr=GetAdres("meerweg 3 9606 pm kropswolde");
//$ad="meerweg 35 9606 pm kropswolde";
//echo GetAdres($ad);

//list($location1, $location2)= explode(' ',$locationu);
//list($location3, $location4)= explode(' ',$locationr);

//echo "$location1. $location2. $location3. $location4";


//var_dump($locationu);
function distance($lat1, $lon1, $lat2, $lon2) {

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    //$unit = strtoupper($unit);
    return ($miles * 1.609344);

}


//echo distance($location1, $location2, $location3, $location4) . " Kilometers<br>";
function restaurantselectie($adres){
$laag="";
include "Dataconnectie.php";   
$query = "SELECT restaurant_id, straatnaam, huisnummer, postcode, plaatsnaam, restaurantnaam FROM restaurant ";
$result = mysqli_query($db, $query);
if (!$result) { 
die("Database query failed.");
}
$klantadres = GetAdres($adres);
//$Radres=array("");
while($row = mysqli_fetch_assoc($result)){


    $Radres=GetAdres($row['straatnaam'], $row['huisnummer'], $row['postcode'], $row['plaatsnaam']);
//var_dump($Radres);


    list($location1, $location2)= explode(' ',$klantadres);
    list($location3, $location4)= explode(' ',$Radres);
    echo"<br />";
    $distance=distance($location1, $location2, $location3, $location4);
    //echo $distance;
    if ($distance<10){
        $laag.=$row['restaurant_id'];
        $laag.=" OR ";
    }
}
 return substr($laag, 0, -3);
}




// $distance=distance($location1, $location2, $location3, $location4);


echo restaurantselectie("Oude Ebbingestraat 86 9712 HM Groningen");
// //include 'Dataeinde.php';?>