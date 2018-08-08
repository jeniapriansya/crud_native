<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD - Insert</title>
</head>
<body>
<h2>Insert Data</h2>
<form action="insertProses.php" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>No. Telepon</td>
		<td>:</td>
		<td><input type="number" name="no_tlp"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><button>Save Data</button></td>
	</tr>
</table>
</form>
<?php
	if (isset($_SESSION["message"])) {
		echo $_SESSION["message"];
		unset($_SESSION["message"]);
	}
?>
</body>
</html>