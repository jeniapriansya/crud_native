<?php
	session_start();
	include "connect.php";

	if (isset($_POST["nama"])) {
		
		$id = $_POST["id"];
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

			$connection->query("UPDATE siswa SET nama='".$nama."', alamat='".$alamat."', email='".$email."', no_tlp='".$no_tlp."' WHERE id =".$id);

			$message = "Sukses mengedit data";
		}
		$_SESSION["message"] = $message;
		header("location:edit.php?id=".$id);
		exit();
	}
	header("location:insert.php");
	exit();

?>