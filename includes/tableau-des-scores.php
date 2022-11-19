<?php
session_start();
require 'database_inc.php';
require 'incription-traitement.php';

if(!empty($diffPartie)  && !empty($score) && !empty($temps)){
    $diffPartie = htmlspecialchars($_POST["difficulte de la partie"]);
    $score = htmlspecialchars($_POST["score de la partie"]);
    $temps = htmlspecialchars($_POST["date et heure de la partie"]);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($pseudo) <= 100){ 
                if(strlen($email) <= 100){ 
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($password === $password_retype){ 
                            $password = hash('sha256',$password);
                    
    
                            $insert= $bdd = new PDO('mysql:host=localhost;dbname=puissance4', $user, $pass);
                            $sth = $dbco->prepare("
                                INSERT INTO scores(difficulte_de_la_partie, score_de_la_partie, date_et_heure_de_la_partie )
                                VALUES(:difficulte de la partie, :score de la partie, :date ete heure de la partie)");
                            $sth->bindParam(':difficulte_de_la_partie',$diffPartie);
                            $sth->bindParam(':score de la partie',$score);
                            $sth->bindParam(':date et heure de la partie',$temps);
                            $sth->execute();
                        }else{ header('Location: scores.php?reg_err=password');}
                    }else{ header('Location: scores.php?reg_err=email');}
                }else{ header('Location: scores.php?reg_err=email_length');}
            }else{ header('Location: scores.php?reg_err=pseudo_length');}
        }else{ header('Location: scores.php?reg_err=already');}

}
?>