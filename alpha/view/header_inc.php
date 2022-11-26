<?php
require_once ('../includes/database_inc.php');
            session_start();

            $bdd = connectDatabase();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['submit'])) {
                    $emailpost = $_POST['email'];
                    $passwordpost = $_POST['password'];

                    $sql = "SELECT * FROM utilisateur WHERE email = :mail AND mot_de_passe = :mdp";
                    $request = $bdd->prepare($sql);
                    $request->bindParam(':mail', $emailpost);
                    $request->bindParam(':mdp', $passwordpost);
                    $request->execute();
                    $result= $request->fetch();
                    
                    if ($request->rowCount() < 1) {
                        echo "<p style='color:red;'>Email ou mot de passe incorrect</p>";
                    }else{
                        $_SESSION['email'] = $result['email'];
                        $_SESSION['password'] = $result['mot_de_passe'];
                        $_SESSION['id'] = $result['identifiant'];
                        $_SESSION['username'] = $result['pseudo'];
                        $_SESSION['loggedin'] = true;
                        header('Location: theme1-facile.php');
                    }              
                }
                     
            }
            
            
            

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     $isconnect = 'memory.php';
     $isconnect2 ='myaccount.php';
     $isconnect3 = 'Home.php';
     $isconnect4 = 'deconnexion.php';
}
else{
     $isconnect = 'login.php';
     $isconnect2 ='login.php';
     $isconnect3 = 'Home.php';
     $isconnect4 = 'deconnexion.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/header_inc.css">
    <link rel="stylesheet" href="./view/header.css">
</head>
<body>
    <header>
        <section>
            <nav class="box1">
                <h1>The power of Memory</h1>
                <div class="box2">
                    <a href="<?php echo $isconnect3?>" class="correctlink">ACCUEIL</a>
                    <a href="<?php echo $isconnect?>" class="correctlink">JEU</a>
                    <a href="register.php"class="correctlink">SCORES</a>
                    <a href="contact.php"class="correctlink">NOUS CONTACTER</a>
                    <a href="<?php echo $isconnect2?>"><i class="fa-regular fa-user correctlink"></i></a>
                    <a href="<?php echo $isconnect4?>" class="correctlink">SE DECONNECTER</a>
                </div>
            </nav>
        </section>
    </header>
</body>
</html>