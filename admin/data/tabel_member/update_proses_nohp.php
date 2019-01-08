<?php
		$noAnggota = $_POST['noAnggota'];
		$no_hp = $_POST['no_hp'];
		mysqli_query($link,"UPDATE member set				
				no_hp	= '$no_hp'
				where no_anggota='$noAnggota'
				
			") or die(mysqli_error($link));
	

		echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
		
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui
			  </div>";
?>