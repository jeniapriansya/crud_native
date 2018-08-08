<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD - view</title>
</head>
<body>
<h2 align="center">View Data</h2>
<table align="center" cellpadding="3px" cellspacing="1px" border="1px">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>No. Telepon</th>
		<th>Action</th>
	</tr>
	<?php
		include "connect.php";
		$getData = $connection->query("SELECT * FROM siswa");
		$no = 1;
		while ($fetchData = $getData->fetch_assoc()) {
	?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $fetchData["nama"]?></td>
			<td><?= $fetchData["alamat"]?></td>
			<td><?= $fetchData["email"]?></td>
			<td><?= $fetchData["no_tlp"]?></td>
			<td>
				<a href="edit.php?id=<?=$fetchData["id"]?>"><button>Edit</button></a>
				<a href="delete.php?id=<?=$fetchData["id"]?>"><button>Delete</button></a>
			</td>
		</tr>
	<?php
		}
	?>
</table>
</body>
</html>