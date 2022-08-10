<?php

require_once("./classes/Home.php");

$homeClass = new Home($db->conn);
$home = $homeClass->getHome()->fetch(PDO::FETCH_OBJ);

if($homeClass->getHome()->rowCount() > 0)
{
 echo "<h1>$home->Headline</h1>";
 echo "<pre>";
 echo $home->Subline;
 echo "</pre>";
}else header("Location: pages/404.php");

?>