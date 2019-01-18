<?php
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "home";
?>



<?php	
	if( $tampil == "home" )		include("beranda.php");	
	
	
		
	elseif( $tampil == "tampil_member" )		    include("data/tabel_member/tampil_member.php");	
	elseif( $tampil == "update_member" )		    include("data/tabel_member/update_member.php");	
	elseif( $tampil == "update_nohp" )		    	include("data/tabel_member/update_nohp.php");	
	elseif( $tampil == "update_email" )		    	include("data/tabel_member/update_email.php");	
	elseif( $tampil == "update_instagram" )		    include("data/tabel_member/update_instagram.php");	
	elseif( $tampil == "update_foto" )		    	include("data/tabel_member/update_foto.php");	
	elseif( $tampil == "update_pendidikan" )		include("data/tabel_member/update_pendidikan.php");	

	elseif( $tampil == "tampil_oprec" )		    include("data/tabel_oprec/tampil_oprec.php");	
	elseif( $tampil == "form_oprec" )		    include("data/tabel_oprec/form_oprec.php");	


	
	
	
?>
