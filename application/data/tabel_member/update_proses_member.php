<?php
		$noAnggota = $_POST['noAnggota'];
			$nama_lengkap = $_POST['nama_lengkap'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tempatLahir = $_POST['tempatLahir'];
			$tanggalLahir = $_POST['tanggalLahir'];
			$provinsi = $_POST['provinsi'];
			$kota = $_POST['kota'];
		mysqli_query($link,"UPDATE tabel_member set				
				nama_lengkap	= '$nama_lengkap',
				jenis_kelamin 	= '$jenis_kelamin',
				tempat_lahir 	= '$tempatLahir',
				tanggal_lahir 	= '$tanggalLahir',
				provinsi 	= '$provinsi',
				kota 	= '$kota'
				where no_anggota='$noAnggota'
				
			") or die(mysqli_error($link));
	

		echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
		
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui
			  </div>";
?>