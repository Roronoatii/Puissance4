<?php 
function connectDatabase(){
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=puissance4', $user, $pass);
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=puissance4;charset = utf8','root','root');
        return $bdd;
    }catch(Exception $e)
    {
        die('erreur'.$e->getMessage());
    }
}
?> 