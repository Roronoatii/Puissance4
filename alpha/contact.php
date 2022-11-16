<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="view/header2.css">
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/9b628f0366.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>    
        <?php
            include 'view/header_inc.php';
        ?>

    </header>
    <section class="insc" >
        <div class="text">
            <h1>NOUS CONTACTER</h1>
        </div>
        <img class="logimg" src="assets/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpeg">
       
    </section>

    <section class="info-perso">
        <div class="left">
                <!-- <a href="#"><i class="fa-solid fa-mobile-screen-button"></i></a> -->
                <a href="#"><img class="telephone" src="assets/Mobility-Icon-292x292-2.png" alt="telephone"></a>
                <div id="num">06 05 04 03 02</div>
        </div>
        <div class="mid">
                <a href="#"><img class="lettre" src="assets/icones-de-messagerie-orange.png" alt="telephone"></a>
                <div id="email">support@powerofmemory.com</div>
        </div>
        <div class="right">
            <a href="#"><img class="picto_lieu" src="assets/PICTO-LIEU.png" alt="telephone"></a>
            <div id="ville">Paris</div>
        </div>
    </section>
    <!-- SECTION 2 -->
    <section class="login">
        <div class="logs">
            <div class="information">
                <div class="log">
                <input class="mailInputNom" type="Nom" placeholder="Nom">
                <input class="mailInputEmail" type="Email" placeholder="Email">
            </div>
                <input class="mailInputSujet" type="Sujet" placeholder="Sujet">
                <input class="mailInputMessage" type="Message" placeholder="Message"> 
            </div>
  
            <button class="btnConnect">Envoyer</button>

        </div>
        
    </section>
    <footer class="footer">
    
        <div class="leftFooter">

            <p class="white">Information</p>
            <p class="gris">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p class="gris"><span class="orange">Tel : </span>06 05 04 03 02</p>
            <p class="gris"><span class="orange">Email : </span>support@powerofmemory.com</p>
            <p class="gris"><span class="orange">Location : </span>Paris</p>
            <p><a href="https://www.facebook.com/" target="_blank"> <i  class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.twitter.com/" target="_blank"> <i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"> <i class="fa-brands fa-google"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-square-pinterest"></i></a>
                <a href="https://www.instagram.com//" target="_blank"> <i class="fa-brands fa-square-instagram"></i></a></p>
                <br>
                <br>
                <br>
                <p class="copy">Copyright © 2022 Tous droits réservés</p>
        </div>
       


       <section class="box22">
        <h5 class="white">Power Of Memory</h5>
        <div id="bullet">
            <ul class="bullet">
                <li><a href="url">Jouer !</a></li><br>
                <li><a href="url">Les scores</a></li><br>
                <li><a href="url">Nous contacter</a></li>
            </ul>
        </div>
       </section>
    </footer>
</body>
</html>