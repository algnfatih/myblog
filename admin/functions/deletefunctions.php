<?php
function verisil($tablo, $id){
	$sil = DB::exec("DELETE FROM $tablo WHERE id = ?", array($id));
	return $sil;
}
