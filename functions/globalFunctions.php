<?php 
if(defined('guvenlik')!=True) die('Git burdan!');
include 'db.php';

function yonlendir(){
	if (isset ($_GET['sayfa'])){ //eğerki sayfa değişkeni varsa çalıştır
		$sayfa = $_GET['sayfa'];
		if ($sayfa!='header' || $sayfa!='navs' || $sayfa!='footer') {
		if ( file_exists( "pages/$sayfa.php" ) ) {
			//$sayfa . '.php' çalışır
			//'$sayfa.php' değişkeni bulamaz
		include ("pages/$sayfa.php");
		}else {
		include ("pages/404.php");
			}
		}
	}
	else{
		header('Location: index.php?sayfa=home');
	}
	
}


function bilgicek($bilgiadi){
	$bilgi = DB::getRow("Select * from site_bilgiler WHERE degisken='$bilgiadi'");
	
	if( isset($bilgi->deger) ){
		return $bilgi -> deger;	
	}
	else{
		echo("$bilgiadi degerini bulamadım!");
	}
}

function teklivericek($tabloadi, $kolon, $deger){
	$veri = DB::getRow("Select * from $tabloadi WHERE $kolon=? LIMIT 1", array($deger));
	if( isset($veri-> $kolon) ){
		return $veri;	
	}
	else{
		echo("$kolon, $deger bulamadım!");
	}
}

function cokluvericek($tabloadi, $limit='', $sirala=false){
	if ($limit != ''){
		$limit = 'limit ' . $limit;
		
	}
	if ($sirala!=false){
		$sirala = 'ORDER BY tarih DESC';
	}
	$veriler = DB::get("SELECT * FROM $tabloadi $sirala $limit");
	return $veriler;
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
