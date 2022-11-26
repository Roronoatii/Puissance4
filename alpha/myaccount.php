<?php
include './include/dbconnect.inc.php';


if(isset($_POST['submit'])){
    $oldmail = $_POST['oldmail'];
    $newmail = $_POST['newmail'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($confirmpassword == $password){
        $sth = $dbh->prepare('UPDATE utilisateur SET email = ? WHERE email = ? AND mot_de_passe = ?');
        $sth->execute([$newmail, $oldmail, $password]);
        $donnees = $sth->fetch();
    }
    else
        echo 'Incorrect';
}

if(isset($_POST['submit2'])){

    $email = $_POST['mail'];
    $oldpass = $_POST['currentpass'];
    $newpass = $_POST['newpass'];
    $confpass = $_POST['confpass'];

    if($confpass == $newpass){
        $sth = $dbh->prepare('UPDATE utilisateur SET mot_de_passe = ? WHERE email = ? AND mot_de_passe = ?');
        $sth->execute([$newpass, $email, $oldpass]);
        $donnees = $sth->fetch();
    }
    else
        echo 'Incorrect';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="view/footer.css" rel="stylesheet">
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
       
    </section>

    <section class="profile">
        <a  href="#" class="Pictureaccount"><img src="assets/paul.jpeg" class="Picture"></a>
        <p class="username  ">Roro</p>
  

        
        <div class="info">

            
            <div class="textprofile">Change Email</div>
            <form method="post" class="newemail">
                <input class="mailInput" name="oldmail" type="email" placeholder="Your current Email">
                <input class="mailInput" name="newmail" type="email" placeholder="New email">
                <input class="mailInput" name="password" type="password" placeholder="Password">
                <input class="mailInput" name="confirmpassword" type="password" placeholder="Confirm password">
                <input class="btnConnect" type="submit" name="submit" value="Change">

            </form>

           

        </div>

        <div class="newpassword">
            <div class="textprofile">Change Password</div>
            <form method="post">
                <input class="mailInput" name="mail" type="email" placeholder="Email">
                <input class="mailInput" name="currentpass" type="password" placeholder="Current password ">
                <input class="mailInput" name="newpass" type="password" placeholder="New password">
                <input class="mailInput" name="confpass" type="password" placeholder="Confirm new password">
                <input class="btnConnect" type ="submit" name="submit2" value="Change">
            </form>
        </div>
        
        
    </section>


    <?php
        include "./view/footer_inc.php"
    ?>
</body>



</html>