<?php
	session_start();
	include "connect.php";

	if (isset($_GET["id"])) {

		$connection->query("DELETE FROM siswa WHERE id =".$_GET["id"]);
	}
	header("location:view.php");
	exit();
?>