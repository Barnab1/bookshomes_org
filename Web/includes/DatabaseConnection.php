<?php

$db_hostame = 'localhost';
$db_database = 'marie';
$db_username = 'root';
$db_password = '123';

$connection = new mysqli($db_hostame,$db_username,$db_password,$db_database);

if ($connection->connect_error) die($connection->connect_error);






