<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
    <link href="view/footer2.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
    <link href="memo-moyen.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>

   </head>

<body>
    <header>
        <?php
            include 'view/header_inc.php';
        ?>
    </header>
    <section class="insc">
        <div class="text">
            <h1 id="title">THE POWER OF MEMORY</h1>
        </div>
        <img class="logimg" src="assets/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpeg">

    </section>

    <section id="game">
        <div id="wrapper">

            <div class="game-menu">
                <div class="points-paires">Paires</div></br>
                <div id="game-pair">3</div>

                <div class="game-menu-separator"></div>

                <div class="points-paires">Points</div></br>
                <div id="points">130</div>
                
                <div class="timer">Timer</div>
                <div id="chrono">00:00:00</div>

                <div id="game-menu-bonus-wrapper">
                    <div id="bonus">Bonus</div></br>
                    <div>x3 strikes !</div>
                    <div>x1 combos !</div>
                </div>

                <button id="jouer" class="game-menu-button">Nouvelle partie</button>
                <button id="reset" class="game-menu-button">Reset</button>
            </div>

            <div class="table">
                <div id="resultat"></div>
                <script src="./assets/memory.js"></script>
            <div>
                <div id="user" class="game-menu">
                    <div id="user-background">
                        <img id="user-picture" src="./assets/retro.jpg" />
                        <div id="user-name">User name</div>
                    </div>
                </div>

                <div id="settings-menu" class="game-menu">
                    <div class="settings-menu-titles">Settings</div>

                    <div id="settings-menu-item-list">

                            <div class="dropdown-1">
                                <button class="btn1">Niveau et thème</button>
                                <div class="content">
                                    <a href="theme1-facile.php" >Facile Paysage</a>
                                    <a href="theme1-moyen.php" >Moyen Paysage</a>
                                    <a href="theme1-difficile.php" >Difficile Paysage</a>
                                    <a href="theme2-facile.php" >Facile RL </a>
                                    <a href="theme2-moyen.php" >Moyen RL</a>
                                    <a href="theme2-difficile.php" >Difficile RL</a>
                                    <a href="theme3-facile.php" >Facile anime</a>
                                    <a href="theme3-moyen.php" >Moyen anime</a>
                                    <a href="theme3-difficile.php" >Difficile anime</a>
                                </div>
                            </div>
    

                    </div>

                    <div class="game-menu-separator"></div>

                    <div id="règles">Règles</div>
                    <div>
                        <p id="rules-text">Assemblez les paires correspondantes et battez votre record en obtenant un
                            max de points bonus pour apparaitre en haut du tableau des scores !</p>
                    </div>

                </div>
            </div>


        </div>
    </section>


    <footer class="footer">

        <div class="box11">

            <p class="white yo">Information</p>
            <p class="gris">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p class="gris"><span class="orange">Tel : </span>06 05 04 03 02</p>
            <p class="gris"><span class="orange">Email : </span>support@powerofmemory.com</p>
            <p class="gris"><span class="orange">Location : </span>Paris</p>
            <p><a href="https://www.facebook.com/" target="_blank"> <i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.twitter.com/" target="_blank"> <i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"> <i class="fa-brands fa-google"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-square-pinterest"></i></a>
                <a href="https://www.instagram.com//" target="_blank"> <i class="fa-brands fa-square-instagram"></i></a>
            </p>
            <br>
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
    <script src="./assets/timer.js"></script>
    <script src="./assets/theme1-facile.js"></script>
</body>



</html>