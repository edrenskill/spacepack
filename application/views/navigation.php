<?php 
	$user_id = $this->user_model->get_all_user_by_id($this->session->userdata('user_id'))->row_array();
	//$branches = $this->branch_model->getAllBranches();
?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="app-sidebar__user">
		<div class="user-body">
			<img class="avatar avatar-lg brround text-center cover-image" src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="user-image">
		</div>
		<div class="user-info">
			<a href="<?php echo site_url('my-profile'); ?>" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold"><?php echo $user_id['first_name'].' '.$user_id['last_name']; ?></span><br>
			</a>
		</div>
	</div>
	<ul class="side-menu">
		 <li>
			<a class="side-menu__item" href="<?php echo site_url('dashboard'); ?>"><i class="side-menu__icon si si-home"></i><span class="side-menu__label">Dashboard</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('companies'); ?>"><i class="side-menu__icon si si-home"></i><span class="side-menu__label">Companies</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('employees'); ?>"><i class="side-menu__icon si si-home"></i><span class="side-menu__label">Employees</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('employees'); ?>"><i class="side-menu__icon si si-home"></i><span class="side-menu__label">Admin</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('l_a'); ?>"><i class="fa-solid fa-clipboard-user"></i><span class="side-menu__label">Leave/Absences</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('attendance'); ?>"><i class="side-menu__icon fas fa-attendance"></i><span class="side-menu__label">Attendance</span></a>	
		</li>
		<li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('my-profile'); ?>"><i class="side-menu__icon si si-user"></i><span class="side-menu__label">My Profile Info</span></a>	
		</li>
		<li>
			<a class="side-menu__item" href="<?php echo site_url('logout'); ?>"><i class="side-menu__icon si si-power"></i><span class="side-menu__label">Log Out</span></a>	
		</li> 
	</ul>
</aside>