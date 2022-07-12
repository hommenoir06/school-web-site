<?php

try
{
 
$bdd = new PDO('mysql:host=localhost;dbname=projet_tp', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
