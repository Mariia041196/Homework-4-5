<?php
$a = true;

for($i = 2; $i <= 100; $i++) {

for($j = 2; $j < $i; $j++) {
if($i % $j == 0) {
$a = false;
break;
}
}
if($a) echo $i."
";
$a = true;
}
?>