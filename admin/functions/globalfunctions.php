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