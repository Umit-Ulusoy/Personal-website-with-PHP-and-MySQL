<?php

class ChangeSettings
{

 public $title;
 public $description;
 public $keywords;
 public $header;
 public $footer;
 public $emailServer;
 public $email;
 public $password;

public $conn;

public function __CONSTRUCT($db)
{
 $this->conn = $db;
}

public function changeSettings()
{

 $change = $this->conn->prepare("UPDATE settings SET Title=?, Description=?, Keywords=?, Header=?, Footer=?, EmailServer=?, Email=?, Password=?");

 $change->bindParam('1', $this->title, PDO::PARAM_STR);
 $change->bindParam('2', $this->description, PDO::PARAM_STR);
 $change->bindParam('3', $this->keywords, PDO::PARAM_STR);
 $change->bindParam('4', $this->header, PDO::PARAM_STR);
 $change->bindParam('5', $this->footer, PDO::PARAM_STR);
 $change->bindParam('6', $this->emailServer, PDO::PARAM_STR);
 $change->bindParam('7', $this->email, PDO::PARAM_STR);
 $change->bindParam(8, $this->password, PDO::PARAM_STR);
 

 $change->execute();

 return $change;
}
}