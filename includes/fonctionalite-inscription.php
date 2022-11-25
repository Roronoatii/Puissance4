<?php
session_start();
require 'database_inc.php';


$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$motDePasse = $_POST["mot de passe"];

$options = array(
    'pseudo' => FILTER_SANITIZE_STRING, 
        array(
            'min_range' => 4 
        ),
    'email' => FILTER_VALIDATE_EMAIL, 
    'motDePasse' => FILTER_SANITIZE_STRING,
            array(
            'min_range' => 8 
        )
);

if  (filter_var($pseudo, FILTER_SANITIZE_STRING, $option) && filter_var($email, FILTER_VALIDATE_EMAIL, $options) && filter_var($motDePasse, FILTER_SANITIZE_STRING, $options)) {
    if(!empty($pseudo)  && !empty($email) && !empty($motDePasse)){
        $dbco = new PDO('mysql:host=localhost;dbname=puissance4', $user, $pass);
        $sth = $dbco->prepare("
            INSERT INTO utilisateur(pseudo, email, mot_de_passe )
            VALUES(:pseudo, :mail, :mot de passe)");
        $sth->bindParam(':pseudo',$pseudo);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':mot de passe',$motDePasse);
        $sth->execute();
    }
}

?>