<?php if (defined('guvenlik')!=True) die('Git Buradan!');

if (isset($_GET['id']) && $_GET['id'] != null or ''){
	if($deneyim = teksatircek('deneyimler', 'id', $_GET['id'])){
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
            <h1 class="h3 mb-0 text-gray-800">Deneyim Düzenle</h1>
          </div>
		  
		  <form method="post" enctype="multipart/form-data" action="index.php?sayfa=update&kaydet=deneyimduzenle&id=<?php echo $deneyim -> id ?>">
		  
		 <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Deneyim</label>
			  <input type="text" class="form-control" id="deneyim" name="deneyim" value="<?php echo $deneyim -> deneyim ?>">
			</div>
			 <div class="form-group col-md-6">
			  <label for="inputkategori4">Firma</label>
			  <input type="text" class="form-control" id="inputfirma4" name="firma" value="<?php echo $deneyim -> firma ?>">
			</div>
		  </div>
		  <div class="form-group">
    <label for="exampleFormControlTextarea1">Açıklama</label>
    <textarea class="form-control ckeditor" id="aciklama" rows="3" name="aciklama"><?php echo $deneyim -> aciklama ?></textarea>
  </div>
		<div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Çalışma Süresi</label>
			  <input type="text" class="form-control" id="calisma_suresi" name="calisma_suresi" value="<?php echo $deneyim -> calisma_suresi ?>">
		  </div>
		  </div>
		
		<input type="submit" class="btn btn-primary" value="Kaydet">
	
		  </form>
		  <br>
		  </div>