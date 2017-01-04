<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - rKruiter</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link href="<?php echo base_url();?>assets/css/jquery.gritter.css" rel="stylesheet"/>

		<!-- fonts -->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
		<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">		
		
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>									
									<span class="white">r</span><span class="red">K</span><span class="white">ruiter</span>
								</h1>								
							</div>


							<div class="position-relative">
								<div id="signup-box" class="signup-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-cog blue"></i>
												<?php echo _("Setting");?>
											</h4>
											<p> <?php echo _("Please_fill-up_the_following");?>: </p>
											<?php $attributes_login = array('id' => 'frmSetpassword');?>
											<?php echo form_open('setting/initial_userinfo', $attributes_login); ?>	
												<fieldset>
													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" value="<?php echo $this->session->userdata('username');?>" disabled/>
															<i class="icon-envelope"></i>
														</span>
													</label>
													
													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="text" id="firstname" name="firstname" class="form-control" placeholder="<?php echo _('Firstname');?>" required/>
															<i class="icon-user"></i>
														</span>
													</label>
													
													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="text" id="lastname" name="lastname" class="form-control" placeholder="<?php echo _('Lastname');?>" required/>
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="password" id="password" name="password" class="form-control" placeholder="<?php echo _('Password');?>" required/>
															<i class="icon-cog"></i>
														</span>
													</label>

													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="password" id="retypePassword" name="retypePassword" class="form-control" placeholder="<?php echo _('Retype_Password');?>" required/>
															<i class="icon-cog"></i>
														</span>
													</label>
													
													<div class="clearfix">
														<button id="frmSetpasswordSubmit" type="submit" class="width-65 pull-right btn btn-sm btn-success">
															<?php echo _("Proceed");?>
															<i class="icon-arrow-right icon-on-right"></i>
														</button>														
													</div>
												</fieldset>
											</form>
										</div>
									
										<div class="toolbar center">
											
										</div>

									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
								
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>		
		
		<script src="<?php echo base_url();?>assets/js/uncompressed/jquery.validate.js"></script>
		<script type="text/javascript">
			$("#frmSetpassword").validate({
				rules: {
					retypePassword: {
						equalTo: "#password"
					}
				},
				messages: {												
					retypePassword: {													
						equalTo: "Password confirmation does not match!"
					}
				}
			});										
		</script>
		
	</body>
</html>
