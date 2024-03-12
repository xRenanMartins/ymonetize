<?php
function invertOrderWords($string) {
    $words = explode(' ', $string);

    $wordReverse = array_reverse($words);

    $stringReverse = implode(' ', $wordReverse);

    return $stringReverse;
}

$input = "Desenvolvedor Sênior em PHP";
$output = invertOrderWords($input);

echo $output; // "PHP em Sênior Desenvolvedor"