<div class="row">
	<div class="col-xl-4  col-md-12">
		<div class="card box-widget widget-user">
			<div class="widget-user-header bg-gradient-primary"></div>
			<div class="widget-user-image"><img alt="User Avatar" class="rounded-circle" src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"></div>
			<div class="card-body text-center">
				<div class="pro-user">
					<h3 class="pro-user-username text-dark"><?php echo $user_info['first_name'].' '.$user_info['last_name']; ?></h3>
					<h6 class="pro-user-desc text-muted">Designation</h6>
					<a href="editprofile.html" class="btn btn-info btn-sm"><i class="si si-pencil mr-1"></i>Update Login Info</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Personal Info</div>
				<div class="card-options d-none d-sm-block">
					<a href="#" class="btn btn-lime btn-sm">Update Info</a>
				</div>
			</div>
			<div class="card-body">
				<div class="media-list">
					<div class="media mt-1 pb-2">
							<div class="mediaicon">
								<i class="si si-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body ml-5 mt-1">
								<h6 class="mediafont text-dark mb-1">Email Address</h6><span class="d-block"><?php echo $user_info['email']; ?></span>
							</div>
					</div>
					<div class="media mt-1 pb-2">
							<div class="mediaicon">
								<i class="si si-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body ml-5 mt-1">
								<h6 class="mediafont text-dark mb-1">Mobile Number</h6>
								<span class="d-block">
									<?php if ($user_info['mobile_no'] == NULL): ?>
                                		No mobile number register
                                	<?php else:?>
                                  		<?php echo $user_info['mobile_no']; ?>
                              		<?php endif?>
                              	</span>
							</div>
					</div>
					<div class="media mt-1 pb-2">
							<div class="mediaicon">
								<i class="si si-book-open" aria-hidden="true"></i>
							</div>
							<div class="media-body ml-5 mt-1">
								<h6 class="mediafont text-dark mb-1">Languages</h6><span class="d-block">English,Spanish,Greek</span>
							</div>
					</div>
					<div class="media mt-1 pb-2">
							<div class="mediaicon">
								<i class="si si-graduation" aria-hidden="true"></i>
							</div>
							<div class="media-body ml-5 mt-1">
								<h6 class="mediafont text-dark mb-1">User Status</h6>
								<span class="d-block"><?php echo $user_info['status']; ?></span>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
							<div class="col-xl-8 col-md-12">
								<div class="row">
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title">My Notifications</div>
											</div>
											<div class="card-body  h-100">
												<div class="row">
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/2.jpg" alt="media1">
														</a>
													</div>
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/4.jpg" alt="media1">
														</a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/7.jpg" alt="media1">
														</a>
													</div>
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/8.jpg" alt="media1">
														</a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/18.jpg" alt="media1">
														</a>
													</div>
													<div class="col-6">
														<a href="#">
															<img class="media-object" src="../assets/images/photos/20.jpg" alt="media1">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title">My Activity history</div>
											</div>
											<div class="">
<?php foreach ($activity as $key => $act):?>
												<div class="list d-flex align-items-center border-bottom p-3">
													<div class="wrapper ml-3">
														<p class="mb-0">
														<b><?php echo $act['activity'];?></b></p>
														<span class="text-muted"><?php echo date('M-d-Y (D)', $act['on_create']); ?></span>
													</div>
													<div class="float-right ml-auto">
														<a href="#" class="btn btn-lime btn-xs"><i class="si si-eye mr-1"></i>View Activity Info</a>
													</div>
												</div>
<?php endforeach; ?>												
												
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
</div>