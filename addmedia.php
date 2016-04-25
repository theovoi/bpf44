<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("bpf", $con);
 
$sql="INSERT INTO media (band, type, media)
VALUES
('$_POST[band]','$_POST[type]','$_POST[media]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 header('Location: admin.php');
  exit();
 
mysql_close($con)
?>