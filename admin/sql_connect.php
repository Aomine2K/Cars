<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbName = 'rental';

$mysqli = new mysqli($host,$user,$password,$dbName);
$mysqli->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
$mysqli->query("SET CHARSET utf8");

if($error = $mysqli->connect_errno) {
    die("Wystąpił błąd! Błąd połaczenia nr ".$error);
}
?>