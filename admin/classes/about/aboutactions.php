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

//education actions


//Add education actions
if(isset($_POST["addEducation"]))
{

 if(empty($_POST["educationName"]) OR empty($_POST["graduationDate"]))
 {

  echo "<div role='alert'>Please fill out all the fields!</div>";
   }else{

 $about->educationName = security($_POST["educationName"]);
 $about->graduationDate = security($_POST["graduationDate"]);

 if($about->addEducation()->rowCount() > 0)
 {

  echo "<div role='alert'>The education is added successfully</div>";
 }else echo "<div role='alert'>The education could not be added!</div>";
}

}
}

//change education actions
if(isset($_POST["changeEducation"]))
{

 if(empty($_POST["education"]) OR empty($_POST["graduationDate"]) OR empty($_POST["id"]))
 {

  echo "<div role='alert'>Please fill out all the fields!</div>";
 }else{

 $about->educationId = security($_POST["id"]);
  $about->educationName = security($_POST["education"]);
 $about->graduationDate = security($_POST["graduationDate"]);

 if($about->changeEducation()->rowCount() > 0)
 {

  echo "<div role='alert'>The education changed successfullly</div>";
 }else echo "<div role='alert'>The education could not be changed!</div>";
 
 }
}

//delete education actions
if(isset($_POST["deleteEducation"]))
{

 if(empty($_POST["id"]))
 {

  echo "<div role='alert'>Please fill out all the fields!</div>";
 }else{

  $about->educationId = security($_POST["id"]);

  if($about->deleteEducation()->rowCount() > 0)
  {

   echo "<div role='alert'>The education deleted successfully</div>";
  }else echo "<div role='alert'>The education could not be deleted!</div>";
 }

}