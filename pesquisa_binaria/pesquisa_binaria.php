<?php

function pesquisa_binaria(array $lista, int $item)
{
    $baixo = 0;
    $alto = count($lista) - 1; # ultimo elemento do array (5)

    while ($baixo <= $alto) {
        $meio = floor(($baixo + $alto) / 2);
        $chute = $lista[$meio]; # indice específico na lista

        if ($chute == $item) { # se chute for igual ao item retorna o indice
            return $meio;
        }

        if ($chute > $item) { # valor inferior, decrementa o indice
            $alto = $meio - 1;
            continue;
        }

        $baixo = $meio + 1; # valor superior, incrementa o indice
    }

    return 'NULL' . PHP_EOL; # não encontrou o indice? None
}

$minha_lista = [1, 2, 3, 5, 7, 9];

$resultado = pesquisa_binaria($minha_lista, 2);

echo $resultado . PHP_EOL;
