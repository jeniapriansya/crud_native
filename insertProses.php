<?php
	session_start();
	include "connect.php";

	if (isset($_POST["nama"])) {
		
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$email = $_POST["email"];
		$no_tlp = $_POST["no_tlp"];

		$message ="";

		if ($nama =="") {
			$message = "Silahkan isi nama anda";
		}else if ($alamat =="") {
			$message = "Silahkan isi alamat anda";
		}else if ($email =="") {
			$message = "Silahkan isi email anda";
		}else if ($no_tlp =="") {
			$message = "Silahkan isi no. telepon anda";
		}else{

			$connection->query("INSERT INTO siswa VALUES(null, '".$nama."', '".$alamat."', '".$email."', '".$no_tlp."')");

			$message = "Sukses menambahkan data baru";
		}
		$_SESSION["message"] = $message;
	}
	header("location:insert.php");
	exit();

?>