<?php if (defined('guvenlik')!=True) die('Git Buradan!'); 


function bilgiduzenle($tablo, $bilgi, $yeni_bilgi, $kolon){
    $duzenle = DB::exec("UPDATE $tablo SET  $kolon = ? WHERE $kolon = ?", array($yeni_bilgi, $bilgi));
    return $duzenle;
}

function resimyukle($dizin, $db_veri, $veri){
	if ($_FILES[$veri]['name']!='' && $_FILES[$veri]['type'] == "JPG" or "JPEG"){
				
		$db_sql = $db_veri . basename($_FILES[$veri]['name']);
		
		
		$yuklenecek_dosya = $dizin . basename($_FILES[$veri]['name']);
		
		//dosyayı tmp dizininden yükleme klasörüne taşıyoruz..
		move_uploaded_file($_FILES[$veri]['tmp_name'], $yuklenecek_dosya); 
		
		return $db_sql;
	}
	else {echo "$veri alanında bir resim seçilmemiş..";}
}


