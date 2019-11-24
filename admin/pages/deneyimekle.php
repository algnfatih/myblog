<?php if (defined('guvenlik')!=True) die('Git Buradan!');

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Deneyim Ekle</h1>
          </div>
		  
		  <form method="post" enctype="multipart/form-data" action="index.php?sayfa=add&ekle=deneyimekle">
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Deneyim</label>
			  <input type="text" class="form-control" id="deneyim" name="deneyim">
			</div>
			 <div class="form-group col-md-6">
			  <label for="inputkategori4">Firma</label>
			  <input type="text" class="form-control" id="inputfirma4" name="firma">
			</div>
		  </div>
		  <div class="form-group">
    <label for="exampleFormControlTextarea1">Açıklama</label>
    <textarea class="form-control ckeditor" id="aciklama" rows="3" name="aciklama"></textarea>
  </div>
		<div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputyazibaslik4">Çalışma Süresi</label>
			  <input type="text" class="form-control" id="calisma_suresi" name="calisma_suresi">
		  </div>
		  </div>
		  
		  <input type="submit" class="btn btn-primary" value="Ekle">
		  
		  </form>
		  <br>
		  </div>