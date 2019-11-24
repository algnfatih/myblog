<?php if (defined('guvenlik')!=True) die('Git Buradan!'); 
	?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
       <h1 class="h3 mb-0 text-gray-800">Deneyimler</h1> </div>
	
	<?php $deneyimler = cokluvericek('deneyimler'); ?>
	
	<table class="table table-striped table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Deneyim</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Deneyim Süresi</th>
	  <th scope="col">Düzenle</th>
	  <th scope="col">Sil</th>
    </tr>
  </thead>
  
  
  <tbody>
	<?php foreach ($deneyimler as $deneyim) {
    echo '<tr>
      <th scope="row">' . $deneyim -> id . '</th>
	  <td>'. $deneyim -> deneyim .'</td>
      <td> ' . $deneyim -> aciklama . '</td>
      <td>'. $deneyim -> calisma_suresi  .'</td>
	  <td> <a href="index.php?sayfa=deneyimduzenle&id='. $deneyim -> id .'"> Düzenle </a></td>
	  <td> <a href="index.php?sayfa=delete&tablo=deneyimler&sil='. $deneyim -> id.'"> Sil </a></td>
	  
    </tr>';
	} ?>	
  </tbody>
</table>	
	
        </div>
        <!-- /.container-fluid -->

