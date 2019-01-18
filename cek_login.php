<?php

include "./lib/koneksi.php";
	// $link = mysqli_connect("localhost", "root", "123456789", "db_koperasi");


$email	= mysqli_real_escape_string($link,$_POST['email']);
$password	= mysqli_real_escape_string($link,$_POST['password']);


$mysql=mysqli_query($link,"select * from tabel_member where email='$email' and password='$password'")or die(mysqli_error($link));

if(mysqli_num_rows($mysql) > 0){

$_SESSION['email'] = $email;
	 
		
	    echo"<div class='alert alert-info'>sukses..</div>";
		echo"<meta http-equiv='refresh' content='0; url=application/index.php'>";
	}else{
		echo"<center>Gagal, email atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
	}
	
?>

