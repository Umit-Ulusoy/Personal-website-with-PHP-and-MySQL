<?php

if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}else $page = NULL;
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

if($page == "home")
{
    require_once("./pages/home.php");
}else if($page == "contact")
{
    require_once("./pages/contact.php");
}else if($page == "about")
{
    require_once("./pages/about.php");
}else require_once("./pages/home.php");

require_once("./pages/footer.php");
?>

</body>
</html>