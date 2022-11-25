<?php
require 'database_inc.php';

session_start();
if (isset($_POST['submit'])) {
    $emailpost = $_POST['email'];
    $passwordpost = $_POST['password'];

    if (filter_var($emailpost, FILTER_VALIDATE_EMAIL, $options) && filter_var($passwordpost, FILTER_SANITIZE_STRING, $options)){   
        'SELECT * from utilisateur WHERE email = $emailpost AND mot_de_passe = $passwordpost';
        $testdb=new PDO('mysql:host=localhost;dbname=puissance4', $user, $pass);
        $sth = $dbco->prepare("SELECT * from utilisateur WHERE email = $emailpost AND mot_de_passe = $passwordpost");
        if ((!empty($emailpost)) && (!empty($passwordpost))){
            if(isset($_SESSION['utilisateur']) AND $_SESSION['utilsateur']>=1){
                $password=$_SESSION['utilisateur'];
                $password++ ;
                $_SESSION['utilisateur']=$password;
            }else{
                $password=1 ;
                $_SESSION['utilisateur']=$password ;
            }
        }else{
            echo'login password incorrect';
            echo'else';
        }
    }
    else{
        echo'login ou password incorrect';
        echo'else2';
    }
}

?>