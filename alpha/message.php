<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <link rel="stylesheet" href="message.css">
    <link href="view/footer2.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>

            <div class="box1">

                <a href="">The power of Memory</a>

            </div>

            <div class="box2">

                <a href="Home.html">ACCUEIL</a>

                <a href="login.html">JEU</a>

                <a href="register.html">SCORES</a>

                <a href="nous_contacter.html">NOUS CONTACTER</a>
            </div>

        </nav>

    </header>
    <section class="insc" >
        <div class="text">
            <h1>C O N N E X I O N</h1>
        </div>
        <img class="logimg" src="assets/image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg">
       
    </section>        
    <section class="chat">
            <div class="chat_header">
                <div class="chat_general">
                    <img class="image_robot" src="assets/image_robot.png" alt="image_robot">
                    <span class="text">Chat général</span> 
                </div>
            </div>
            <div class="ecran_message">
                <div class="block_separation"></div>
                <div class="block1">
                    <div class="personne1">Moi</div>
                    <div class="message1">
                        <div id="container">
                            Hello world!
                        </div> 
                    </div>
                    <div class="date1"><?php echo date('l jS \of F Y h:i:s A'); ?></div>
                </div>
                <div class="block_separation"></div>
                <div class="block2">
                    <div class="personne2">Moi</div>
                    <div class="message2">
                        <div id="container">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias quaerat consequuntur praesentium! Quaerat distinctio dolor veritatis hic delectus corrupti numquam recusandae, ipsam, facilis dolorum expedita est nobis officiis ratione consectetur.
                        </div>
                    </div>
                    <div class="date2"><?php echo date('l jS \of F Y h:i:s A'); ?></div>
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
            <p><a href="https://www.facebook.com/" target="_blank"> <i  class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.twitter.com/" target="_blank"> <i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"> <i class="fa-brands fa-google"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-square-pinterest"></i></a>
                <a href="https://www.instagram.com//" target="_blank"> <i class="fa-brands fa-square-instagram"></i></a></p>
               
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