<?php if (defined('guvenlik')!=True) die('Git Buradan!');

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Okul Ekle</h1>
          </div>
		  
		  <form method="post" enctype="multipart/form-data" action="index.php?sayfa=add&ekle=egitimekle">
		  
		 <div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Okul Adı</label>
			  <input type="text" class="form-control" id="okul_adi" name="okul_adi">
		  </div>
			 <div class="form-group col-md-6">
			  <label for="inputkategori4">Mezuniyet Tarihi</label>
			  <input type="text" class="form-control" id="inputmezuniyet_tarihi4" name="mezuniyet_tarihi">
			</div>
		  </div>
		  
		 <div class="form-group">
    <label for="exampleFormControlTextarea1">Bilgi</label>
    <textarea class="form-control ckeditor" id="bilgi" rows="3" name="bilgi"></textarea>
  </div>
		
		<input type="submit" class="btn btn-primary" value="Ekle">
	
		  </form>
		  <br>
		  </div>