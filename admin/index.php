<?php

session_start();

if(isset($_SESSION["loggedIn"]))
{
 echo "Hoş geldin " . $_SESSION["username"];
}else echo "Giriş yapılmamış!";

?>