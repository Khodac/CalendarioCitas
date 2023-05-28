<?php
try
{
	$bdd = new PDO('mysql:host=mysql;port=3306;dbname=calendar;charset=utf8', 'indice', '1234');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
