<?php

require_once("./classes/About.php");

$about = new About($db->conn);
$aboutFields = $about->getAbout()->fetch(PDO::FETCH_OBJ);

?>
<div>
 <h1><?php echo $aboutFields->Headline; ?></h1>
 <pre>
  <?php echo $aboutFields->Content; ?>
 </pre>
 <h2>Education</h2>
<?php

$educations = $about->getEducations();

while($education = $educations->fetch(PDO::FETCH_ASSOC))
{
 echo $education["Education"] . " - " . $education["GraduationDate"] . "<br />";
}
 ?>
 <h2>Certificates</h2>
 <?php

$certificates = $about->getCertificates();

while($certificate = $certificates->fetch(PDO::FETCH_ASSOC))
{
 echo $certificate["Certificate"] . " - " . $certificate["IssuedDate"] . "<br />";
}
 ?>

</div>