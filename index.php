<?php

if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}else $page = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<?php

require_once("./pages/header.php");

switch($page)
{
 case 1:
  require_once("./pages/home.php");
  break;
  case 2:
   require_once("./pages/contact.php");
   break;
   case 3:
    require_once("./pages/about.php");
    break;
    default:
    require_once("./pages/404.php");
    break;
}

require_once("./pages/footer.php");
?>

</body>
</html>