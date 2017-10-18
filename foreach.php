<?php
$arr = array(
    'first'  => 1,
    'second' => 2,
    'third'  => 3,
    'fourth' => 4,
    'fifth'  => 5,
	'sixth' => 6,
	'seventh' => 7,
	'eighth' => 8, 
	'ninth' => 9, 
	'thirty-third' => 33
);

foreach ($arr as $key => $val) {
	if ($val % 3 == 0) {
		echo $key . ' element is = ' . $val . '<br>';
    }
}