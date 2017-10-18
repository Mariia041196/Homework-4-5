<?php
$x = 25;
$y = 5;

if ($x > $y) {
	$message = "the maximum of two variables - {$x}";
} elseif ($x == 0) {
	$message = "the condition does not hold";
} 
 elseif ($x < $y) {
	$message = "
the maximum of two variables - {$y}";
} else {
	$message = "the condition does not hold";
}

echo $message;