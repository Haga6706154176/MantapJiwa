<?php
	session_start();
	if(isset($_SESSION['login'])){
		
		
		echo "<h1>Selamat Datang ".$_SESSION['login'] ."</h1>";
		echo "<h2>Halaman ini hanya bisa diakses jika sudah login</h2>";
		echo "<h2>Klik <a href='session03.php'>disini </a> untuk LOGOUT</h2>";
	} else {
		die ("Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href='login.php'>Disini</a>");
	}
?>