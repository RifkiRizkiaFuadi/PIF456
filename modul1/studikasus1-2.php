<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 1 | Studi Kasus 1</title>
</head>
<body>
	<?php
	function greeting($jam){
		if($jam < 11 AND $jam > 0){
			echo 'Selamat Pagi!!';
		}elseif($jam < 19 AND $jam > 0){
			echo 'Selamat Siang!!';
		}elseif($jam < 25 AND $jam > 0){
			echo 'Selamat Malam!!';
		}else{
			echo '';
		}
	}

	// kembalian string kosong
	echo 'Sekarang Jam ' . $_POST["jam"] . ':00 WIB, ';
	greeting($_POST["jam"]);
	?>
	<br /><a href="studikasus1-1.php">[KEMBALI]</a>
</body>
</html>