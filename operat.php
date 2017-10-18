<?php
$sec = 60;
$min = 60;
$hrs = 24;
$day = 365;

$sec_year = $sec * $min * $hrs * $day;

echo ("{$sec_year} seconds per year");
echo ('<br>');

$ost = $sec_year % 2;

echo("{$ost} остаток от числа")
?>