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
      return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
  }

}

//echo GetAdres("meerweg 35 9606 pm kropswolde");