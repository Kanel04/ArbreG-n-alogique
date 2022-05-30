<?php

$objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');

$pdoStat = $objetPdo->prepare("DELETE FROM individu WHERE id_individu = :numParticipant LIMIT 1;");

$pdoStat->bindValue(':numParticipant',$_GET['numParticipant'],PDO::PARAM_INT);

$executeIsOK = $pdoStat->execute();

if($executeIsOK){
    header('Location: docs.php');
    exit();
}else{
    echo "<p>La suppression à échoué....</p>";
}
