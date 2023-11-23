<?php
function getRandomPassword () {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!()-.?[]_~;:@#§*£&';

$shuffledChars = str_shuffle($characters);

$passwordString = mb_substr($shuffledChars,0,8);

var_dump($passwordString);
}
?>

<form action="GET">
    <input type="text">
    <input type="submit">
</form>

<?php getRandomPassword(); ?>