<?php
		$noAnggota = $_POST['noAnggota'];
		$instagram = $_POST['instagram'];
		mysqli_query($link,"UPDATE member set				
				instagram	= '$instagram'
				where no_anggota='$noAnggota'
				
			") or die(mysqli_error($link));
	

		echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
		
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui
			  </div>";
?>