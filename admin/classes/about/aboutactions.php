<?php

if(isset($_POST["changeAbout"]))
{

 if(empty($_POST["headline"]) OR empty($_POST["content"]))
{

 echo "<div role='alert'>Please fill out all the fields</div>";
}else{

 $about->headline = security($_POST["headline"]);
 $about->content =  security($_POST["content"]);

 if($about->changeAbout()->rowCount() > 0)
 {

  echo "<div role='alert'>Changes saved successfully</div>";
 }else echo "<div role='alert'>There is no any change</div>";
}
}

//Education actions