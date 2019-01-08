<?php
	$noAnggota = $_POST['noAnggota'];
	$nama_userfile	= $_FILES['userfile']['name'];
	$lokasi_userfile 	= $_FILES['userfile']['tmp_name'];
	$tipe_userfile	= $_FILES['userfile']['type'];

		
		$data=mysqli_fetch_array(mysqli_query($link, "select * from member where no_anggota='$noAnggota'"));
		if($data['foto_profil'] != "") unlink("./foto_profil/$data[foto_profil]");
		$destination = '/foto_profil' . $nama_userfile;

		if (move_uploaded_file($nama_userfile, $destination)) {
		    chmod($destination, 0664);
		}
		
	    mysqli_query($link, "UPDATE member SET 
				foto_profil	= '$nama_userfile'
				
			WHERE no_anggota='$noAnggota'") or die(mysqli_error($link));
	
		// echo"<div class='alert alert-success'>
		// 	    <strong>Success!</strong> Data Berhasil diperbaharui Silahkan Login Kembali
		// 	  </div>";
		// echo"<meta http-equiv='refresh' content='0; url=?tampil=tampil_member'>";
	    echo "<pre>";
		print_r($_FILES);
		echo "<pre>";
		

?>