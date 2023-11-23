<?php
// recupero la lunghezza della password dall'input dell'utente
$passwordLength = ($_GET['password_length']);

//definisco la funzione di generazione password
function getRandomPassword ($passwordLength) {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!()-.?[]_~;:@#§*£&';

$shuffledChars = str_shuffle($characters);

$passwordString = mb_substr($shuffledChars,0,$passwordLength);

var_dump($passwordString);
}

//invoco la funzione
getRandomPassword($passwordLength);
?>

<form action="" method="GET">
    <input type="text" name="password_length">
    <input type="submit">
</form>

