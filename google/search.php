<?php
$citiesString = file_get_contents("./cities.json");

if($citiesString == false){
    die('No such file or directory');
}

$citiesJSON = json_decode($citiesString, true);
if($citiesJSON == null){
    die('Could not parse JSON');
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