<?php

require_once("./classes/About.php");

$about = new About($db->conn);

?>
<div>
 <h1>Who am I?</h1>
 <p>Let's learn ho I am.</p>
 <h2>Education</h2>
<?php

$educations = $about->getEducations();

while($education = $educations->fetch(PDO::FETCH_ASSOC))
{
 echo $education["Education"] . " - " . $education["GraduationDate"] . "<br />";
}
 ?>
 <h2>Certificates</h2>
 None of Developments - 2016 <br />
 A1.3 English - 2022
</div>