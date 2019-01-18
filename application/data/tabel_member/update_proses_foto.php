<?php
	$noAnggota = $_POST['noAnggota'];
	$nama_userfile	= $_FILES['userfile']['name'];
	$lokasi_userfile 	= $_FILES['userfile']['tmp_name'];
	$tipe_userfile	= $_FILES['userfile']['type'];

		
		$data=mysqli_fetch_array(mysqli_query($link, "select * from tabel_member where no_anggota='$noAnggota'"));
		if($data['foto_profil'] != "") unlink("media/foto_profil/$data[foto_profil]");
		$destination = 'media/foto_profil/';


		// $destination_path = getcwd().DIRECTORY_SEPARATOR;
		// $target_path = $destination_path . basename( $_FILES["userfile"]["name"]);
		// @move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path);

		if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
			    move_uploaded_file($_FILES["userfile"]["tmp_name"], $destination . $_FILES["userfile"]["name"]);
			}
		
	    mysqli_query($link, "UPDATE tabel_member SET 
				foto_profil	= '$nama_userfile'
				
			WHERE no_anggota='$noAnggota'") or die(mysqli_error($link));
	
		echo"<div class='alert alert-success'>
			    <strong>Success!</strong> Data Berhasil diperbaharui</div>";
		echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
	 //    echo "<pre>";
		// print_r($_FILES);
		// echo "<pre>";
		// echo $destination_path;
		

?>