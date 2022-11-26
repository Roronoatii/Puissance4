<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="contact.css">
    <link href="view/footer.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="view/footer.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
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
        <section class="info-perso">
            <div class="logo_indv">
                <a href="#"><i class="brand fa-solid fa-mobile-screen-button"></i></a>
                <p>06 05 04 03 02</p>
            </div>
            <div class="logo_indv">
                <a href="#"><i class="brand fa-regular fa-envelope"></i></a>
                <p>support@powerofmemory.com</p>
            </div>
            <div class="logo_indv">
                <a href="#"><i class="brand fa-solid fa-location-dot"></i></a>
                <p>Paris</p>
            </div>
        </section>
        <!-- SECTION 2 -->
        <section class="login">
            <div class="logs">
                <form action="a changer .php" method="POST">
                    <div>
                        <input class="textinput"
                        type="Nom"
                        placeholder="Nom">
                        <input class="textinput"
                        type="Email"
                        placeholder="Email">
                    </div>
                    <div>
                        <input class="textinput"
                        type="Sujet"
                        placeholder="Sujet">
                    </div>
                    <div>
                        <textarea class="message"
                        type="Message"
                        placeholder="Message"></textarea>
                    </div>
                    <div>
                    <INPUT TYPE="button" Value="Demandeer de l'aide à la Coding" onclick="window.location='ajax-chat/';" 
                    style=" display: flex;
                            border-radius: 3px;
                            margin: auto;
                            padding-left: 25px;
                            padding-right: 25px;
                            padding-top: 8px;
                            padding-bottom: 8px;
                            color: white;
                            background-color: orange;
                            border-style: none;
                            margin: 25px 0 25px 0;">                    
                    </div>
                </form>
            </div>
        </section>
    <footer>
        <?php
            include 'view/footer_inc.php'
        ?>
    </footer>
</body>
</html>
