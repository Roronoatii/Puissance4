<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    </head>
<body>
    <header>


    <?php
session_start();

include 'view/header_inc.php';
require('../includes/database_inc.php');

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
            echo "Email ou mot de passe incorrect";

        } else {
            $_SESSION['email'] = $emailpost;
            $_SESSION['password'] = $passwordpost;
            $_SESSION['id'] = $result['identifiant'];
            $_SESSION['username'] = $result['pseudo'];
            $_SESSION['loggedin'] = true;
            header('Location:myaccount.php?req_err=success');
        }
    }
}
?>

        
    </header>
    <section class="text">
        <h2>C O N N E X I O N</h2> 
    </section>
    <section class="login">     
        <form action="" method="post">       
            <div>
                <input class="mailInput" 
                type="email"name="email" 
                placeholder="Email">
            </div>
            <div>
                <input class="mailInput"
                type="password"name="password"
                placeholder="Mot de passe">
            </div>
            <div>
                <button class="btnConnect">Connexion</button> <a href="register.php" class="reglink">Incription</a>
                <input type="submit" name="submit">
            </div>
        </form> 
    </section>


    <footer>
    <?php
        include 'view/footer_inc.php';
    ?>
    </footer>
</body>



</html>