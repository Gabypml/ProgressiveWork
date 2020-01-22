<?php
// require('index.php');



$bdd= new PDO("mysql:host=localhost;dbname=Portfolio;charset=UTF8;" , "root", "root");
   


$MessageError = "";
$GG = "";
$errors = [];
$ok = [];

if (isset($_POST['submit'])) {
    //verifier les isset(si ça existe) & les empty(si c'est vide(ici "!" pour voir si c'est rempli)) 
    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //Sanitization email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { ///Si c'est faux, mettre erreur
            $errors['email'] = "Cette addresse est invalide.";  
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


    //// Verifier si tout existe et si tout est vide pour voir le message d'erreur 
    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['surname'])){
        if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['surname'])){
            $MessageError = "Veuillez remplir les champs";
        }
    }
    //// Je prépare ma bdd, je dis ce que je vais vouloir prendre. ( C'est du SQL ici)
    $req = $bdd->prepare("INSERT INTO infos(nom, mail)VALUES(?,?)");

    ///Ici on va lui dire quoi mettre dedans ( dans le truc en haut )
    $req->execute(array($name, $email));
    $GG = "Votre message a été envoyé avec succès";
}


