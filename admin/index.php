


<?php

session_start();


if(!isset($_SESSION["loggedIn"]))
{
 header("Location: login.php");
}



require_once("../settings/Database.php");
require_once("../settings/functions.php");

if(isset($_GET["page"]))
{
 $page = security($_GET["page"]);
}else $page = 1;


$db = new Database;

if($page == 1)
{

 require_once("./classes/settings/ChangeSettings.php");

 $change = new ChangeSettings($db->conn);
 require_once("classes/settings/settingActions.php");

 
}else if($page == 2)
{

  require_once("./classes/home/ChangeHome.php");

  $changeHome = new ChangeHome($db->conn);
require_once("classes/home/homeActions.php");
  
}else if($page == 4)
{

  require_once("./classes/about/changeabout.php");

  $about = new ChangeAbout($db->conn);
  require_once("./classes/about/aboutactions.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Manage Website</title>
</head>
<body>

<?php

require_once("./pages/header.php");

if($page == 1)
{
 require_once("./pages/managesettings.php");
}else if($page == 2)
{
 require_once("./pages/managehome.php");
}else if($page == 3)
{
 require_once("./pages/managecontact.php");
}else if($page == 4)
{
 require_once("./pages/manageabout.php");
}else require_once("./pages/managesettings.php");
require_once("./pages/footer.php");

?>

</body>
</html>