<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Halaman Administrator | Modul 3 | Latihan 3</title>
	<style type="text/css">
	.inner {
		margin: 200px auto;
		padding: 20px;
		width: 240px;
		border: 1px solid #333;
	}
	</style>
</head>
<body>
	<?php
		ini_set('display_errors', 1);
		define('_VALID', 1);

		// include file eksternal
		require_once('./auth.php');

		init_login();
		validate();
	?>

	<h3>Simulasi Halaman Admin</h3>
	<p>
		<a href="?m=logout">Logout</a>
	</p>
	<p>Menu-menu admin ada di sini</p>
</body>
</html>