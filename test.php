<?php

$text = 'abcdef';
$findme = 'cdef';

$pos = strpos($text, $findme);

echo $pos.PHP_EOL;
var_dump($pos);