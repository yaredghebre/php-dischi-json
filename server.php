<?php
$string_value = file_get_contents("dischi.json");       //chiamata e lettura file json
$dischi_array = json_decode($string_value, true);       //conversione in array associativo


$response = [
    "results" => $dischi_array
];
header("Content-Type: application/json");
echo json_encode($response);                            //invio dei dati in formato json

 