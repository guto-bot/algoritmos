# Entendendo algoritmos

<h2>Pesquisa binária</h2>

<p>A pesquisa linear (ou pesquisa sequencial) é um método simples onde você examina cada elemento da lista um por um, da primeira à última posição, até encontrar o elemento desejado.

    Vantagem: Simples de implementar e funciona bem para listas não ordenadas.
    Desvantagem: Ineficiente para listas grandes, pois o tempo de execução no pior caso é proporcional ao número de elementos na lista.

Se você tem uma lista com 128 nomes e o nome que você está procurando está na última posição, você terá que percorrer todos os 128 nomes, o que leva até 128 etapas.

A pesquisa binária é um método mais eficiente para listas ordenadas. Ela funciona dividindo repetidamente a lista ao meio e comparando o valor do meio com o valor que você está procurando. Dependendo da comparação, você descarta metade da lista e continua a busca na metade restante.

    Vantagem: Muito mais eficiente para listas ordenadas. O tempo de execução no pior caso é proporcional ao logaritmo na base 2 do número de elementos na lista.
    Desvantagem: Requer que a lista esteja ordenada. A implementação é um pouco mais complexa que a pesquisa linear.
</p>

<p>Exemplo de código com pesquisa binária, contexto: achar o indice de acordo com a posição do nome no array, observe que na estrutura condicional eu vou incrementando e decrementando conforma o chute, navegando pelo array para descobrir o indice.</p>

```php
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

$result = names($list_names, 'Cesar');

echo $result . PHP_EOL;
```
