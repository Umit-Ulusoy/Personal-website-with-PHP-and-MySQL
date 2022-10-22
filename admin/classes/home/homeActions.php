<?php

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

  ?>