<?php

$db_hostame = 'localhost';
$db_database = 'chatapp';
$db_username = 'root';
$db_password = '123';


try
{
    $connection = new mysqli($db_hostame,$db_username,$db_password,$db_database);
    $emails	= [];
    $query = 'SELECT * FROM `users`';
    $result = $connection->query($query);


    //For testing purpose 
    //$output = 'all is fine';


}catch(PDOException $e)
{
    $output = 'Error : ' . $e->getMessage() . 'in '. $e->getFile() . 'At this line : ' . $e->getLine();

    include __DIR__. '/../templates/html/home.html.php';

}catch(Throwable $e)
{
    $output = 'Error : ' . $e->getMessage() . 'in '. $e->getFile() . 'At this line : ' . $e->getLine();
    include __DIR__. '/../templates/html/home.html.php';
};




