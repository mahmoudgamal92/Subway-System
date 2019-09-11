<?php
$dbname="train";
try
{

$DB=new PDO("mysql:host=localhost",'root','')or die("<h1>Connection Failed</h1>");
$DB->exec("CREATE DATABASE IF NOT EXISTS $dbname");
$DB=new PDO("mysql:host=localhost;dbname=$dbname",'root','')or die("<h1>Connection Failed</h1>");
function  getrows($q,$st_array)
{
	$stm=$GLOBALS['DB']->prepare($q);
	$stm->execute($st_array);
	return $stm->fetchAll();
}
function doQuary($q)
{
	$GLOBALS['DB']->exec($q);
}
}
catch (PDOException $e)
{


echo "<h1>Connection Failed".$e->getMessage()." </h1>";
}
?>