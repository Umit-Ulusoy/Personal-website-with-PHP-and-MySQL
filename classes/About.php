<?php

class About
{

 private $conn;

 public function __CONSTRUCT($db)
 {
  $this->conn = $db;
 }

 public function getAbout()
 {

 $aboutQuery = $this->conn->prepare(
  "SELECT * FROM about LIMIT 1"
 );
 $aboutQuery->execute();

 return $aboutQuery;
}

public function getEducations()
{

 $educationsQuery = $this->conn->prepare(
  "SELECT * FROM educations"
 );
$educationsQuery->execute();

return $educationsQuery;
}

public function getCertificates()
{

 $certificatesQuery = $this->conn->prepare(
  "SELECT * FROM certificates"
 );
 $certificatesQuery->execute();

 return $certificatesQuery;
}

}