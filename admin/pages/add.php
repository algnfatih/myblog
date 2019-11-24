<?php
if (defined('guvenlik')!=True) die('Git Buradan!');

include 'functions/addfunctions.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Kaydediliyor..</h1>
          </div>

<?php

if (isset($_GET['ekle']) and $_GET['ekle']!='' or null){
	
	if ($_GET['ekle']=='yaziekle'){
		
		$resim = resimyukle('../uploads/', 'uploads/', 'resim' );
		
		yaziekle($_POST['yazi_baslik'], $_POST['yazi_metni'], $_POST['kategori'], $resim);
		
		echo "Yazı ekleme başarılı!";
		
	}
	
	else if ($_GET['ekle']=='deneyimekle'){
		
		deneyimekle($_POST['deneyim'], $_POST['firma'], $_POST['aciklama'], $_POST['calisma_suresi']);
		
		echo "Deneyim ekleme başarılı!";
		
	}
	
	else if ($_GET['ekle']=='egitimekle'){
		
		okulekle($_POST['okul_adi'], $_POST['bilgi'], $_POST['mezuniyet_tarihi']);
		
		echo "Okul ekleme başarılı!";
		
	}
	
	
	else {
		echo "Böyle bir parametreye sahip sayfa yok!";
		$_GET['ekle']='home';
	}
	
	//ne olursan ol bu sayfada çok durmana gerek yok kodu
	echo '<br> 15 saniye sonra yönlendiriliyorsunuz.. <a href="index.php?sayfa='. $_GET['ekle'] . '">beklememek için tıkla..</a>';
	header('Refresh: 15; url=index.php?sayfa='. $_GET['ekle'] .'');
	
	
	
}
else
{
	echo "Ekle parametresi geçersiz.. <br> Anasayfa'ya yönlendiriliyorsunuz..";
	header("Refresh:3, url=index.php?sayfa=home"); 
}

?>

</div>