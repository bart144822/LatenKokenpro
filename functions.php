<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 11/02/2017
 * Time: 11:04
 *///deze functie maakt van een adres cordinaten
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

// deze functie geeft van 2 gegeven cordinaten het verschil in kilometers
function distance($lat1, $lon1, $lat2, $lon2) {

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    //$unit = strtoupper($unit);
    return ($miles * 1.609344);

}


//echo
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
            $laag.=", ";
        }
    }
    return substr($laag, 0, -2);
}



//deze funtie maakt een order en geeft het als resultaat
function order($x)
{

    $date = date('Y-m-d');
    //echo $date;
    $query = "INSERT INTO `orders` (`order_id`, `klant_klant_id`, `order_date`) VALUES (NULL, '$x', '$date')";
    include "Dataconnectie.php";
    $result = mysqli_query($db, $query);
    if (!$result) {
        die("Database query failed.");
    } else {
        $query2 = " SELECT order_id FROM `orders` WHERE klant_klant_id IN(" . $x . ") ORDER BY order_id DESC";
        $result2 = mysqli_query($db, $query2);
        if (!$result2) {
            die("Database query failed.");
        }


    }
    while ($row = mysqli_fetch_assoc($result2)) {
        return $row['order_id'];
    }
}
//echo order(3);





?>
