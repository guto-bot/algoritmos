<?php

# 1 bilhão de elementos

$elements = (int) 1000000000;

$result = (int) ceil(log($elements, 2));

echo $result . PHP_EOL; // 30ms