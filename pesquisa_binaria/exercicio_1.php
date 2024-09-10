<?php

function names(array $list, string $name)
{
    $down = 0;
    $up = count($list) - 1;

    while ($down <= $up) {
        $found_name = intdiv($down + $up, 2);
        $kick = $list[$found_name];

        if ($kick == $name) {
            return $found_name;
        }

        if ($kick > $name) {
            $up = $found_name - 1;
            continue;
        }

        $down = $found_name + 1;
    }

    return 'NULL' . PHP_EOL;
}

$list_names = ['Cesar', 'Geovanna', 'Igor', 'Jackson', 'Maísa', 'João', 'Ravih'];

$result = names($list_names, 'Jackson');

echo $result . PHP_EOL;
