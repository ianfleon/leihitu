<?php

// koneksi db
require 'koneksi.php';

session_start();

if(isset($_SESSION['user'])) {
  header("Location: index.php");
}

if(isset($_POST["login"])) {
	$user = $_POST["username"];
	$pass = $_POST["password"];

	$akun = mysqli_query($konek, "SELECT * FROM akun_tb WHERE username = '$user' AND password = '$pass'");

	if(mysqli_affected_rows($konek) == 1) {
		$_SESSION['user'] = "admin";
		echo "Login berhasil";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	} else {
		echo "Username dan Password salah!";
	}
}

// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Admin</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" id="username">
			<br>
			<br>
		<label for="password">Password</label>
			<input type="text" name="password" placeholder="Password">
			<br>
			<br>
		<button name="login" type="submit">Login</button>
	</form>
</body>
</html>