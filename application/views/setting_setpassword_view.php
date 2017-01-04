<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>

			<li class="active">Settings</li>
		</ul><!-- .breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="icon-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- #nav-search -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>Settings</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="col-sm-12">
					<div class="tabbable">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active">
								<a data-toggle="tab" href="#security-setting">													
									Security
								</a>
							</li>
						</ul>

						<div class="tab-content">
							<div id="security-setting" class="tab-pane in active">
								<?php $attributes_login = array('class' => 'form-horizontal', 'id' => 'frm_setpassword');?>
								<?php echo form_open('setting/initial_userinfo', $attributes_login); ?>									
									<div class="row">
										<div class="col-xs-5">
											<div class="form-group">
												<label class="col-sm-5 control-label" for="form-field-firstname"><?php echo _("Firstname");?></label>
												<div class="col-sm-7">
												<input class="form-control col-xs-10 col-sm-5" type="text" id="form_field_firstname" name="form_field_firstname" placeholder="<?php echo _("Firstname");?>" required/>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-5 control-label" for="form-field-username"><?php echo _("Lastname");?></label>
												<div class="col-sm-7">
												<input class="form-control col-xs-10 col-sm-5" type="text" id="form_field_lastname" name="form_field_lastname" placeholder="<?php echo _("Lastname");?>" required/>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-5 control-label" for="form-field-password"><?php echo _("Password");?></label>
												<div class="col-sm-7">
												<input class="form-control col-xs-10 col-sm-5" type="password" id="form_field_password" name="form_field_password" placeholder="<?php echo _("Password");?>" required/>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-5 control-label" for="form-field-repassword"><?php echo _("Retype_Password");?></label>
												<div class="col-sm-7">
												<input class="form-control col-xs-10 col-sm-5" type="password" id="form_field_repassword" name="form_field_repassword" placeholder="<?php echo _("Retype_Password");?>" equalTo="#form_field_password" required/>
												</div>												
											</div>
										</div>
										
										<div class="col-xs-12">
										<div class="hr hr-24"></div>	
												<div class="col-xs-3">
												<button id="form-submit" type="submit" class="btn btn-sm btn-info pull-right">
													<i class="icon-ok"></i>
													<?php echo _("Submit");?>
												</button>
												</div>											
										</div>												
									</div>
									<script src="<?php echo base_url();?>assets/js/uncompressed/jquery.validate.js"></script>
									<script type="text/javascript">
										$("#frm_setpassword").validate({
											rules: {
												form_field_repassword: {
													equalTo: "#form_field_password"
												}
											},
											messages: {												
												form_field_repassword: {													
													equalTo: "Password confirmation does not match!"
												}
											}
										});										
									</script>
											
								</form>
							</div>
						</div>
					</div>
				</div><!-- /span -->
				
				
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

