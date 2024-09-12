<?php

function names(array $list, string $name)
{
    $down = 0;
    $up = count($list) - 1;

    while ($down <= $up) {
        $mid = intdiv($down + $up, 2);
        $kick = $list[$mid];

        if ($kick == $name) {
            return $mid;
        }

        if ($kick > $name) {
            $up = $mid - 1;
            continue;
        }

        $down = $mid + 1;
    }

    return 'NULL' . PHP_EOL;
}

$list_names = ['Cesar', 'Geovanna', 'Igor', 'Jackson', 'João', 'Maísa', 'Ravih'];

$result = names($list_names, 'Geovanna');

echo $result . PHP_EOL;
