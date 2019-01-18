<?php
	function tgl_indonesia($tgl){
		$tanggal = substr($tgl,8,2);
		$nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", 
                "Juni", "Juli", "Agustus", "September", 
                "Oktober", "November", "Desember");
		$bulan = $nama_bulan[substr($tgl,5,2) - 1];
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	date_default_timezone_set("Asia/Jakarta");
	function datediff($tgl1, $tgl2){
	$tgl1 = strtotime($tgl1);
	$tgl2 = strtotime($tgl2);
	$diff_secs = abs($tgl1 - $tgl2);
	$base_year = min(date("Y", $tgl1), date("Y", $tgl2));
	$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
	return array( "years" => date("Y", $diff) - $base_year,
	        "months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1, 
	        "months" => date("n", $diff) - 1, 
	        "days_total" => floor($diff_secs / (3600 * 24)), 
	        "days" => date("j", $diff) - 1, 
	        "hours_total" => floor($diff_secs / 3600), 
	        "hours" => date("G", $diff), 
	        "minutes_total" => floor($diff_secs / 60), 
	        "minutes" => (int) date("i", $diff), 
	        "seconds_total" => $diff_secs, 
	        "seconds" => (int) date("s", $diff) );
	}
?>
