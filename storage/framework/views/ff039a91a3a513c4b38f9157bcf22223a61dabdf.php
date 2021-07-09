<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img src="<?php echo e(asset('storage/logo/'. $config->logo) ?? ''); ?>" alt="LOGO" class="logo-abbr" width="51" height="51">
        <span class="brand-title" style="color: #363062; font-size: 1.35rem; line-height: 1">
            <?php echo e($config->sitename); ?>

        </span>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <a href="page-login.html" class="dropdown-item ai-icon">
                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span class="ml-2">Logout </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/includes/admin/header.blade.php ENDPATH**/ ?>