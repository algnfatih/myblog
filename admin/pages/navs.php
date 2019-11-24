<?php if (defined('guvenlik')!=True) die('Git Buradan!'); ?>	
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?sayfa=home">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> myBlog <sup>1</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?sayfa=home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Anasayfa</span></a>
      </li>
		
		      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

	
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#yazilar" aria-expanded="true" aria-controls="yazilar">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Yazılar</span>
        </a>
        <div id="yazilar" class="collapse" aria-labelledby="yazilar" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?sayfa=yaziekle">Ekle</a>
            <a class="collapse-item" href="index.php?sayfa=yaziliste">Listele</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Deneyimler" aria-expanded="true" aria-controls="Deneyimler">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Deneyimler</span>
        </a>
        <div id="Deneyimler" class="collapse" aria-labelledby="Deneyimler" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?sayfa=deneyimekle">Ekle</a>
            <a class="collapse-item" href="index.php?sayfa=deneyimliste">Listele</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Eğitim" aria-expanded="true" aria-controls="Eğitim">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Eğitim</span>
        </a>
        <div id="Eğitim" class="collapse" aria-labelledby="Eğitim" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?sayfa=egitimekle">Ekle</a>
            <a class="collapse-item" href="index.php?sayfa=egitimliste">Listele</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Yetenekler" aria-expanded="true" aria-controls="Yetenekler">
          <i class="fas fa-fw fa-shield-alt"></i>
          <span>Yetenekler</span>
        </a>
        <div id="Yetenekler" class="collapse" aria-labelledby="Yetenekler" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?sayfa=add">Ekle</a>
            <a class="collapse-item" href="index.php?sayfa=list">Listele</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Sertifikalar" aria-expanded="true" aria-controls="Sertifikalar">
          <i class="fas fa-fw fa-certificate"></i>
          <span>Sertifikalar</span>
        </a>
        <div id="Sertifikalar" class="collapse" aria-labelledby="Sertifikalar" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?sayfa=add">Ekle</a>
            <a class="collapse-item" href="index.php?sayfa=list">Listele</a>
          </div>
        </div>
      </li>
	  
	  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
	
	