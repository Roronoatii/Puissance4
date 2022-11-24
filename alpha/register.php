<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
    

</head>



<body>
    <header>
        <?php
            include 'view/header_inc.php';
        ?>
    </header>
    <section class="text" >
            <h1>I N S C R I P T I O N</h1>
    </section>
    <section class="login">
        <form action="traitement.php" method="post">
            <div>
                <input class="mailInput" type="email" placeholder="Email">
            </div>
            <div>
                <input class="mailInput" type="username" placeholder="Pseudo">
            </div>
            <div>
                <input class="mailInput" type="password" placeholder="Mot de passe">
            </div>
            <div>
                <input class="mailInput" type="password" placeholder="Confirmer le mot de passe">
            </div>
            <div>
                <button class="btnConnect">Connexion</button>
            </div>
        </form>
    </section>

    <footer class="footer">
    <?php
        include "view/footer_inc.php";
    ?>
    </footer>
</body>

<?php


$_SESSION['test'] = true;
// if(){
// // faire en sorte que si session prend la valeur true cela signifie que j'ai accéder à login via jeu
// }else{
// // faire en sorte que si session prend la valeur true cela signifie que j'ai accéder à login via l'icon profil

// }
?>

</html>