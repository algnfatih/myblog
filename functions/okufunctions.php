<?php 
if(defined('guvenlik')!=True) die('Git burdan!');

if (isset($_GET['yazi']) && $_GET['yazi']!=''){
		$yazi = teklivericek('yazilar', 'link', $_GET['yazi'] );
		if($yazi == null){
			header('Location: index.php?sayfa=arsiv');
			}
	}
else {
	header('Location: index.php?sayfa=arsiv');
}

