<?php
include './include/dbconnect.inc.php';

if (isset($_POST)) 

if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    echo 'Salut ' . $nom . '' .$prenom ;
}
else{
    echo 'erreur de validation';
}
?>

<form method="post">

<input type="text" name="nom"/>
<input type="submit" name="submit" value="login">

</form>

$oldemail = $.Post ('old.mail');
$newemail = $.Post (newemail);

$sql=SELECT *
FROM utilisateur 
WHERE email = $oldemail and password = $oldpassword
$sth = $dbh->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sth->execute(['toto' => 150, 'titi' => 'red']);
$red = $sth->fetch();
si red vide message erreur
sinon 
update avec le nouvel email


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="view/footer2.css" rel="stylesheet">
    <link href="view/header2.css" rel="stylesheet">
    <link href="myaccount.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
    

</head>



<body>
    <header>
        <?php
            include './view/header_inc.php';
        ?>

    </header>
    <section class="insc" >
        <div class="text">
            <h1>Y O U R &nbsp;&nbsp; P R O F I L E</h1>
        </div>
        <img class="logimg" src="./assets/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpeg">
       
    </section>

    <section class="profile">
        <a  href="url" class="Pictureaccount"><img src="assets/paul.jpeg" class="Picture"></a>
        <p class="username  ">Roro</p>
  

        
        <div class="info">

            
            <div class="textprofile">Change Email</div>
            <div class="newemail">
                <input class="mailInput" type="email" placeholder="Your current Email">
                <input class="mailInput" type="email" placeholder="New email">
                <input class="mailInput" type="password" placeholder="Password">
                <input class="mailInput" type="password" placeholder="Confirm password">
                <button class="btnConnect">Change</button>

            </div>

           

        </div>

        <div class="newpassword">
            <div class="textprofile">Change Password</div>
                <input class="mailInput" type="password" placeholder="Current password ">
                <input class="mailInput" type="password" placeholder="New password">
                <input class="mailInput" type="password" placeholder="Confirm new password">
                <button class="btnConnect">Change</button>

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
                <a href="https://www.instagram.com/" target="_blank"> <i class="fa-brands fa-square-instagram"></i></a></p>
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
                <li><a href="login.html">Jouer !</a></li><br>
                <li><a href="scores.html">Les scores</a></li><br>
                <li><a href="contact.html">Nous contacter</a></li>
            </ul>
        </div>
       </section>
    </footer>
</body>



</html>