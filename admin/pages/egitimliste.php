<?php if (defined('guvenlik')!=True) die('Git Buradan!'); 
	?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
       <h1 class="h3 mb-0 text-gray-800">Yazılar</h1> </div>
	
	<?php $okullar = cokluvericek('okullar'); ?>
	
	<table class="table table-striped table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Okul Adı</th>
      <th scope="col">Bilgi</th>
      <th scope="col">Mezuniyet Tarihi</th>
	  <th scope="col">Düzenle</th>
	  <th scope="col">Sil</th>
    </tr>
  </thead>
  
  
  <tbody>
	<?php foreach ($okullar as $okul) {
    echo '<tr>
      <th scope="row">' . $okul -> id . '</th>
	  <td>'. $okul -> okul_adi .'</td>
      <td>' . $okul -> bilgi . '</td>
      <td>'. $okul -> mezuniyet_tarihi .'</td>
	  <td> <a href="index.php?sayfa=egitimduzenle&id='. $okul -> id .'"> Düzenle </a></td>
	  <td> <a href="index.php?sayfa=delete&tablo=okullar&sil='. $okul -> id.'"> Sil </a></td>
	  
    </tr>';
	} ?>	
  </tbody>
</table>	
	
        </div>
        <!-- /.container-fluid -->

