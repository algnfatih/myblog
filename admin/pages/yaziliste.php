<?php if (defined('guvenlik')!=True) die('Git Buradan!'); 
	?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
       <h1 class="h3 mb-0 text-gray-800">Yazılar</h1> </div>
	
	<?php $yazilar = cokluvericek('yazilar'); ?>
	
	<table class="table table-striped table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Başlık</th>
      <th scope="col">Link</th>
      <th scope="col">Kategori</th>
	  <th scope="col">Düzenle</th>
	  <th scope="col">Sil</th>
    </tr>
  </thead>
  
  
  <tbody>
	<?php foreach ($yazilar as $yazi) {
    echo '<tr>
      <th scope="row">' . $yazi -> id . '</th>
	  <td>'. $yazi -> yazi_baslik .'</td>
      <td> <a target="_blank" href="../index.php?sayfa=oku&yazi=' . $yazi -> link . '">Yazıya Git</a></td>
      <td>'. $yazi -> kategori .'</td>
	  <td> <a href="index.php?sayfa=yaziduzenle&id='. $yazi -> id .'"> Düzenle </a></td>
	  <td> <a href="index.php?sayfa=delete&tablo=yazilar&sil='. $yazi -> id.'"> Sil </a></td>
	  
    </tr>';
	} ?>	
  </tbody>
</table>	
	
        </div>
        <!-- /.container-fluid -->

