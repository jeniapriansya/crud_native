<?php
	session_start();
	include "connect.php";

	if (!isset($_GET["id"])) {
		header("location:view.php");
		exit();
	}

	$id = $_GET["id"];

	$getData = $connection->query("SELECT * FROM siswa WHERE id =".$id);

	if ($getData->nuw_rows=0) {
		header("location:view.php");
		exit();
	}

	$getData = $getData->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD - Insert</title>
</head>
<body>
<h2>Edit Data</h2>
<form action="editProses.php" method="post">
<input type="hidden" name="id" value="<?= $_GET["id"]?>">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$getData["nama"]?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat"><?=$getData["alamat"]?></textarea></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?=$getData["email"]?>"></td>
	</tr>
	<tr>
		<td>No. Telepon</td>
		<td>:</td>
		<td><input type="number" name="no_tlp" value="<?=$getData["no_tlp"]?>"></td>
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