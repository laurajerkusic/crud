<?php

$host = 'localhost';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = '1234';

$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$con) {
    die(pg_last_error($con));
}

?>
