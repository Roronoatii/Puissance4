<?php 
    require_once '../includes/config.php'; 
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['mot_de_passe']) && !empty($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['mot_de_passe']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $id = htmlspecialchars($_POST['id']);

        
        $check = $bdd->prepare('SELECT pseudo, email, mot_de_passe FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ 
                if(strlen($email) <= 100){ 
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($password === $password_retype){ 

                            $password = hash('sha256',$password);
                    
                            

                            $ip = $_SERVER['REMOTE_ADDR']; 

                            $insert = $bdd->prepare('INSERT INTO utilisateur(id, pseudo, email, mot_de_passe) VALUES(:id, :pseudo, :email, :password)');
                            $insert->execute(array(
                                'id' => $id,
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'mot_de_passe' => $password,
                            ));
                            header('Location:register.php?reg_err=success');
                            die();
                        }else{ header('Location: register.php?reg_err=password');}
                    }else{ header('Location: register.php?reg_err=email');}
                }else{ header('Location: register.php?reg_err=email_length');}
            }else{ header('Location: register.php?reg_err=pseudo_length');}
        }else{ header('Location: register.php?reg_err=already');}
    }
?>
