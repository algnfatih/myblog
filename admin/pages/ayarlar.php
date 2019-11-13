<?php if (defined('guvenlik')!=True) die('Git Buradan!');
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Site Ayarları</h1>
          </div>
<form method="post"  enctype="multipart/form-data" action="index.php?sayfa=update">
<input style="display:none;" name="link" value="ayarlar">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputisim4">İsim</label>
      <input type="text" class="form-control" id="inputisim4" value="<?php echo bilgicek('isim'); ?>" name="isim">
    </div>
	  <div class="form-group col-md-6">
      <label for="inputsoyisim4">Soyisim</label>
      <input type="text" class="form-control" id="inputsoyisim4" value="<?php echo bilgicek('soyisim'); ?>" name="soyisim">
    </div>
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-6">
    <label for="inputAddress">Bilgi Alanı 1</label>
    <input type="text" class="form-control" id="inputbilgi1" value="<?php echo bilgicek('bilgi1'); ?>" name="bilgi1">
  </div>
       <div class="form-group col-md-6">
    <label for="inputAddress2">Bilgi Alanı 2</label>
    <input type="text" class="form-control" id="inputbilgi2" value="<?php echo bilgicek('bilgi2'); ?>" name="bilgi2">
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputmail4">E-mail</label>
      <input type="text" class="form-control" id="inputmail4" value="<?php echo bilgicek('mail'); ?>" name="mail">
	
  </div>
  </div>
  
	<div class="form-row">
	  <div class="form-group col-md-6">
      <label for="inputesim4">Resim</label> <br>
      <input type="file" class="" id="inputresim4" value="<?php echo bilgicek('resim_profil'); ?>" name="resim_profil">
    </div>
	</div>
	
   <div class="form-group">
    <label for="exampleFormControlTextarea1">İnfo Alanı</label>
    <textarea class="form-control ckeditor" id="infoarea" rows="3" name="info"><?php echo bilgicek('info'); ?></textarea>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlogin4">Facebook linki</label>
      <input type="text" class="form-control" id="inputlogin4" value="<?php echo bilgicek('facebook_link'); ?>" name="facebook_link">
    </div>
	
	 <div class="form-group col-md-6">
      <label for="inputlogin4">Twitter linki</label>
      <input type="text" class="form-control" id="inputlogin4" value="<?php echo bilgicek('twitter_link'); ?>" name="twitter_link">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlogin4">Github linki</label>
      <input type="text" class="form-control" id="inputlogin4" value="<?php echo bilgicek('github_link'); ?>" name="github_link">
    </div>
	
	 <div class="form-group col-md-6">
      <label for="inputlogin4">Linkedin linki</label>
      <input type="text" class="form-control" id="inputlogin4" value="<?php echo bilgicek('linkedin_link'); ?>" name="linkedin_link">
    </div>
  </div>
  
  <input type="submit" class="btn btn-primary" value="Kaydet">

  

</form>
<br>

</div>