<?php

session_start();

if(isset($_SESSION["loggedIn"]))
{
  header("Location: index.php?page=1");
  exit();
}else{

if(isset($_POST["submit"]))
{

  if(empty($_POST["username"]) OR empty($_POST["password"]))
  {
    echo "<div role='alert'>Please fill out all the fields!</div>";
  }

  require_once("../settings/Database.php");
  require_once("../settings/functions.php");
  require_once("./classes/Login.php");

  $db = new Database;
  $login = new Login($db->conn);

  $login->username = security($_POST["username"]);
  $login->password = security($_POST["password"]);

  if($login->login()->rowCount() > 0)
  {

    $manager = $login->login()->fetch(PDO::FETCH_OBJ);

    $_SESSION["loggedIn"] = true;
    $_SESSION["id"] = $manager->Id;
    $_SESSION["username"] = $manager->Username;
    echo "<div role='alert'>Logged in successfully</div>";
    header("refresh:3; url=index.php?page=1");
  }else{
    echo "<div role='alert'>Your username or password is incorrect! Please check and try again.</div>";
  }

}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>O Buu</title>
</head>
<body>

<div>
 <h1>Let's log in the panel</h1>
 <form action="" method="POST">
  <input type="text" required name="username" placeholder="Enter your username" /> <br />
  <input type="password" required name="password" placeholder="Enter your password" /> <br />
<button type="submit" name="submit">Log In</button>
</form>
</div>

</body>
</html>
<?php } ?>