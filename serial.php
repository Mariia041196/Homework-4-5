<form action='index.php' method='post'>
	<input type = 'text' name='username'><br>
    <input type='email' name='email'/><br>
	<input type='textarea' name='message'><br>
    <input type='submit'/>
</form>
<?php
	$str = serialize($_POST);
    print_r($str);
?>