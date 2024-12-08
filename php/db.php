<?php

$HOST = "autorack.proxy.rlwy.net";
$USER = "root";
$PASSWORD = "TJhZmNnjJpnXrRVWtnUhlGvICMYdZxwx";
$DATABASE = "kaike_lira";
$PORT = 27972;

$client = new mysqli($HOST, $USER, $PASSWORD,
$DATABASE, $PORT);

if($client->connect_errno)
{
    $client->connect_error;
};
