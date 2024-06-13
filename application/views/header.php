<header class="app-header header" style="background: #115d8e;">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="<?php echo site_url($this->session->userdata('role')); ?>">
                <img alt="logo" class="header-brand-img main-logo" src="<?php echo base_url('assets/images/brand/');?>">
                <img alt="logo" class="header-brand-img mobile-logo" src="<?php echo base_url('assets/images/brand/');?>">
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
			</div>
        </div>
    </div>
</header>