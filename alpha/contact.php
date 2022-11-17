<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>    
        <?php
            include 'view/header_inc.php';
        ?>
    </header>
        <section class="insc" >
                <h1>NOUS CONTACTER</h1>
            </div>       
        </section>
    <section class="global">
        <section class="info-perso">
            <div class="logo_indv">
                <a href="#"><i class="fa-solid fa-mobile-screen-button"></i></a>
                <p>06 05 04 03 02</p>
            </div>
            <div class="logo_indv">
                <a href="#"><i class="fa-regular fa-envelope"></i></a>
                <p>support@powerofmemory.com</p>
            </div>
            <div class="logo_indv">
                <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                <p>Paris</p>
            </div>
        </section>
        <!-- SECTION 2 -->
        <section class="login">
            <div class="logs">
                <form action="a changer .php" method="POST">
                    <div>
                        <input class="mailInputNom" type="Nom" placeholder="Nom">
                        <input class="mailInputEmail" type="Email" placeholder="Email">
                    </div>
                    <div>
                        <input class="mailInputSujet" type="Sujet" placeholder="Sujet">
                        <input class="mailInputMessage" type="Message" placeholder="Message"> 
                    </div>
                    <div>
                        <button class="btnConnect">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </section>
    <footer>
        <?php
            include 'view/footer_inc.php'
        ?>
    </footer>
</body>
</html>