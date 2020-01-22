<?php
// require('index.php');



$bdd= new PDO("mysql:host=localhost;dbname=Portfolio;charset=UTF8;" , "root", "root");
   



$errors = [];
$ok = [];

if (isset($_POST['submit'])) {
    //verifier les isset(si ça existe) & les empty(si c'est vide(ici "!" pour voir si c'est rempli)) 
    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //Sanitization email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { ///Si c'est faux, mettre erreur
            $errors['email'] = "Cette addresse est invalide."; //souci avec cette méthode, s'affiche pas 
        }
    }

    if(isset($_POST["name"]) && !empty($_POST["name"])){////// Même pb qu'en bas

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        if (!isset($name)) {
            $errors['name'] = "Mettez votre nom";
         }
    }

    if(isset($_POST["surname"]) && !empty($_POST["surname"])){//// Pb ici, les chiffres passent WHYYYY

        $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
        if (!isset($surname)) {
            $errors['surname'] = "Mettez votre prénom";
         }
    }

    if(!empty($errors))
{
    // je met les erreurs dans la session 

    $_SESSION['errors'] = $errors;

}
else 
{
    // tt est ok, dc j'initialise un message qui dit que tout est ok

    $ok['bon'] = 'tout est en ordre';
    
    $_SESSION['ok'] = $ok;
}

    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['surname'])){
        if(empty($_POST['email']) && empty($_POST['name']) && empty($_POST['surname'])){
            echo "Veuillez remplir les champs";
        }
    }
}


