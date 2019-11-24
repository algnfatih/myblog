<?php
if (defined('guvenlik')!=True) die('Git Buradan!');

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

function yaziekle($yazi_baslik, $yazi_metni, $kategori, $resim){
	
	$link = seflink($yazi_baslik);
	$tarih = date("Y-m-d h:i:s");
	
	$yaziekle = DB::insert(
	'INSERT INTO yazilar (yazi_baslik, link, yazi_metni, kategori, resim, tarih) VALUES (?, ?, ?, ?, ?, ?)',
	array($yazi_baslik, $link, $yazi_metni, $kategori, $resim, $tarih));
	return $yaziekle;
	
}

function deneyimekle($deneyim, $firma, $aciklama, $calisma_suresi){
	
	$deneyimekle = DB::insert(
	'INSERT INTO deneyimler (deneyim, firma, aciklama, calisma_suresi) VALUES (?, ?, ?, ?)',
	array($deneyim, $firma, $aciklama, $calisma_suresi));
	return $deneyimekle;
	
}

function okulekle($okul_adi, $bilgi, $mezuniyet_tarihi){
	
	$okulekle = DB::insert(
	'INSERT INTO okullar (okul_adi, bilgi, mezuniyet_tarihi) VALUES (?, ?, ?)',
	array($okul_adi, $bilgi, $mezuniyet_tarihi));
	return $okulekle;
	
}


