<?php
		$noAnggota = $_POST['noAnggota'];
		$email = $_POST['email'];
		mysqli_query($link,"UPDATE member set				
				email	= '$email'
				where no_anggota='$noAnggota'
				
			") or die(mysqli_error($link));
	
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui Silahkan Login Kembali
			  </div>";
		session_start(); // memulai session
		session_destroy(); // menghapus session
		header("location:../index.php"); 
?>