<?php if (defined('guvenlik')!=True) die('Git Buradan!');

include "functions/homefunctions.php";

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
         

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Merhabalar!</strong> Sol Menü'de yer alan Menü'lerden içeriklerinizi ekleyebilirsiniz, diğer ayarlar sağ üstte yer alan kullanıcı resminin altındadır!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			

			<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Yazı Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo satirsayisi('yazilar');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>				

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deneyim Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo satirsayisi('deneyimler');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Okul Sayısı</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo satirsayisi('okullar');?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Yetenek Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo satirsayisi('yetenekler');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-code-branch fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sertifika Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo satirsayisi('sertifikalar');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-certificate fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-5 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kullanıcı Sayısı</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo satirsayisi('login');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
		<?php //row bitti ?>

		
			 
			 
          </div>
		  
</div>
