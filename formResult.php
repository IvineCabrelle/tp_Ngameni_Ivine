<?php
require_once("function.php");
var_dump($_POST);

if($_POST){
    $mot_De_Passe = $_POST['fmotDePasse'];
    
    if(empty($mot_De_Passe)){
        echo"<br> Votre mot de passe est vide";}
    else{
        echo"<br>Mon mot de passe  est : ".$mot_De_Passe;
    }
    $nameLengthIsValid = nameLengthIsValid($_POST['fmotDePasse']);
    echo'<br>';
    var_dump($nameLengthIsValid);
    if(!$nameLengthIsValid['isValid']){
        //on fait notre traitement 
    }
    echo'<br>';
    $saltedName=addSalt($_POST['fmotDePasse']);
    var_dump($saltedName);

    echo'<br>';
    $encodName = encodName($saltedName);
    var_dump($encodName);
    }
?>
<br>
<a href="./index.php">retour</a>
