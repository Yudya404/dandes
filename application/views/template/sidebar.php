<!-- Body BEGIN -->
<body class="ecommerce">
	
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?= base_url('Welcome/halamanberanda/'); ?>"><img src="<?= base_url('assets/img/logoSIMoDa.jpg'); ?>" alt="SIMoDa"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation text-end">
          <ul>
            <li class="dropdown">
              <a href="<?= base_url('Welcome/halamanberanda/'); ?>" class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Beranda
              </a>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Kegiatan
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="<?= base_url('Welcome/halamankegiatanpkk/'); ?>">PKK <i class="fa fa-angle-right"></i></a>
                </li>
				<li class="dropdown-submenu">
                  <a href="<?= base_url('Welcome/halamankegiatanpengajian/'); ?>">Pengajian <i class="fa fa-angle-right"></i></a>
                </li>
				<li class="dropdown-submenu">
                  <a href="<?= base_url('Welcome/halamankegiatanrapat/'); ?>">Rapat <i class="fa fa-angle-right"></i></a>
                </li>
				<li class="dropdown-submenu">
                  <a href="<?= base_url('Welcome/halamankegiatankarangtaruna/'); ?>">Karang Taruna <i class="fa fa-angle-right"></i></a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Profil
              </a>
              <ul class="dropdown-menu">
				<li><a href="<?= base_url('Welcome/halamantentangkami/'); ?>">Tentang Kami</a></li>
                <li><a href="<?= base_url('Welcome/halamanmanualaplikasi/'); ?>">Manual Aplikasi</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="<?= base_url('auth/login/'); ?>" class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Login (Pengurus)
              </a>
            </li>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->