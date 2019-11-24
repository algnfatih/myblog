<?php if (defined('guvenlik')!=True) die('Git Buradan!');

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Yazı Ekle</h1>
          </div>
		  
		  <form method="post" enctype="multipart/form-data" action="index.php?sayfa=add&ekle=yaziekle">
		  
		 <div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Yazı Başlığı</label>
			  <input type="text" class="form-control" id="yazi_baslik" name="yazi_baslik">
		  </div>
			 <div class="form-group col-md-6">
			  <label for="inputkategori4">Kategori</label>
			  <input type="text" class="form-control" id="inputkategori4" name="kategori">
			</div>
		  </div>
		  
		 <div class="form-group">
    <label for="exampleFormControlTextarea1">Yazı Metni</label>
    <textarea class="form-control ckeditor" id="yazi_metni" rows="3" name="yazi_metni"></textarea>
  </div>
		  
		<div class="form-row">
		 <div class="form-group col-md-6">
		  <label for="inputesim4">Resim</label> <br>
		  <input type="file" class="" id="inputresim4" name="resim">
		 </div>	
		</div>
		
		<input type="submit" class="btn btn-primary" value="Ekle">
	
		  </form>
		  <br>
		  </div>