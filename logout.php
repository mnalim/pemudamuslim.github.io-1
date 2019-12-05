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
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Berhasil Logout</h2>kamu akan dialihkan kembali ke halaman login dalam 2 detik <br>
    <div class="loader"></div>	
    </center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h2>Gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <?php
}
?>