<?php 
   $con = mysql_connect("localhost","root","root");
mysql_select_db("bpf", $con);

if($_POST['type'] == 0){
    
      
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 

 
$sql="INSERT INTO news (title, type, content)
VALUES
('$_POST[title]','$_POST[type]','$_POST[content]')";


 $query = mysql_query("SELECT * FROM newsletter");
                while($rows = mysql_fetch_array($query)):
     $msg = $_POST[content];
$obj = $_POST[title];
 $email = $rows['email'];
$msg = wordwrap($msg,70);
mail($email,$obj,$msg);
echo "$email";
endwhile;
    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 
mysql_close($con);
    
    
    
}





if($_POST['type'] == 1 || $_POST['type'] == 2){
 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 

 
$sql="INSERT INTO news (title, type, media, content)
VALUES
('$_POST[title]','$_POST[type]','$_POST[media]','$_POST[content]')";
  $query = mysql_query("SELECT * FROM newsletter");
                while($rows = mysql_fetch_array($query)):
     $msg = $_POST[content];
$obj = $_POST[title];
 $email = $rows['email'];
$msg = wordwrap($msg,70);
mail($email,$obj,$msg);
echo "$email";
endwhile;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 
mysql_close($con);
    
}

if($_POST['type'] == 3){
    $target_dir = "pictures/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "fichier déjà upload ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "fièchier trop lourd";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "mauvais format";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "erreur, fichier non-uploadé";
// if everything is ok, try to upload file
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo  $target_file;
      
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 
$sql="INSERT INTO news (title, type, content, img)
VALUES
('$_POST[title]','$_POST[type]','$_POST[content]', '$target_file')";
  $query = mysql_query("SELECT * FROM newsletter");
                while($rows = mysql_fetch_array($query)):
     $msg = $_POST[content];
$obj = $_POST[title];
 $email = $rows['email'];
$msg = wordwrap($msg,70);
mail($email,$obj,$msg);
echo "$email";
endwhile;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 

    } else {
        echo "erreur, fichier pas upload";
    }
}
}
?>