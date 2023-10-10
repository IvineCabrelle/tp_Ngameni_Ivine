<?php
function nameLengthIsValid($nameToValid){
    //minimum 6 maximum 10
    $length = strlen($nameToValid);
    $responses=[
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length<6){
        $responses=[
            'isValid'=>false,
            'msg'=>'Votre mot de passe est trop court. Veuillez entrer un mot de passe valide'
        ];
    }elseif($length>10){
        $responses=[
            'isValid'=>false,
            'msg'=>'Votre mot de passe est trop long. Veuillez saisir des informations correctes'
        ];
    }
    else {
        $responses=[
            'isValid'=>false,
            'msg'=>'mot de passe valide'
        ];

    }
    return $responses;    
}
function addSalt($nameToSalt){
    $salt = "UnMystere123!";
    $saltedName=$salt.$nameToSalt.$salt;

    return "Votre mot de passe après le sel est de :" .$saltedName;
}
function encodName($saltedName){
    $encodName= sha1($saltedName);
    return $encodName;
}