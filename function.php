<?php

$numeroCaratteri = intval($_GET['numeroCaratteri']);


$lowerCase = 'abcdefghijklmnopqrstuvwxyz';

$upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$numbers = '0123456789';

$symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

$listacaratteri = $lowerCase . $upperCase . $numbers . $symbols;

function passowrdGen($passwordLenght, $carattteriLenght)
{
    $passowrdGenerata = '';

    for ($i = 0; $i < $passwordLenght; $i++) {
        $random = rand(0, strlen($carattteriLenght) - 1);
        $passowrdGenerata .= $carattteriLenght[$random];
    }

    return $passowrdGenerata;
}

$passowrdGenerata = passowrdGen($numeroCaratteri, $listacaratteri);

?>