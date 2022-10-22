<?php

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

 ?>