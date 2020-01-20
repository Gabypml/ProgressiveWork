<?php
require('index.php');
$errors = [];

//verifier les isset(si ça existe) & les empty(si c'est vide(ici ! pour voir si c'est rempli)) 
if(isset($_POST["email"]) && !empty($_POST["email"])){

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //Sanitization email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { ///Si c'est faux, mettre erreur
        $errors['email'] = "Cette address est invalide."; //souci avec cette méthode 
     }
}
     
if(isset($_POST["name"]) && !empty($_POST["name"])){

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    if (filter_var($name, FILTER_VALIDATE_STRING) == false) {
        $errors['name'] = "Mettez votre nom";
     }
}

if(isset($_POST["surname"]) && !empty($_POST["surname"])){

    $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
    if (filter_var($surname, FILTER_VALIDATE_STRING) == false) {
        $errors['surname'] = "Mettez votre prénom";
     }
}