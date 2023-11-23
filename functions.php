<?php

function genera_password($lunghezza) {
    $caratteri = array(
        "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
        "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
        "0","1","2","3","4","5","6","7","8","9",
        "`","~","!","@","#","$","%","^","&","*","(",")","-","_","=","+","[","]","{","}",";",":","'","<",",",">",".","/","?",
    );
    $password = "";
    for ($i = 0; $i < $lunghezza; $i++) {   
        $carattere = random_int(0, count($caratteri));
        $password .= $caratteri[$carattere];
    }
    return $password;
}

?>