<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 11/02/2017
 * Time: 11:04
 */
function GetAdres($adres){

    $adres = str_replace(" ", "+", $adres); // alle spaties worden een +

    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$adres";

    $response = file_get_contents($url);

    $json = json_decode($response,TRUE); //het resultaat word in een array gezet

    return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);

}

echo GetAdres("meerweg 35 9606 pm kropswolde");