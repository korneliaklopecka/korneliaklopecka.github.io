<?php
$citiesString = file_get_contents("./cities.json");

if($citiesString == false){
    die('Taki plik nie istnieje');
}

$citiesJSON = json_decode($citiesString, true);
if($citiesJSON == null){
    die('Błąd!');
}

$returnedArray = [];

foreach($citiesJSON as $cityData){
    if(stripos($cityData['name'], $_GET['name']) === False) {
        continue;
    }
    if(count($returnedArray) === 10){
        break;
    }
    $returnedArray[] = $cityData;
}

echo json_encode($returnedArray);
