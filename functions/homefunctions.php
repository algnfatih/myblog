<?php 
if(defined('guvenlik')!=True) die('Git burdan!');


$isim = bilgicek('isim');
$soyisim = bilgicek('soyisim');
$bilgi1 = bilgicek('bilgi1');
$bilgi2 = bilgicek('bilgi2');
$mail = bilgicek('mail');
$info = bilgicek('info');
$facebook_link = bilgicek('facebook_link');
$twitter_link = bilgicek('twitter_link');
$linkedin_link = bilgicek('linkedin_link');
$github_link = bilgicek('github_link');

function deneyimleriyaz(){
$deneyimler = cokluvericek('deneyimler');
foreach($deneyimler as $deneyim){
	echo '<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">' . $deneyim -> deneyim .'</h3>
            <div class="subheading mb-3">' . $deneyim -> firma .'</div>
            <p>' . $deneyim -> aciklama .'</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">' . $deneyim -> calisma_suresi .'</span>
          </div>
        </div>';
} 
}

function okullariyaz(){
$okullar = cokluvericek('okullar');
foreach($okullar as $okul){
	echo '<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">'. $okul -> okul_adi .'</h3>
            <div class="subheading mb-3">'. $okul -> bilgi .'</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">'. $okul -> mezuniyet_tarihi .'</span>
          </div>
        </div>';
}
}

function sertifikalariyaz(){
$sertifikalar = cokluvericek('sertifikalar');
foreach($sertifikalar as $sertifika	){
	echo '<li>
            <i class="'. $sertifika -> icon .'"></i>
            '. $sertifika -> bilgi .'</li>
          <li>';
}
}

function yetenekler_yildizyaz($yildiz){
	$yildizhtml = "";
	for($sayi= 0; $sayi < 5; $sayi++){
		if ($sayi < $yildiz){
		$yildizhtml .= '<span class="fa fa-star tamyildiz checked"></span>';
		}
		else{$yildizhtml .= '<span class="fa fa-star bosyildiz checked"></span>';}
	}
	return $yildizhtml;
}

function yetenekleriyaz(){
$yetenekler = cokluvericek('yetenekler');
foreach($yetenekler as $yetenek	){
	echo '

    <div class="col"> 
		<div class="card" style="width: 18rem;">
			<i class="fab '. $yetenek -> icon . ' dev-icons yetenekicon" style="    text-align:center; font-size:150px"></i>
			<div class="card-body">
				<h5 class="card-title text-center"> ' . yetenekler_yildizyaz($yetenek -> yildiz) . ' </h5>
				<p class="card-text">' . $yetenek -> aciklama . '</p>
			</div>
		</div> 
	</div>';
}
}

function yazilariyaz(){
$yazilar = cokluvericek('yazilar', 3, True);
foreach($yazilar as $yazi){
	echo '<div class="card">
		<img src="'. $yazi -> resim .'" class="card-img-top" alt="..." >
		<div class="card-body">
		  <h5 class="card-title">'. $yazi -> yazi_baslik .'</h5>
		  <p class="card-text">'. substr($yazi -> yazi_metni, 0, 200) . '...</p>
		  <a href="index.php?sayfa=oku&yazi='. seflink ($yazi -> yazi_baslik) .'" class="btn btn-danger">Devamı -></a>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Kategori: '. $yazi -> kategori .'  </small>
		</div>
	  </div> ';
}
}


?>