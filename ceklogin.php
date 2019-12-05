<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
$email = "admin@gmail.com";
$password = "123";
if(isset($_POST['email']) && isset($_POST['password'])) {
	if($_POST['email'] == $email && $_POST['password'] == $password) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
		echo "<center><h1>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] == $password) {
		echo "<center><h1>Gagal!, Email Salah</h1></center>";
	} elseif($_POST['email'] == $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Password Salah</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
	} 
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>
<center>
	<div class="loader"></div>
</center>
</body>
</html>