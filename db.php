<?php
$pdo = require 'Connect.php';

$response = $pdo->prepare('select * from information_schema.tables where table_$

$detail="public";
$response->execute([$detail]);

$origin=$response->fetchAll(PDO::FETCH_ASSOC);



print_r($origin);

