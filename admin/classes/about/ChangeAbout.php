<?php

class ChangeAbout
{

 public $headline;
 public $content;
 public $educationId;
 public $educationName;
 public $graduationDate;
 public $certificateId;
 public $certificateName;
 public $issuedDate;

 private $conn;

 public function __CONSTRUCT($db)
 {

  $this->conn = $db;
 }

 public function changeAbout()
 {

  $changeAbout = $this->conn->prepare("UPDATE about SET Headline=?, Content=? WHERE Id='1'");

  $changeAbout->bindParam(1, $this->headline, PDO::PARAM_STR);
  $changeAbout->bindParam(2, $this->content, PDO::PARAM_STR);

  $changeAbout->execute();

  return $changeAbout;
 }

 public function addEducation()
 {

  $addEducation = $this->conn->prepare("INSERT INTO educations SET Education=?, GraduationDate=?");

  $addEducation->bindParam(1, $this->educationName, PDO::PARAM_STR);
  $addEducation->bindParam(2, $this->graduationDate, PDO::PARAM_STR);

  $addEducation->execute();

  return $addEducation;
 }

 public function changeEducation()
 {

  $changeEducation = $this->conn->prepare("UPDATE educations SET Education=?, GraduationDate=? WHERE Id=?");

  $changeEducation->bindParam(1, $this->educationName, PDO::PARAM_STR);
  $changeEducation->bindParam(2, $this->graduationDate, PDO::PARAM_INT);
  $changeEducation->bindParam(3, $this->educationId, PDO::PARAM_INT);

  $changeEducation->execute();

  return $changeEducation;
 }

 public function deleteEducation()
 {

  $deleteEducation = $this->conn->prepare("DELETE FROM educations WHERE Id=?");

  $deleteEducation->bindParam(1, $this->educationId, PDO::PARAM_INT);

  $deleteEducation->execute();

  return $deleteEducation;
 }
 
 public function addCertificate()
 {

  $addCertificate = $this->conn->prepare("INSERT INTO certificates SET Certificate=?, IssuedDate=?");

  $addCertificate->bindParam(1, $this->certificateName, PDO::PARAM_STR);
  $addCertificate->bindParam(2, $this->issuedDate, PDO::PARAM_INT);

  $addCertificate->execute();

  return $addCertificate;
 }

 public function changeCertificate()
 {

  $changeCertificate = $this->conn->prepare("UPDATE certificates SET Certificate=?, IssuedDate=? WHERE Id=?");

  $changeCertificate->bindParam(1, $this->certificateName, PDO::PARAM_STR);
  $changeCertificate->bindParam(2, $this->issuedDate, PDO::PARAM_INT);
  $changeCertificate->bindParam(3, $this->certificateId, PDO::PARAM_INT);

  $changeCertificate->execute();

  return $changeCertificate;
 }

 public function deleteCertificate()
 {

  $deleteCertificate = $this->conn->prepare("DELETE FROM certificates WHERE Id=?");

  $deleteCertificate->bindParam(1, $this->certificateId, PDO::PARAM_INT);

  $deleteCertificate->execute();

  return $deleteCertificate;
 }
}