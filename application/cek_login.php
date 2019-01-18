<?php

include "../lib/koneksi.php";

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username	= anti_injection($_POST['username']);
$password	= anti_injection($_POST['password']);
$level	= $_POST['level'];

if($level=='Ketua'){
	$mysql=mysql_query("select * from karyawan where username='$username' and password='$password'")or die(mysql_error());
}else if($level=="Sekretaris"){
	$mysql=mysql_query("select * from karyawan where username='$username' and password='$password'")or die(mysql_error());		
}else if($level=="Bendahara"){
	$mysql=mysql_query("select * from karyawan where username='$username' and password='$password' and jabatan='Bendahara'")or die(mysql_error());		
}else if($level=="Anggota"){
	$mysql=mysql_query("select * from anggota where username='$username' and password='$password' and status='1'")or die(mysql_error());		
}else{
	$mysql=mysql_query("select * from admin where username='$username' and password='$password'");
}

$data=mysql_fetch_array($mysql);


if(mysql_num_rows($mysql) > 0){

$_SESSION['username'] = $username;
$_SESSION['level'] = $level;
	 
		
	    echo"<div class='alert alert-info'>sukses..</div>";
		echo"<meta http-equiv='refresh' content='0; url=index2.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
	}
	
?>

