<?php

require_once("../settings/Settings.php");

$settings = new Settings($db->conn);
?>

<div>
 <h1>Manage Settings</h1>
 <p>You can change the settings of your website here</p>
 <form action="" method="POST">
  <h2>Meta Contents</h2>
  <table>
   <tr>
    <td>Title</td>
    <td><input type="text" required name="title" placeholder="Please enter a title" value="<?php echo security($settings->title); ?>" /></td>
</tr>
<tr>
 <td>Description</td>
 <td><textarea required name="description" placeholder="Please enter a description" /><?php echo security($settings->description); ?></textarea></td>
</tr>
<tr>
 <td>Keywords</td>
 <td><input type="text" required name="keywords" placeholder="Please enter keywords" value="<?php echo security($settings->keywords); ?>" /></td>
</tr>
</table>
<h2>Sections</h2>
<table>
<tr>
<td>Header</td>
 <td><input type="text" required name="header" placeholder="Please enter text of the header" value="<?php echo security($settings->header); ?>" /></td>
</tr>
<tr>
 <td>Footer</td>
 <td><input type="text" required name="footer" placeholder="Please enter text of the footer" value="<?php echo security($settings->footer); ?>" /></td>
</tr>
</table>
<h2>E-mail</h2>
<table>
  <tr>
    <td>E-mail Server</td>
    <td><input type="text" required name="emailServer" placeholder="Please enter an email server" value="<?php echo security($settings->email); ?>" /></td>
</tr>
 <tr>
  <td>E-mail Adress</td>
  <td><input type="email" required name="email" placeholder="Please enter  e-mail adress" value="<?php echo security($settings->email); ?>" /></td>
</tr>
<tr>
 <td>E-mail Password</td>
 <td><input type="password" required name="password" placeholder="Please enter your e-mail password" value="<?php echo security($settings->password); ?>" /></td>
</tr>
<tr>
 <td><button type="submit" name="submit">Save Changes</button></td>
</tr>
</table>
</form>
</div>