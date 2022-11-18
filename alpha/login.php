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
            include 'view/header_inc.php';
            require '../includes/database_inc.php';
            require '../includes/fonctionalite-login.php';
        ?>
        
    </header>
    <section class="text">
        <h2>C O N N E X I O N</h2> 
    </section>
    <section class="login">     
        <form action="traitement.php" method="post">       
            <div>
                <input class="mailInput" 
                type="email"
                placeholder="Email">
            </div>
            <div>
                <input class="mailInput"
                type="password"
                placeholder="Mot de passe">
            </div>
            <div>
                <button class="btnConnect">Connexion</button> <a href="register.php" class="reglink">Incription</a>
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