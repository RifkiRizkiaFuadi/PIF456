<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 4 | Latihan 2</title>
</head>
<body>

	<?php 
		require_once './koneksi.php';
		$db = 'myweb';
		$res = mysql_query('CREATE DATABASE ' . $db);
		if ($res){
			echo 'Database ' .$db. ' Created';
		}else{
			echo mysql_error();
		}
	?>

</body>
</html>