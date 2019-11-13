<?php

include 'functions/globalfunctions.php';
$hata = False;



function userkontrol($kullanici, $password){	
	$veri = DB::getRow("SELECT * FROM login WHERE  user = ? and pass = ?", array($kullanici, $password));
	return $veri;
}

if(isset($_POST['kadi']) && isset($_POST['sifre'])){
	$kontrol = userkontrol($_POST['kadi'], $_POST['sifre']);
	if ($kontrol!=False){
		 $_SESSION['giris']=TRUE;
		 header('location: index.php?sayfa=home');
	}
	else
	{
		$hata = True;
	}
}
