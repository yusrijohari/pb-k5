<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sah =(($username == 'pengguna' AND $password =='pengguna123'));
$_SESSION['id'] = $sah;

<script>
	echo "<script>alert ('Berjaya Log masuk')<br>
	<a href=\"kira.php\">Kalkulator</a>";

	echo "<script>alert ('Log Masuk gagal ')<br>
	<a href=\"login.html\">Kembali</a>";
</script>
?>
