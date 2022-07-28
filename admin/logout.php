<?php

session_start();

if(!isset($_SESSION["loggedIn"]))
{
 header("Location: login.php");
}else{
 session_destroy();
 header("Location: login.php");
}

?>