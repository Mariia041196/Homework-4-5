<?php
$a = 1;
$b = 5;
$max = max($a , $b);
switch ($max) {    
    case 1: echo 'One '; break;
    case 2: echo 'Two '; break;
    case 3: echo 'Three '; break;
    case 4: echo 'Four '; break;
    case 5: echo 'Five'; break; // Максимальное значение
    default: echo 'Sorry';
}
?>
// or
<?php
$a = rand(1, 5);
$b = rand(1, 5);
switch ($a , $b) {
	case ($a < $b): echo "the maximum of two variables - {$b}"; break;
	case ($a > $b): echo "the maximum of two variables - {$a}"; break;
	case ($a == $b): echo "the condition does not hold"; break; 
	default: echo 'Sorry';
} 
?>

