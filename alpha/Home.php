<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="Home.css" rel="stylesheet">
   
</head>
<body>
    <section class="backhead">
        <header>
            <?php
            
            include 'view/header_inc.php';
            
            ?>
        </header>
    <section class="bottomHeader">
        <div >
            <p class="bigTitle">BIENVENUE DANS<br>NOTRE STUDIO !<br>
                <span class="white">Venez challenger les cerveaux les plus agiles !</span></p>
                <a href="register.php" style="text-decoration: none"><button type="button"> JOUER !</button></a>
        </div>
    </section>
    </section>



    <section class="section1">
        <article class="firstMain">
            <div class="images1">
            <p><img src="assets/retro.jpg" class="img123"><img src="assets/dabbing-man.jpg" class="img123"><img src="assets/poker.jpg" class="img123"></p>
            </div>
        </article>
        <article  class="secondMain">
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">01</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">02</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">03</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
        </article>
       
    </section>
    
    <section class="section2">
        <article class="thirdMain">
            <div><p><img src="assets/dog2.jpeg" class="img4"></p></div>
            <div class="stats">
                <div class="firstLine"><p class="firstSquare">310<br>Partie Jouées</p><p class="secondSquare">1020<br>Joueurs Connectés</p><br></div>
                <div class="secondLine"><p class="thirdSquare">10 sec<br>Temps Record</p><p class="fourthSquare">21 300<br>Joueurs Inscrits</p></div>
            </div>
        </article>
        <div class="fourthMain">
            <p class="teamTitle">Notre Équipe</p>
            <p class="white">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p><img src="assets/separator.png" class="separator"></p>
            <div class="teamPictures">
                <p class="PictureBox"><img src="assets/esteban.jpeg" class="Picture">Esteban<span class="white"><br>Scrum master</span></p>
                <p class="PictureBox"><img src="assets/oce.jpeg" class="Picture">Océane<span class="white"><br>Aime les chips</span></p>
                <p class="PictureBox"><img src="assets/Rorofacefunny.webp" class="Picture">Roro<span class="white"><br>Kebab remover</span></p>
                <p class="PictureBoxromain"><img src="assets/romain.png" class="Pictureromain">Romain<span class="white"><br>Playstation player</span></p>
            </div>
        </div>
    </section>



    <footer class="footer">
        <?php
            include 'view/footer_inc.php';
        ?>
    </footer>
</body>
</html>
