<?php

$pdo = require 'Connect.php';
$json_string = './example.json';

$jsondata = file_get_contents($json_string);

$data = json_decode($jsondata, TRUE);

//populate tables
$response = $pdo->prepare('select table_name from information_schema.tables where table_schema=?');

$detail="public";
$response->execute([$detail]);

$origin=$response->fetchAll(PDO::FETCH_ASSOC);
foreach ($orign as $key => $table)
{
   $hashList[$table]=FALSE; 
}
$hashList = [];