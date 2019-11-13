<?php

include 'functions/globalfunctions.php';
$hata = False;



function userkontrol($kullanici, $password){	
	$veri = DB::getRow("SELECT * FROM login WHERE  user = ?", array($kullanici));
	return $veri;
}

if(isset($_POST['kadi']) && isset($_POST['sifre'])){
	$kontrol = userkontrol($_POST['kadi'], $_POST['sifre']);
	if ($kontrol!=False){
		 $_SESSION['giris']=TRUE;
		 $_SESSION['kadi']=$kullanici -> user;
		 $_SESSION['sifre']=$kullanici -> pass;
		 header('location: index.php?sayfa=home');
	}
	else
	{
		$hata = True;
	}
}
