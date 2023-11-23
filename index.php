<?php include __DIR__ . '/function.php' ?>

<form action="" method="GET">
    <input type="text" name="password_length">
    <input type="submit">
</form>

<?php 
//invoco la funzione
if (is_numeric($passwordLength)) {
    getRandomPassword($passwordLength);
} else {
    echo 'Inserisci un numero!';
}
?>




