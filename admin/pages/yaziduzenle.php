<?php if (defined('guvenlik')!=True) die('Git Buradan!');

include ('functions/addfunctions.php');

if (isset($_GET['id']) && $_GET['id'] != null or ''){
	if($yazi = teksatircek('yazilar', 'id', $_GET['id'])){
	}
	else{
		echo "---> id değeri eksik. yönlendiriliyorsunuz..";
		header("Refresh:3, url=index.php?sayfa=home");
		die ('');
	}
}
else { 
		echo "---> id değeri eksik. yönlendiriliyorsunuz..";
	header("Refresh:3, url=index.php?sayfa=home");
	die ('');
}

?>
		
	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Yazı Düzenle</h1>
          </div>
		  
		  <form method="post" enctype="multipart/form-data" action="index.php?sayfa=update&kaydet=yaziduzenle&id=<?php echo $yazi -> id ?>">
		  
		 <div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Yazı Başlığı</label>
			  <input type="text" class="form-control" id="yazi_baslik" name="yazi_baslik" value="<?php echo $yazi -> yazi_baslik ?>">
		  </div>
			 <div class="form-group col-md-6">
			  <label for="inputkategori4">Kategori</label>
			  <input type="text" class="form-control" id="inputkategori4" name="kategori" value="<?php echo $yazi -> kategori ?>">
			</div>
		  </div>
		  
		 <div class="form-group">
    <label for="exampleFormControlTextarea1">Yazı Metni</label>
    <textarea class="form-control ckeditor" id="yazi_metni" rows="3" name="yazi_metni"><?php echo $yazi -> yazi_metni ?></textarea>
  </div>
		  
		<div class="form-row">
		 <div class="form-group col-md-6">
		  <label for="inputesim4">Resim</label> <br>
		  <input type="file" class="" id="inputresim4" name="resim">
		 </div>	
		</div>
		
		<input type="submit" class="btn btn-primary" value="Kaydet">
	
		  </form>
		  <br>
		  </div>