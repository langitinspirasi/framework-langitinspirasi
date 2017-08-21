<?php
// Paging untuk blog
class paging_blog{
  // Fungsi untuk mencek halaman dan posisi data
  function cariPosisi($batas){
    if(empty($_GET['halblog'])){
	     $posisi=0;
	     $_GET['halblog']=1;
    }
    else{
	     $posisi = ($_GET['halblog']-1) * $batas;
    }
    return $posisi;
  }

  // Fungsi untuk menghitung total halaman
  function jumlahHalaman($jmldata, $batas){
    $jmlhalaman = ceil($jmldata/$batas);
    return $jmlhalaman;
  }

  // Fungsi untuk link halaman 1,2,3, dst 
  function navHalaman($halaman_aktif, $jmlhalaman){
    $link_halaman = "";

    // Link ke halaman pertama (first) dan sebelumnya (prev)
    if($halaman_aktif > 1){
	    $prev = $halaman_aktif-1;
	    $link_halaman .= "<a href=\"?hal=blog&halblog=1\">&laquo;</a>   
                        <a href=\"?hal=blog&halblog=$prev\">&lsaquo;</a> ";
    }

    // Link halaman 1,2,3, ...
    $angka = ($halaman_aktif > 3 ? " ... " : " "); 
    for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
      if ($i < 1) continue;
	    $angka .= "<li> <a href=\"?hal=blog&halblog=$i\">$i</a> </li>";
    }
	    $angka .= "<li> <span class=\"active\">$halaman_aktif</span> </li>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
      if($i > $jmlhalaman) break;
	    $angka .= "<li> <a href=\"?hal=blog&halblog=$i\">$i</a> </li>";
    }
	    $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><span class=\"active\">...</span></li><li><a href=\"?hal=blog&halblog=$jmlhalaman\">$jmlhalaman</a> </li>" : " ");

    $link_halaman .= "$angka";

    // Link ke halaman berikutnya (Next) dan terakhir (Last) 
    if($halaman_aktif < $jmlhalaman){
	    $next = $halaman_aktif+1;
	    $link_halaman .= "<li> <a href=\"?hal=blog&halblog=$next\">&rsaquo;</a></li>  
                         <li><a href=\"?hal=blog&halblog=$jmlhalaman\">&raquo;</a> </li>";
    }
    return $link_halaman;
  }
}


// Paging untuk produk
class paging_produk{
  // Fungsi untuk mencek halaman dan posisi data
  function cariPosisi($batas){
    if(empty($_GET['halproduk'])){
	     $posisi=0;
	     $_GET['halproduk']=1;
    }
    else{
	     $posisi = ($_GET['halproduk']-1) * $batas;
    }
    return $posisi;
  }

  // Fungsi untuk menghitung total halaman
  function jumlahHalaman($jmldata, $batas){
    $jmlhalaman = ceil($jmldata/$batas);
    return $jmlhalaman;
  }

  // Fungsi untuk link halaman 1,2,3, dst 
  function navHalaman($halaman_aktif, $jmlhalaman){
    $link_halaman = "";

    // Link ke halaman pertama (first) dan sebelumnya (prev)
    if($halaman_aktif > 1){
	    $prev = $halaman_aktif-1;
	    $link_halaman .= "<a href=\"?hal=produk&halproduk=1\">&laquo;</a>   
                        <a href=\"?hal=produk&halproduk=$prev\">&lsaquo;</a> ";
    }

    // Link halaman 1,2,3, ...
    $angka = ($halaman_aktif > 3 ? " ... " : " "); 
    for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
      if ($i < 1) continue;
	    $angka .= "<li> <a href=\"?hal=produk&halproduk=$i\">$i</a> </li>";
    }
	    $angka .= "<li> <span class=\"active\">$halaman_aktif</span> </li>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
      if($i > $jmlhalaman) break;
	    $angka .= "<li> <a href=\"?hal=produk&halproduk=$i\">$i</a> </li>";
    }
	    $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><span class=\"active\">...</span></li><li><a href=\"?hal=produk&halproduk=$jmlhalaman\">$jmlhalaman</a> </li>" : " ");

    $link_halaman .= "$angka";

    // Link ke halaman berikutnya (Next) dan terakhir (Last) 
    if($halaman_aktif < $jmlhalaman){
	    $next = $halaman_aktif+1;
	    $link_halaman .= "<li> <a href=\"?hal=produk&halproduk=$next\">&rsaquo;</a></li>  
                         <li><a href=\"?hal=produk&halproduk=$jmlhalaman\">&raquo;</a> </li>";
    }
    return $link_halaman;
  }
}

// Paging untuk kategori
class paging_kategori{
  // Fungsi untuk mencek halaman dan posisi data
  function cariPosisi($batas){
    if(empty($_GET['halkategori'])){
	     $posisi=0;
	     $_GET['halkategori']=1;
    }
    else{
	     $posisi = ($_GET['halkategori']-1) * $batas;
    }
    return $posisi;
  }

  // Fungsi untuk menghitung total halaman
  function jumlahHalaman($jmldata, $batas){
    $jmlhalaman = ceil($jmldata/$batas);
    return $jmlhalaman;
  }

  // Fungsi untuk link halaman 1,2,3, dst 
  function navHalaman($halaman_aktif, $jmlhalaman){
    $link_halaman = "";

    // Link ke halaman pertama (first) dan sebelumnya (prev)
    if($halaman_aktif > 1){
	    $prev = $halaman_aktif-1;
	    $link_halaman .= "<a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=1\">&laquo;</a>   
                          <a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$prev\">&lsaquo;</a> ";
    }

    // Link halaman 1,2,3, ...
    $angka = ($halaman_aktif > 3 ? " ... " : " "); 
    for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
      if ($i < 1) continue;
	    $angka .= "<li> <a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$i\">$i</a> </li>";
    }
	    $angka .= "<li> <span class=\"active\">$halaman_aktif</span> </li>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
      if($i > $jmlhalaman) break;
	    $angka .= "<li> <a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$i\">$i</a> </li>";
    }
	    $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><span class=\"active\">...</span></li><li><a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$jmlhalaman\">$jmlhalaman</a> </li>" : " ");

    $link_halaman .= "$angka";

    // Link ke halaman berikutnya (Next) dan terakhir (Last) 
    if($halaman_aktif < $jmlhalaman){
	    $next = $halaman_aktif+1;
	    $link_halaman .= "<li> <a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$next\">&rsaquo;</a></li>  
                         <li><a href=\"?hal=kategori&&action=detail&&id=$_GET[id]&halkategori=$jmlhalaman\">&raquo;</a> </li>";
    }
    return $link_halaman;
  }
}
?>