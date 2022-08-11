<?php

require_once("../classes/Home.php");

$homeClass = new Home($db->conn);

$home = $homeClass->getHome()->fetch(PDO::FETCH_OBJ);

?>
<div>
 <h1>Manage The Home Page</h1>
 <p>You can change the fields in the home page above</p>

 <form action="" method="POST">
  <table>
   <tr>
    <td>Headline: </td>
    <td><input type="text" required name="headline" placeholder="Enter a headline" value="<?php echo $home->Headline; ?>" /></td>
</tr>
<tr>
 <td>Content: </td>
 <td><textarea required name="content" placeholder="Enter the content"><?php echo $home->Content; ?></textarea></td>
</tr>
<tr>
 <td><button type="submit" name="change">Save Changes</button></td>
</tr>
</table>
</form>
</div>