<?php

class Settings
{

 public $title;
 public $description;
 public $keywords;

 public function __CONSTRUCT($conn)
 {
  $settings = $conn->prepare("SELECT * FROM settings LIMIT 1");
  $settings->execute();

  if($settings->rowCount() > 0)
    {
     
$setting = $settings->fetch(PDO::FETCH_OBJ);

   $this->title = $setting->Title;
   $this->description = $setting->Description;
   $this->keywords = $setting->Keywords;
  }else
  {
   exit("There is a problem on setting page");
  }
 }
}