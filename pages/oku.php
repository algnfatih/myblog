<?php 
if(defined('guvenlik')!=True) die('Git burdan!');
?>

<?php include 'functions/okufunctions.php'; ?>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
<div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php echo $yazi -> yazi_baslik ?></h1> 	
      </div>
        <p class="lead blog-description badge badge-danger""><?php echo $yazi -> kategori?></p>
		<p class="lead blog-description badge badge-info"> 
		<?php echo bilgicek('isim'); echo ' '. bilgicek('soyisim'); ?></p>
      <div class="row">
				<div class="col-md-2">
			<img src="<?php echo $yazi -> resim ?>" width="200px" class="img-thumbnail">
		</div>
        <div class="col-sm-8 blog-main">
	
						

	
          <div class="blog-post">
				
				<?php echo $yazi -> yazi_metni ?>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-2 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Benzer Yazılar</h4>
            <ol class="list-unstyled">
				<?php 
				
				$yazilar = cokluvericek('yazilar WHERE kategori="'. $yazi -> kategori .'"', 5, True); 
				
				foreach ($yazilar as $yazi){
					echo '<li><a href="?sayfa=oku&yazi='. $yazi -> link .'">'. $yazi -> yazi_baslik .'</a></li>
				';}
				
				
				?>

            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Sosyal Medya</h4>
            <ol class="list-unstyled">
              <li><a href="<?php echo bilgicek('facebook_link'); ?>">Facebook</a></li>
			  <li><a href="<?php echo bilgicek('twitter_link');?>">Twitter</a></li>
			  <li><a href="<?php echo bilgicek('github_link'); ?>">Github</a></li>
			  <li><a href="<?php echo bilgicek('linkedin'); ?>">Linkedin</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div>
	</div>
	</section>