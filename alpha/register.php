<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
    <link href="view/footer.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
    <script src="./password-validation.js"></script>
    <script>
        function handlePasswordChange(password) {
            const passwordLevel = getPasswordLevel(password);
            const passwordValidationElement = document.getElementById("passwordValidation");
            passwordValidationElement.setAttribute('LEVEL', passwordLevel);

            const passwordValidationTextElement = passwordValidationElement.getElementsByClassName('password-validation-text')[0];
            passwordValidationTextElement.innerHTML = getPasswordValidationTextByPasswordLevel(passwordLevel);
        }

        function getPasswordValidationTextByPasswordLevel(passwordLevel) {
            switch(passwordLevel) {
                case "LOW": return 'Faible';
                case "MEDIUM": return 'Moyen';
                case "HIGH": return 'Fort';
            }
        }
    </script>
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
            <form action="register-traitement.php" method="post">
                <div>
                    <input class="mailInput" type="email" placeholder="Email">
                </div>
                <div>
                    <input class="mailInput" type="username" placeholder="Pseudo">
                </div>
                <div>
                    <input class="mailInput" type="password" placeholder="Mot de passe" oninput="handlePasswordChange(this.value)">
                </div>
                <div id="passwordValidation" class="password-validation-wrapper">
                    <div class="password-validation-slider"></div>
                    <div class="password-validation-text"></div>
                </div>
                <div>
                    <input class="mailInput" type="password" placeholder="Confirmer le mot de passe">
                </div>
                <div>
                <button href="login.php" class="btnConnect">Connexion</button>
                </div>
            </form>
        </section>
        

        <footer class="footer">
        <?php
            include "view/footer_inc.php";
        ?>
        </footer>
        <script src="mdp.js"></script>
    </body>

<?php
$_SESSION['test'] = true;
?>

</html>




