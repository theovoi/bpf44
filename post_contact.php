<?php
$errors=[];
$emails=['adressemailquetuveux.fr'];

if(!array_key_exists('name', $_POST) || $_POST['name']==''){
    $errors['name'] = 'Vous n\'avez pas renseigné votre nom';
}
if(!array_key_exists('email', $_POST) || $_POST['email']=='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Vous n\'avez pas renseigné votre email';
}
if(!array_key_exists('message', $_POST) || $_POST['message']==''){
    $errors['message'] = 'Vous n\'avez pas renseigné votre message';
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
}
else{
    $_SESSION['success'] = 1;
    $message= $_POST['message'];
    $headers= 'FROM : ' . $_POST['email'];
    mail('adressemailquetuveux','Formulaire de ' . $_POST['name'], $message, $headers);
    header('Location: contact.php');
}
