<?php
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "home";
?>



<?php	
	if( $tampil == "home" )		include("beranda.php");	
	
	
		
	elseif( $tampil == "tampil_member" )		    include("data/tabel_member/tampil_member.php");	
	elseif( $tampil == "update_member" )		    include("data/tabel_member/update_member.php");	
	elseif( $tampil == "update_nohp" )		    include("data/tabel_member/update_nohp.php");	
	elseif( $tampil == "update_email" )		    include("data/tabel_member/update_email.php");	
	elseif( $tampil == "update_instagram" )		    include("data/tabel_member/update_instagram.php");	
	elseif( $tampil == "update_foto" )		    include("data/tabel_member/update_foto.php");	


	elseif( $tampil == "tampil_anggota" )		    include("data/tabel_anggota/tampil_anggota.php");	
	elseif( $tampil == "tambah_anggota" )		    include("data/tabel_anggota/tambah_anggota.php");	
	elseif( $tampil == "update_anggota" )		    include("data/tabel_anggota/update_anggota.php");	
	elseif( $tampil == "hapus_anggota" )		    include("data/tabel_anggota/hapus_anggota.php");	
	elseif( $tampil == "verifikasi_anggota" )		    include("data/tabel_anggota/verifikasi_anggota.php");

	
	elseif( $tampil == "daftar" )		    include("daftar.php");	
	elseif( $tampil == "edit_anggota" )		    include("data/edit_anggota.php");	
	elseif( $tampil == "edit_profil_karyawan" )		    include("data/edit_karyawan.php");	
	elseif( $tampil == "edit_profil_admin" )		    include("data/update_profil_admin.php");	
	elseif( $tampil == "tampil_profil_admin" )		    include("data/tampil_profil_admin.php");	
	elseif( $tampil == "tampil_profil_karyawan" )		    include("data/tampil_profil_karyawan.php");	
	elseif( $tampil == "tampil_profil" )		    include("data/tampil_profil.php");	
	
	
	
?>
