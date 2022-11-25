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
        ?>
        


    

        
    </header>
    <section class="text">
        <h2>C O N N E X I O N</h2> 
    </section>
    <section class="login">     
        <form method="post">       
            <div>
                <input class="mailInput" 
                type="email"name="email" 
                placeholder="Email">
            </div>
            <div>
                <input class="mailInput"
                type="password"name="password"
                placeholder="Mot de passe">
            </div>
            <div>
                <?php
                if(isset($_GET['jeu'])){
                    echo "<input type='hidden' name='jeu' value='1' />";
                }
                ?>
                 <input class="btnConnect"type="submit" value="Connexion" name="submit">
           
        </form> 
                <a href="register.php" class="reglink">Incription</a>
            </div> 
    </section>


    <footer>
    <?php
        include 'view/footer_inc.php';
    ?>
    </footer>
</body>



</html>