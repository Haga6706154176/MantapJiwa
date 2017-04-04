<?php
	session_start();
	if (isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if($user == "6706152068" && $pass == "6706152068"){
			$_SESSION['login'] = $user;
			echo "<h2>Klik <a href='session02.php'>disini </a> untuk menuju ke halaman pemeriksaan session";
			
		}
	} else {
		?>
	<html>
	<head>
	<title>TP LOGIN</title>
	</head>
	<body>
		<form action="" method="post">
		<pre>
		<h2>		Login Disini...</h2><br>
		NIM		: <input type="text" name="user"><br>
		Password	: <input type="password" name="pass"><br>
		<input type="submit" name="login" value="LOGIN">
		<pre>
		</form>
		</body>
		</html>
	<?php } ?>
