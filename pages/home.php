<?php 
if(defined('guvenlik')!=True) die('Git burdan!');
include ("functions/homefunctions.php");
?>

<style> 
.tamyildiz   {
	color: orange;
    text-shadow: 1px 1px 1px #ccc;
    font-size: 1.5em;
	}
.bosyildiz   {
	color: grey;
    text-shadow: 1px 1px 1px #ccc;
    font-size: 1.5em;
	}
.yetenekicon:hover {
	color: blue
}
</style>


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $isim; ?>
          <span class="text-primary"><?php echo $soyisim; ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $bilgi1 ?> · <?php echo $bilgi2 ?> ·
          <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
        </div>
        <p class="lead mb-5"><?php echo $info ?>
		<div class="social-icons">
          <a href="<?php echo $facebook_link ?>">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="<?php echo $twitter_link ?>">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="<?php echo $github_link?>">
            <i class="fab fa-github"></i>
          </a>
          <a href="<?php echo $linkedin_link?>">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </section>
	
	<hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="blog">
	  <div class="w-100">
        <h2 class="mb-5">Blog<br></h2>
	

	
	<div class="card-group">

		<?php yazilariyaz(); ?>

	
	</div>
	<hr>
	<button type="button" class="btn btn-outline-danger"><a href="index.php?sayfa=arsiv">Tüm Yazılar -></a></button>
      </div>

    </section>


    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Deneyimlerim</h2>

		<?php deneyimleriyaz(); ?>

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Okullar</h2>

        <?php okullariyaz(); ?>

        </div>
	</section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">YETENEKLERİM</h2>
<br><br>
	<div class="row ">
	
	<?php yetenekleriyaz(); ?>
	
</div>
      </div>
    </section>

   

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Sertifikalar</h2>
        <ul class="fa-ul mb-0">
			<?php sertifikalariyaz(); ?>
        </ul>
      </div>
    </section>


