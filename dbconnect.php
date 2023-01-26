<?php


require_once __DIR__ . "/vendor/autoload.php";


$gunungcollection = (new MongoDB\Client)->db_gunung->gunung;
$layanancollection = (new MongoDB\Client)->db_gunung->layanan;
$formcollection = (new MongoDB\Client)->db_gunung->form;
$admincollection = (new MongoDB\Client)->db_gunung->admin;


?>