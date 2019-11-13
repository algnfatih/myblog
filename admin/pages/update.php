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
if (isset($_POST['link'])==null){
	echo "Post edilen veri yok! <br> Ana Sayfaya Yönlendiriliyorsunuz...";
    header("Refresh: 3; url=index.php?sayfa=home");
}
else
{
    
	//ayarlar sayfasından geliyorsa
    if ($_POST['link']=="ayarlar"){
		
		$bilgiler = ['isim', 'soyisim', 'bilgi1', 'bilgi2', 'mail', 'resim_profil', 'info', 'facebook_link', 'twitter_link', 'github_link', 'linkedin_link'];
		
		if ($_FILES['resim_profil']['name']!='' && 'uploads/'. $_FILES['resim_profil']['name']!= bilgicek('resim_profil')) {
			$_POST['resim_profil'] = resimyukle('../uploads/', 'uploads/', 'resim_profil'); }
			else { $_POST['resim_profil'] =  bilgicek('resim_profil'); }
		
		foreach($bilgiler as $bilgi){
			if(bilgicek($bilgi)!=$_POST[$bilgi]){
				bilgiduzenle('site_bilgiler', bilgicek($bilgi), $_POST[$bilgi], 'deger');
				echo "$bilgi Kaydedildi..";
			}
			else{
				echo "$bilgi değiştirilmemiş..";
			}
			echo '<br>';
		}
	}
	
	//user_profil sayfasından geliyorsa
	else if ($_POST['link']=="user_profil"){
		$kullanici = teksatircek('login', 'id', '1');
		
		$veriler = ['name', 'resim', 'user', 'pass' ];
		
		foreach($veriler as $veri){
			
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
		}
	}
		
	//link değeri hack koruma
	else {
		
	echo "Link değeri bulunamıyor..";	
	
	}
	
	//ne olursan ol bu sayfada çok durmana gerek yok kodu
	echo '<br> 15 saniye sonra yönlendiriliyorsunuz.. <a href="index.php?sayfa='. $_POST['link'] . '">beklememek için tıkla..</a>';
	header('Refresh: 15; url=index.php?sayfa='. $_POST['link'] .'');
}
?>

</div>  