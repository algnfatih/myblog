<?php if (defined('guvenlik')!=True) die('Git Buradan!');

$kullanici = teksatircek('login', 'id', '1');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Site Ayarları</h1>
          </div>

	<form method="post" enctype="multipart/form-data" action="index.php?sayfa=update">
	
	<input style="display:none;" name="link" value="user_profil">

	  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlogin4">Kullanıcının ismi</label>
      <input type="text" class="form-control" id="inputlogin4" name="name" value="<?php echo $kullanici -> name ?>">
    </div>
  </div>
  
  	  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlogin4">Kullanıcının resmi</label> <br>
      <input type="file" id="inputlogin4" name="resim" value="<?php echo $kullanici -> resim ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlogin4">Kullancı adı</label>
      <input type="text" class="form-control" id="inputlogin4" name="user" value="<?php echo $kullanici -> user ?>">
    </div>
  </div>
  
  
  
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputPassword4">Şifre</label>
      <input type="password" class="form-control" id="inputPassword4" name="pass" value="<?php echo$kullanici-> pass?>">
    </div>
  </div>
  
  <input type="submit" class="btn btn-primary" value="Kaydet">

  

</form>

</div>