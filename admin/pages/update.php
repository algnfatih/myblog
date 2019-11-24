<?php
if (defined('guvenlik')!=True) die('Git Buradan!');

include 'functions/updatefunctions.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Kaydediliyor..</h1>
          </div>

<?php 

//kaydet butonuna tıklayarak gelmemiş güvenliği
if (isset($_GET['kaydet']) && $_GET['kaydet']==null or ''){
	echo "Post edilen veri yok! <br> Ana Sayfaya Yönlendiriliyorsunuz...";
    header("Refresh: 3; url=index.php?sayfa=home");
}
else
{
    
	//ayarlar sayfasından geliyorsa
    if ($_GET['kaydet']=="ayarlar"){
		$bilgiler = ['isim', 'soyisim', 'bilgi1', 'bilgi2', 'mail', 'resim_profil', 'info', 'facebook_link', 'twitter_link', 'github_link', 'linkedin_link'];
		$_POST['resim_profil'] = "";
		foreach($bilgiler as $bilgi){
		  if(isset($_POST[$bilgi])){
			
			if ($_FILES['resim_profil']['name']!='' && 'uploads/'. $_FILES['resim_profil']['name']!= bilgicek('resim_profil')) {
				$_POST['resim_profil'] = resimyukle('../uploads/', 'uploads/', 'resim_profil'); }
			else { $_POST['resim_profil'] =  bilgicek('resim_profil'); }			
			  
			if(bilgicek($bilgi)!=$_POST[$bilgi]){
				bilgiduzenle('site_bilgiler', bilgicek($bilgi), $_POST[$bilgi], 'deger');
				echo "$bilgi Kaydedildi..";
			}
			else{
				echo "$bilgi değiştirilmemiş..";
			}
			echo '<br>';
		} else { echo "$bilgi post edilmemiş.. <br>"; }
	  } 
	}
	
	//user_profil sayfasından geliyorsa
	else if ($_GET['kaydet']=="user_profil"){
		$kullanici = teksatircek('login', 'id', '1');
		
		$veriler = ['name', 'resim', 'user', 'pass' ];
		$_POST['resim'] = "";
		foreach($veriler as $veri){
		  if(isset($_POST[$veri])){
			if ($veri == 'resim'){
				if ($_FILES['resim']['name']!='' && 'uploads/'. $_FILES['resim']['name']!= $kullanici -> resim){
					$_POST['resim'] = resimyukle('uploads/', 'uploads/', 'resim'); }
				else { $_POST['resim'] =  $kullanici -> resim; }
			}
			
			if($kullanici -> $veri!=$_POST[$veri]){
				bilgiduzenle('login', $kullanici -> $veri, $_POST[$veri], $veri);
				echo "$veri Kaydedildi..";
			}
			else{
				echo "$veri değiştirilmemiş..";
			}
			echo '<br>';
		} else { echo "$veri post edilmemiş.. <br>";}
	  }
	}
	
	else if ($_GET['kaydet']=="yaziduzenle"){
		if($yazi = teksatircek('yazilar', 'id', $_GET['id'])) {
		
			$veriler = ['yazi_baslik', 'link', 'yazi_metni', 'kategori', 'resim', 'tarih'];
			
			foreach ($veriler as $veri){
				$_POST['tarih'] = "";
				$_POST['link'] = "";
				$_POST['resim'] = "";
			  if(isset($_POST[$veri])){
				if ($veri == 'resim'){
					if ($_FILES['resim']['name']!='' && 'uploads/'. $_FILES['resim']['name']!= $yazi -> resim){
						$_POST['resim'] = resimyukle('../uploads/', 'uploads/', 'resim'); }
					else { $_POST['resim'] =  $yazi -> resim; }
				}
				
				if($veri == 'link'){
					$_POST['link'] = seflink($_POST['yazi_baslik']);
				}
				
				if($veri == 'tarih'){
					$_POST['tarih'] = date("Y-m-d h:i:s");
				}
				
				

					if($yazi -> $veri!=$_POST[$veri]){
					veriduzenle('yazilar', $yazi -> $veri, $_POST[$veri], $veri, $yazi -> id );
					echo "$veri Kaydedildi.. <br>"; 
					}
				else { echo "$veri değiştirilmemiş.. <br>";}
				

			  } else { echo "$veri post edilmemiş.. <br>";} 
			}
			
			$_GET['kaydet'] = $_GET['kaydet']. '&id=' . $yazi -> id . '';
		}
		else {	echo "--> id değeri bulunamıyor..";	 $_GET['kaydet'] = 'home'; }
	}
	
	
	else if ($_GET['kaydet']=="deneyimduzenle"){
	  if ($deneyim = teksatircek('deneyimler', 'id', $_GET['id'])){	
		$veriler = ['deneyim', 'firma', 'aciklama', 'calisma_suresi' ];

		foreach($veriler as $veri){
		  if(isset($_POST[$veri])){

			if($deneyim -> $veri!=$_POST[$veri]){
				veriduzenle('deneyimler', $deneyim -> $veri, $_POST[$veri], $veri, $deneyim -> id );
				echo "$veri Kaydedildi..";
			}
			else{
				echo "$veri değiştirilmemiş..";
			}
			echo '<br>';
		} else { echo "$veri post edilmemiş.. <br>";}
			
			
		
		} $_GET['kaydet'] = $_GET['kaydet']. '&id=' . $deneyim -> id . ''; 
	  }
	
		
		else { "Deneyim çekilemedi.. <br>"; }
		
	}
	
	else if($_GET['kaydet']=="egitimduzenle"){
		if ($okul = teksatircek('okullar', 'id', $_GET['id'])){
			$veriler = ['okul_adi', 'bilgi', 'mezuniyet_tarihi'];
			
			foreach($veriler as $veri) {
				if(isset($_POST[$veri])){
					
					if($okul -> $veri!=$_POST[$veri]) {
					
						veriduzenle('okullar', $okul-> $veri, $_POST[$veri], $veri, $okul -> id);
						echo "$veri Kaydedildi.. <br>";
						
					}
					else {echo "$veri değiştirilmemiş.. <br> ";}
				
				}
				
				else {echo "$veri post edilmemiş.. <br>";}
			} $_GET['kaydet'] = $_GET['kaydet']. '&id=' . $okul -> id . ''; 
		}
		
		else { echo "Okul bilgisi çelilemedi. <br>"; }
	
	}
		
	
		
	//kaydet değeri hack koruma
	else {
		
	echo "Kaydet değeri bulunamıyor..";	
	$_GET['kaydet'] = 'home';
	}
	
	//ne olursan ol bu sayfada çok durmana gerek yok kodu
	echo '<br> 15 saniye sonra yönlendiriliyorsunuz.. <a href="index.php?sayfa='. $_GET['kaydet'] . '">beklememek için tıkla..</a>';
	header('Refresh: 15; url=index.php?sayfa='. $_GET['kaydet'] .'');
}
?>

</div>  