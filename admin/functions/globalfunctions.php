<?php if (defined('guvenlik')!=True) die('Git Buradan!');

include 'functions/db.php';

function yonlendir(){
	if(isset($_GET['sayfa'])){
		$sayfa = $_GET['sayfa'];
		if($sayfa==' '){
			include "pages/404.php";
			}
		else {
			
			if (file_exists("pages/$sayfa.php")){
			include "pages/$sayfa.php";
			}
			else { include "pages/404.php"; }
		
		}
	}
	
	else {
		include "pages/home.php";
	}
}


function bilgicek($bilgi){

	$satir = DB::getRow("SELECT * FROM site_bilgiler WHERE degisken = ? LIMIT 1", array($bilgi));
	$veri = $satir -> deger;
	return $veri;
};

function teksatircek ($tabloadi, $kolon, $deger) {

	$satir = DB::getRow("SELECT * FROM $tabloadi WHERE $kolon = ? LIMIT 1", array($deger));
	return $satir;
}


function cokluvericek($tabloadi){
	$cokluveri = DB::get("SELECT * FROM $tabloadi ORDER BY id");
	return $cokluveri;
}


function seflink($text)
{
	$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
	$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
	$text = strtolower(str_replace($find, $replace, $text));
	$text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
	$text = trim(preg_replace('/\s+/', ' ', $text));
	$text = str_replace(' ', '-', $text);
	return $text;
}