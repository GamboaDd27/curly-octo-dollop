<?php
echo 'xd';
$pdo = require 'Connect.php';
$response = $pdo->query('SELECT * FROM pg_catalog.pg_tables');
$origin=$response->fetch();

foreach($origin as $key=>$item){
    echo "$key=> $item <br>";
}
