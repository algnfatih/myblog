<?php

function satirsayisi($tablo){

	$satir = DB::query("SELECT COUNT(*) FROM $tablo ");
	$sayi = $satir->fetchColumn();
	return $sayi;
}