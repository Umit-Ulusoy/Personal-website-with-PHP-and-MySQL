


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

 require_once("./classes/ChangeSettings.php");

 $change = new ChangeSettings($db->conn);

 if(isset($_POST["change"]))
 {


  $change->title = security($_POST["title"]);
  $change->description = security($_POST["description"]);
  $change->keywords = security($_POST["keywords"]);
  $change->header = security($_POST["header"]);
  $change->footer = security($_POST["footer"]);
  $change->emailServer = security($_POST["emailServer"]);
  $change->email = security($_POST["email"]);
  $change->password = security($_POST["password"]);

    if($change->changeSettings()->rowCount() > 0)
  {
   echo "<div role='alert'>Changes saved successfully</div>";
  }else echo "<div role='alert'>Changes could not save!</div>";


 }
}else if($page == 2)
{

  require_once("./classes/ChangeHome.php");

  $changeHome = new ChangeHome($db->conn);
  if(isset($_POST["change"]))
  {

    if(empty($_POST["headline"]) OR empty($_POST["content"]))
    {
      echo "<div role='alert'>Please fill out all the fields</div>";

          }else{

      $changeHome->headline = security($_POST["headline"]);
      $changeHome->content = security($_POST["content"]);

      if($changeHome->changeHome()->rowCount() > 0)
      {
        echo "<div role='alert'>Changes saved successfully</div>";
      }else echo "<div role='alert'>Changes could not be saved</div>";
    }
  }
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