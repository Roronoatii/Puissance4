<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost:8889;dbname=puissance-4;charset = utf8','root','root');
    }catch(Exception $e)
    {
        die('erreur'.$e->getMessage());
    }