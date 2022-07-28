<?php

if(!isset($_SESSION["loggedIn"]))
{
 header("Location: login.php");
 exit();
}

?>