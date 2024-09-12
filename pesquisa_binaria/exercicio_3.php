<?php

/**
 * Suponha que você duplique da lista.
 * Qual seria o número máximo de etapas agora?
 */

$names = 256;

$step_1 = $names / 2;

$setep_2 = $step_1 / 2;

$setep_3 = $setep_2 / 2;

$setep_4 = $setep_3 / 2;

$step_5 = $setep_4 / 2;

$step_6 = $step_5 / 2;

$step_7 = $step_6 / 2;

$step_8 = $step_7 / 2;

$result = $step_8;

echo 'com etapa sequancial: ' . $result . PHP_EOL;

$max_step = ceil(log($names, 2));

echo 'com logaritmo: ' . $max_step . PHP_EOL;
