<?php
if (defined('guvenlik')!=True) die('Git Buradan!');
include 'functions/deletefunctions.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Siliniyor..</h1>
          </div>
		  
		  
		  <?php 
			if (isset($_GET['tablo']) && isset($_GET['sil']) && $_GET['tablo'] != null && $_GET['sil'] != null) {
					if ($_GET['tablo']=='yazilar'){
						$link = 'yaziliste';
						if (verisil($_GET['tablo'], $_GET['sil'])) {
							echo "Yazı silindi!" ; } 
						else { 
							echo "Silinecek veri bulunamadı!";}
					}
					
					else if ($_GET['tablo']=='deneyimler'){
						$link = 'deneyimliste';
						if (verisil($_GET['tablo'], $_GET['sil'])) {
							echo "Deneyim silindi!" ; } 
						else { 
							echo "Silinecek veri bulunamadı!";}
					}
					
					else if ($_GET['tablo']=='okullar'){
						$link = 'egitimliste';
						if (verisil($_GET['tablo'], $_GET['sil'])) {
							echo "Okul silindi!" ; } 
						else { 
							echo "Silinecek veri bulunamadı!";}
					}
					
					else {$link='home'; echo "Silinecek veri yok!";}
				}
				
				else {$link='home'; echo "Silinecek veri yok!";}
	

	//ne olursan ol bu sayfada çok durmana gerek yok kodu
	echo '<br> 15 saniye sonra yönlendiriliyorsunuz.. <a href="index.php?sayfa='. $link . '">beklememek için tıkla..</a>';	
	header('Refresh: 15; url=index.php?sayfa='. $link .'');		  
		  ?>
		 

		 
		 
		 
		 
		 </div>