<?php	
	/*--- Fungsi mengubah tanggal bulan dan tahun menjadi format Indonesia ---*/
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
	}
	/* Menampilkan bulan dan tahun */
	function bln_indo($bln){
			//$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($bln,5,2));
			$tahun = substr($bln,0,4);
			return $bulan.' '.$tahun;		 
	}
	
	function thn_indo($bln){
			//$tanggal = substr($tgl,8,2);
			//$bulan = getBulan(substr($bln,5,2));
			$tahun = substr($bln,0,4);
			return $tahun;		 
	}
	
	// konversi menjadi nama hari bahasa indonesia
	$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$hari     = date("w");
	$hari_ini = $seminggu[$hari]; // konversi menjadi hari bahasa indonesia

	$tgl_sekarang   = date("Ymd");
	$thn_sekarang   = date("Y");
	$jam_sekarang   = date("H:i:s");
	$bulan_sekarang = date("F");
	// format penanggalan di database MySQL
	$tanggal=date("Y-m-d"); 
?>
