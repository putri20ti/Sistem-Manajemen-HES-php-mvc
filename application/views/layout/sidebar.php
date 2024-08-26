<div class="iq-sidebar sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="<?= base_url('assets/html/'); ?>backend/index.html" class="header-logo">
            <img src="<?= base_url('assets/html/'); ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">SIMHES</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="<?= uri_string() == 'Profil' ? 'active' : '' ?>">
                    <a href="<?= site_url('Profil/') ?>" class="svg-icon">                        
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class="<?= strpos(uri_string(), 'Karyawan') !== false ? 'active' : '' ?>">
                    <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="ml-4">karyawan</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="people" class="iq-submenu collapse <?= strpos(uri_string(), 'Karyawan') !== false ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= uri_string() == 'Karyawan' && empty($this->uri->segment(2)) ? 'active' : '' ?>">
                            <a class="nav-link collapsed" href="<?= site_url('Karyawan/') ?>">
                                <i class="las la-minus"></i><span>List Data Karyawan</span>
                            </a>
                        </li>
                        <li class="<?= $this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'tambah' ? 'active' : '' ?>">
                            <a href="<?= site_url('Karyawan/tambah') ?>">
                                <i class="las la-minus"></i><span>Tambah Data Karyawan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= strpos(uri_string(), 'Apd') !== false ? 'active' : '' ?>">
                    <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 11V9a7 7 0 0 1 14 0v2"></path>
                            <path d="M16 14V7a4 4 0 0 1 4 4v3"></path>
                            <path d="M5 12h14"></path>
                            <path d="M5 12l1 10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-10"></path>
                        </svg>
                        <span class="ml-4">Alat Pelindung Diri</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="category" class="iq-submenu collapse <?= strpos(uri_string(), 'Apd') !== false ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= uri_string() == 'Apd' && empty($this->uri->segment(2)) ? 'active' : '' ?>">
                            <a href="<?= site_url('Apd/') ?>">
                                <i class="las la-minus"></i><span>List APD</span>
                            </a>
                        </li>
                        <li class="<?= uri_string() == 'Pengajuan' ? 'active' : '' ?>">
                            <a href="<?= site_url('Pengajuan/') ?>">
                                <i class="las la-minus"></i><span>Pengajuan APD</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Menu Behavior Based Safety -->
                <li class="<?= strpos(uri_string(), 'Bbs') !== false ? 'active' : '' ?>">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash9" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>
                        </svg>
                        <span class="ml-4">Behavior Based Safety</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse <?= strpos(uri_string(), 'Bbs') !== false ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= uri_string() == 'Bbs/index' ? 'active' : '' ?>">
                            <a href="<?= site_url('Bbs/index') ?>">
                                <i class="las la-minus"></i><span>BBS Observasi</span>
                            </a>
                        </li>
                        <li class="<?= uri_string() == 'Bbs/index3' ? 'active' : '' ?>">
                            <a href="<?= site_url('Bbs/index3') ?>">
                                <i class="las la-minus"></i><span>Database Activity</span>
                            </a>
                        </li>
                        <li class="<?= uri_string() == 'Bbs/index4' ? 'active' : '' ?>">
                            <a href="<?= site_url('Bbs/index4') ?>">
                                <i class="las la-minus"></i><span>OPS-Summary</span>
                            </a>
                        </li>
                        <li class="<?= uri_string() == 'Bbs/index5' ? 'active' : '' ?>">
                            <a href="<?= site_url('Bbs/index5') ?>">
                                <i class="las la-minus"></i><span>Risk Summary</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Menu Data Kesehatan -->
                <li class="<?= strpos(uri_string(), 'Kesehatan') !== false ? 'active' : '' ?>">
                    <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 21s-8-7-8-11a8 8 0 0 1 16 0c0 4-8 11-8 11z"></path>
                        </svg>
                        <span class="ml-4">Data Kesehatan</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="return" class="iq-submenu collapse <?= strpos(uri_string(), 'Kesehatan') !== false ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= uri_string() == 'Kesehatan' && empty($this->uri->segment(2)) ? 'active' : '' ?>">
                            <a href="<?= site_url('Kesehatan/') ?>">
                                <i class="las la-minus"></i><span>List Data Kesehatan</span>
                            </a>
                        </li>
                        <li class="<?= $this->uri->segment(1) == 'Kesehatan' && $this->uri->segment(2) == 'tambah' ? 'active' : '' ?>">
                            <a href="<?= site_url('Kesehatan/tambah') ?>">
                                <i class="las la-minus"></i><span>Tambah Data Kesehatan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Menu Insiden Kerja -->
                <li class="<?= strpos(uri_string(), 'Insiden') !== false ? 'active' : '' ?>">
                    <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10.29 3.86l-9 15A1 1 0 0 0 2 20h18a1 1 0 0 0 .86-1.5l-9-15a1 1 0 0 0-1.72 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <span class="ml-4">Insiden Kerja</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="purchase" class="iq-submenu collapse <?= strpos(uri_string(), 'Insiden') !== false ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= uri_string() == 'Insiden' && empty($this->uri->segment(2)) ? 'active' : '' ?>">
                            <a href="<?= site_url('Insiden/') ?>">
                                <i class="las la-minus"></i><span>List Insiden Kerja</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
