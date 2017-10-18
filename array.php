<?php
//Создать многомерный массив, который иллюстрирует список товаров. Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора, название и цену. 
//В списке товаров должно быть не менее 3 книг.
$book_1 = array('name' => 'Dogs heart', 'author' => 'Bulgakov', 'style' => 'classical literature', 'price' => '80 UAN');
$book_2 = array('name' => 'American psycho', 'author' => 'Bret Easton', 'style' => 'Epic', 'price' => '120 UAN');
$book_3 = array('name' => 'Black Arrow', 'author' => 'Stevenson', 'style' => 'adventure', 'price' => '210 UAN');
$goods = array($book_1, $book_2, $book_3);

// output
echo '<pre>';
print_r($goods);
echo '</pre>';