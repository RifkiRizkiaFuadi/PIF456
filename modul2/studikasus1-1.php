<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 2 | Studi Kasus 1</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Social Network Favorit
		<select name="socnet">
			<option value="Twitter" <?php if(isset($_POST['socnet']) && $_POST['socnet'] == 'Twitter') echo 'selected="selected"'; ?>>Twitter
			<option value="Facebook" <?php if(isset($_POST['socnet']) && $_POST['socnet'] == 'Facebook') echo 'selected="selected"'; ?>>Facebook
			<option value="Foursquare" <?php if(isset($_POST['socnet']) && $_POST['socnet'] == 'Foursquare') echo 'selected="selected"'; ?>>Foursquare
			<option value="Instagram" <?php
				if(isset($_POST['socnet']) && $_POST['socnet'] == 'Instagram'){
					echo 'selected="selected"';
				}elseif(isset($_POST['socnet']) && $_POST['socnet'] != 'Instagram'){
					
				}
				else{
					echo 'selected="selected"';
				}
				?>>Instagram
			<option value="Vine" <?php if(isset($_POST['socnet']) && $_POST['socnet'] == 'Vine') echo 'selected="selected"'; ?>>Vine
			<option value="Path" <?php if(isset($_POST['socnet']) && $_POST['socnet'] == 'Path') echo 'selected="selected"'; ?>>Path
		</select> Preselectingnya adalah Instagram <br />
		<input type="submit" value="ok" />
	</form>

	<?php 
		if(isset($_POST['socnet'])){
			echo 'Social Netwok Favorit adalah ' . $_POST['socnet'];
		}
	?>
</body>
</html>