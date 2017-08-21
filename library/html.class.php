<?php
	
	//Fungsi untuk memanggil file CSS
	function css($path){
		echo '<link rel="stylesheet" type="text/css" href="'.PATH.'/assets/'.$path.'">';
	}
	
	//Fungsi untuk memanggil file Javascript
	function javascript($path){
		echo '<script type="text/javascript" src="'.PATH.'/assets/'.$path.'"></script>';
	}

?>