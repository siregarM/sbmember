<?php
		$noAnggota = $_POST['noAnggota'];
		$status_pendidikan = $_POST['status_pendidikan'];
		$kelas = $_POST['kelas'];
		mysqli_query($link,"UPDATE tabel_member set				
				status_pendidikan	= '$status_pendidikan',
				kelas = '$kelas'
				where no_anggota='$noAnggota'
				
			") or die(mysqli_error($link));
	

		echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
		
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui
			  </div>";
?>