<form action="" method="GET">
    <input type="text" name="password_length">
    <input type="submit">
</form>


<?php
// recupero la lunghezza della password dall'input dell'utente
$passwordLength = ($_GET['password_length']);

//definisco la funzione di generazione password
function getRandomPassword ($passwordLength) {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!()-.?[]_~;:@#§*£&';

$shuffledChars = str_shuffle($characters);

$password = mb_substr($shuffledChars,0,$passwordLength);

echo 'La tua password è'.' '. ':'.' '. $password;
}

//invoco la funzione
if (is_numeric($passwordLength)) {
    getRandomPassword($passwordLength);
} else {
    echo 'Inserisci un numero!';
}

?>


