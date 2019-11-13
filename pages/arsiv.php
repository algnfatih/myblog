<?php 
if(defined('guvenlik')!=True) die('Git burdan!');
include ("functions/arsivfunctions.php");
?>
	
	<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
	<div class="container">
      <div class="blog-header">
        <h1 class="blog-title">Tüm Yazılar</h1> 	
      </div>
    <div class="col">
		<?php foreach($yazilar as $yazi){
				echo '<div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">'. $yazi -> kategori . '</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="index.php?sayfa=oku&yazi='. $yazi -> link . '">'. $yazi -> yazi_baslik . '</a>
              </h3>
              <p class="card-text">'. substr($yazi -> yazi_metni, 0, 200) . '... </p>
              <a href="index.php?sayfa=oku&yazi='. $yazi -> link . '" class="btn btn-danger">Devamı -></a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" src="'. $yazi -> resim . '" data-holder-rendered="true" style="height: 250px;">
          </div>';
		} ?>
		
		        
		  </div>
        </div>       
    </div> </section>
