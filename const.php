<?php
//Определить константы, которые соответствуют названиям нескольких стран мира. 
//Используя эти константы, сформировать массив из соответствующих значений
define('UKRAINE', 'Ukraine');
define('GERMANY', 'Germany');
define('FRANCE', 'France');

$countries = array(UKRAINE, GERMANY, FRANCE);

echo '<pre>';
print_r($countries);
echo '</pre>';