<?php

	$connection = new mysqli("localhost", "root", "", "crudnew");
	if (!isset($connection)) {
		echo "Koneksi database gagal !!";
	}