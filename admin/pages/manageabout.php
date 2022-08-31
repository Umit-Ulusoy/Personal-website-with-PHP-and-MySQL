<?php

require_once("../classes/About.php");

$about = new About($db->conn);

$getAbout = $about->getAbout()->fetch(PDO::FETCH_OBJ);
$getEducation = $about->getEducations();
$getCertificate = $about->getCertificates();

?>

<div>
 <form action="?page=4" method="POST">
  <input type="text" required name="headline" placeholder="Enter the headline" value="<?php echo $getAbout->Headline; ?>" /><br />
  <textarea name="content" placeholder="Enter the content"><?php echo $getAbout->Content; ?></textarea>
  <button type="submit" name="changeAbout">Save Changes</button>
  <input type="reset" />
</form>
</div>

<h1>Add a new Education</h1>
<div>
  <form action="?page=4" method="POST">
    
<input type="text" name="education" required placeholder="Enter an education" />
<input type="number" required name="graduationDate" />
<button name="addEducation" type="submit">Add a new one</button>
</form>
</div>
<div>
 <h2>Manage Educations</h2>
 <?php

 if($getEducation->rowCount() > 0)
 {
while( $education = $getEducation->fetch(PDO::FETCH_OBJ))
{?>
<div>
 <form action="?page=4" method="POST">
  <input type="text" required name="education" placeholder="Enter the education" value="<?php echo $education->Education; ?>" /> - 
  <input type="text" required name="graduationDate" placeholder="Enter the graduation date" value="<?php echo $education->GraduationDate; ?>" /> 
  <input type="hidden" name="id" value="<?php echo $education->Id; ?>" />
  <button type="submit" name="changeEducation">Edit</button>
  <button type="submit" name="deleteEducation">Delete</button>
  <button type="reset">Reset</button>
</form>
</div>

<?php }
 }else echo "<div role='alert'>There is no any education info</div>";
 ?>
 </div>

 <h1>Add a new Certificate</h1>
<div>
  <form action="?page=4" method="POST">
    
<input type="text" name="certificate" required placeholder="Enter a certificate" />
<input type="number" required name="issuedDate" />
<button name="addCertificate" type="submit">Add a new one</button>
</form>
</div>

 <div>
 <h2>Manage Certificates</h2>
 <?php

 if($getCertificate->rowCount() > 0)
 {
while( $certificate = $getCertificate->fetch(PDO::FETCH_OBJ))
{?>
<div>
 <form action="?page=4" method="POST">
  <input type="text" required name="certificate" placeholder="Enter the certificate" value="<?php echo $certificate->Certificate; ?>" /> - 
  <input type="text" required name="issuedDate" placeholder="Enter the issued date" value="<?php echo $certificate->IssuedDate; ?>" /> 
  <input type="hidden" name="id" value="<?php echo $certificate->Id; ?>" />
  <button type="submit" name="changeCertificate">Edit</button>
  <button type="submit" name="deleteCertificate">Delete</button>
  <button type="reset">Reset</button>
</form>
</div>

<?php }
 }else echo "<div role='alert'>There is no any certificate info</div>";
 ?>
 </div>