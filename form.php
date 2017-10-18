<form action='index.php' method='post'>
	<input type = 'text' name='name'><br>
	<input type='phone' name='phone'><br>
    <input type='email' name='email'/><br>
    <input type='submit'/>
</form>
<?php
	$str = serialize($_POST);
    print_r($str);
?>