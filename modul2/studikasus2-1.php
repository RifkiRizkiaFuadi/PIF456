<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 2 | Studi Kasus 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Social Network yang digunakan
		<input type="checkbox" name="socnet[]" value="Twitter" checked="checked" />Twitter
		<input type="checkbox" name="socnet[]" value="Facebook" checked="checked" />Facebook
		<input type="checkbox" name="socnet[]" value="Foursquare" />Foursquare
		<input type="checkbox" name="socnet[]" value="Instagram" checked="checked" />Instagram
		<input type="checkbox" name="socnet[]" value="Vine" />Vine
		<input type="checkbox" name="socnet[]" value="Path" />Path <br />
		Preselectingnya adalah Twitter, Facebook, dan Instagram <br />
		<input type="submit" value="ok" />
	</form>

	<?php
	// Ekstraksi nilai
		if(isset($_POST['socnet'])){
			foreach($_POST['socnet'] as $key => $val){
				echo $key . ' -> ' . $val . '<br />';
				if($val == 'Twitter'){
					$check['Twitter'] = 'checked="checked"';
				}
			}
		}
	?>
</body>
</html>