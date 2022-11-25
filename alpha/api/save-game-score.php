<?php

include('../include/dbconnect.inc.php');

if(isset($_POST['score'])){
    return;
}

$score = $_POST['score'];
$startGameDate = $_POST['startGameDate'];
$gameId = $_POST['gameId'];
$gameLevel = $_POST['gameLevel'];

$playerId = $_SESSION['id'];


$sql = "INSERT INTO score (id_joueur, id_jeu, diffculte_de_la_partie, score_de_la_partie, date_et_heure_de_la_partie)
VALUES (?,?,?,?,?)";

$request = $dbh->prepare($sql);
$request->execute([$playerId,$gameId,$gameLevel,$score,$startGameDate]);


?>