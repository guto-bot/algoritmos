<?php

/**
 * Suponha que você tenha uma lista com 128 nomes e esteja fazendo uma pesquisa binária.
 * Qual seria o número máximo de etapas que você levaria para encontrar o nome desejado
 */

$names = 128;

$step_1 = $names / 2;

$setep_2 = $step_1 / 2;

$setep_3 = $setep_2 / 2;

$setep_4 = $setep_3 / 2;

$step_5 = $setep_4 / 2;

$step_6 = $step_5 / 2;

$step_7 = $step_6 / 2;

$result = $step_7;

echo 'com etapas sequencial: ' . $result . PHP_EOL;

/**
 * Método com logaritmo
 */
$max_steps = ceil(log($names, 2));

echo 'com logaritmo: ' . $max_steps . PHP_EOL;
