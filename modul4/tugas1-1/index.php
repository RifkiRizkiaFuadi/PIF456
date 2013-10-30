<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- COPYRIGHT 2013 RIFKI RIZKIA FUADI | RIFKI.MY.ID | RIFFRIZZ.COM -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
		session_start();
		ini_set('display_errors', 1);
		define('_VALID', 1);

		if(isset($_SESSION['loggedin']) || isset($_SESSION['time'])){
			echo '<title>JKT48</title>';
		}elseif(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
			echo '<title>Login &rarr; JKT48</title>';
		}
	?>
	<style type="text/CSS">
	body {font-family: 'Segoe UI', Tahoma, Helvetica, Sans-Serif; background: url(bg.gif)}
	h1 {font-size: 35px; color: #ed1b24; margin: 0; padding: 18px 0 20px 60px; background: url(logo.png) top left no-repeat;}
	h1 img {margin-right: 15px}
	a:link, a:visited {color: #ed1b24; text-decoration: none}
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0}
	td {margin: 0; padding: 5px 0}
	input {width: 100%; padding: 8px; border: 1px solid #D2D2D2; border-top-left-radius: 10px; border-bottom-right-radius: 10px}
	blockquote {font-size: 12px; margin: 0px 0px 15px 0; padding: 10px; background: #FFFFD4; border: 1px solid #FFD47F; border-radius: 5px}
	#content {max-width: 360px; margin: 80px auto; padding: 0 20px 5px 20px; background: #FFF url(bg.png) center bottom no-repeat; box-shadow: 0px 0px 10px #333333; border-top-left-radius: 15px; border-bottom-right-radius: 15px}
	#content img {max-width: 100%}
	.username {background: url(user.png) no-repeat 1px 5px; padding: 0 5px 0 20px}
	.password {background: url(key.png) no-repeat 1px 5px; padding: 0 5px 0 20px}
	.button {font-weight: bold; max-width: 80px; margin: 20px 0 10px 0; padding: 10px 5px; float: right; clear: both; color: #FFF; background: #ed1b24; border: none}
	.button:hover {background: #333333; cursor: hand}
	.info {background: #F0F0F0 url(user.png) no-repeat 10px 15px; margin: 0 -20px 30px 0; padding: 10px 20px 10px 30px; float: right; border-top-left-radius: 5px; border-bottom-left-radius: 5px}
	.copyright {font-size: 12px; clear: both}
	</style>

	<script language="JavaScript">
		function konfirmasi(Keterangan){
			tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ Keterangan + ' ?');
			if (tanya == true) return true;
			else return false;
		}
	</script>

	<script type="text/javascript">			
		function formCheck(){
		if(login.username.value == "" && login.password.value == ""){
			alert("Username dan Password Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.username.value == ""){
			alert("Username Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.password.value == ""){
			alert("Password harus di isi untuk login");
			login.password.focus();
			return false;
		}
		else
		return true; 
		}
	</script>

	<script language="javascript">
		function getKey(e){
			if (window.event)
				return window.event.keyCode;
			else if (e)
				return e.which;
			else
				return null;
		}

		function restrictChars(e, validList){
			var key, keyChar;
			key = getKey(e);
			if (key == null) return true;
			keyChar = String.fromCharCode(key).toLowerCase();
			if (validList.toLowerCase().indexOf(keyChar) != -1)
				return true;
			if(key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
				return true;
			return false;
		}

		function alphabetOnly(e){
			return restrictChars( e, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
		}
	</script>

</head>
<body>
	<div id="content">
		<?php
			if(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
				echo '<h1>Login &rarr; JKT48</h1>';
			}elseif(isset($_SESSION['loggedin']) || isset($_SESSION['time'])){
				echo '<h1>Irasshaimase</h1>';
			}
		?>
		<?php

			// include file eksternal
			require_once('./auth.php');

			init_login();
			validate();
			echo '<div class="info">Login sebagai <b>' . $_SESSION['loggedin'] . '</b> | <a href="?logout=true"><b>logout</b></a></div><br />';
			ini_set('display_errors',1);

			// Meng-include file koneksi dan data handler
			require_once './koneksi.php';
			require_once './data_handler.php';

			// Konstanta nama tabel
			define('MHS', 'mahasiswa');

			// Memanggil fungsi data handler
			data_handler('?m=data');
			?>

		<div class="copyright">&copy; 2013 Rifki Rizkia Fuadi</div>
		</p>
	</div>
</body>
</html>