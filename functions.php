<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 11/02/2017
 * Time: 11:04
 */
function GetAdres($adres){

    $adres = str_replace(" ", "+", $adres); // alle spaties worden een +

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

$locationr=GetAdres("meerweg 3 9606 pm kropswolde");

$locationu=GetAdres("meerweg 35 9606 pm kropswolde");

list($location1, $location2)= explode(' ',$locationu);
list($location3, $location4)= explode(' ',$locationr);

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


