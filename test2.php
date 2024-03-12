<?php
function orderbyName($x, $y) {
    return strcmp($x['nome'], $y['nome']);
}

$dados = array(
    array("id" => 1, "nome" => "João", "idade" => 35),
    array("id" => 2, "nome" => "Maria", "idade" => 28),
    array("id" => 3, "nome" => "Pedro", "idade" => 42),
);

usort($dados, 'orderbyName');

print_r($dados);