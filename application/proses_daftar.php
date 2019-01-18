<?php
include"../lib/koneksi.php";
	
			$noAnggota = $_POST['noAnggota'];
			$namaAnggota = $_POST['namaAnggota'];
			$tempatLahir = $_POST['tempatLahir'];
			$tanggalLahir = $_POST['tanggalLahir'];
			$jenisKelamin = $_POST['jenisKelamin'];
			$pekerjaan = $_POST['pekerjaan'];
			$unitKerja = $_POST['unitKerja'];
			$almRumah = $_POST['almRumah'];
			$tmt = $_POST['tmt'];
			$noHp = $_POST['noHp'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		mysql_query("INSERT INTO anggota set
				
				no_anggota	= '$noAnggota',
				nama	= '$namaAnggota',
				tempat_lahir 	= '$tempatLahir',
				tgl_lahir 	= '$tanggalLahir',
				kelamin 	= '$jenisKelamin',
				pekerjaan 	= '$pekerjaan',
				unitkerja 	= '$unitKerja',
				alamat 	= '$almRumah',
				tmt 	= '$tmt',
				nohp 	= '$noHp',
				username 	= '$username',
				password 	= '$password',
				status = '0'
				
			") or die(mysql_error());
	// }
	echo"<center>Pendaftaran Sukses Silahkan Hubungi Andmin untuk melakukan verifikasi data
		<p><a href='index.php' class='btn btn-primary'>Kembali</a></p></center>";
	
?>