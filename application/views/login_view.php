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
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">											
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												<?php echo _("Please_Enter_Your_Information");?>
											</h4>
											<div class="space-6"></div>

											<form id="frm_login">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="frm_login_username" name="frm_login_username" type="text" class="form-control" placeholder="<?php echo _('Your_email_address');?>" required/>
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="frm_login_password" name="frm_login_password" type="password" class="form-control" placeholder="<?php echo _('Password');?>" required/>
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> <?php echo _("Remember_Me");?> </span>
														</label>

														<button id="submit_login" id="submit_login" type="button" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															<?php echo _("Login");?>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
											
											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="social-login center">
												<a class="btn btn-primary" href="<?php echo site_url();?>linkedinfo">
													<i class="icon-linkedin"></i>
												</a>												
											</div>
											
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													<?php echo _("I_forgot_my_password");?>
												</a>
											</div>
											
											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													<?php echo _("Signup");?>
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												<?php echo _("Retrieve_Password");?>
											</h4>

											<div class="space-6"></div>
											<p>
												<?php echo _("Enter_your_email_to_receive_instructions");?>
											</p>

											<form id="frm_forgot">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">															
															<input type="email" id="frm_forgot_user_email" name="frm_forgot_user_email" class="form-control" placeholder="<?php echo _('Email');?>" required/>
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button id="submit_forgot" type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															<?php echo _("Send_Me");?>!
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<?php echo _("Back_to_login");?>
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->
								
								
								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												<?php echo _("New_User_Registration");?>
											</h4>

											<div class="space-6"></div>
											<p> <?php echo _("Enter_your_email_address");?>: </p>
											<br/>
											<form id="frm_signup">
												<fieldset>
													<label class="block clearfix">														
														<span class="block input-icon input-icon-right">
															<input type="email" id="frm_signup_user_email" name="frm_signup_user_email" class="form-control" placeholder="<?php echo _('Email');?>" required/>
															<i class="icon-envelope"></i>
														</span>
													</label>
													

													<div class="clearfix">
														<button id="submit_signup" type="button" class="width-65 pull-right btn btn-sm btn-success">
															<?php echo _("Signup");?>
															<i class="icon-arrow-right icon-on-right"></i>
														</button>														
													</div>
												</fieldset>
											</form>
										</div>
									
										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<?php echo _("Back_to_login");?>
												<i class="icon-arrow-right"></i>
											</a>
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

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
		
		<script type="text/javascript">
		$(document).ready(function()
		{
			var last_gritter;
			
			//Forgot Password Submit
			$("#submit_forgot").click(function(){
				
				//alert();
				
				var user_email_forgot = $('#frm_forgot_user_email').val();				

				$.post('<?php echo site_url();?>login/forgotpassword_process', { 'user_email' : user_email_forgot }, function(data){	
					var response_message = data.response_message;
					var response = data.response;
					
					if ( response != 'Success') {						
						last_gritter = $.gritter.add({							
							text: response_message,
							class_name: 'gritter-error gritter-center'
						});
						$('#frm_forgot_user_email').val('');
					}
					else {						
						last_gritter = $.gritter.add({							
							text: response_message,
							class_name: 'gritter-info gritter-center'
						});
						$('#frm_forgot_user_email').val('');
					}
				}, "json");
				
			});
			
			//Sign-up Submit
			
			$("#submit_signup").click(function(){								
				
				var user_email_signup = $('#frm_signup_user_email').val();				

				$.post('<?php echo site_url();?>login/signup_process', { 'user_email' : user_email_signup }, function(data){	
					var response_message = data.response_message;
					var response = data.response;
					
					if ( response != 'Success') {						
						last_gritter = $.gritter.add({							
							text: response_message,
							class_name: 'gritter-error gritter-center'
						});
						$('#frm_signup_user_email').val('');
					}
					else {						
						last_gritter = $.gritter.add({							
							text: response_message,
							class_name: 'gritter-info gritter-center'
						});
						$('#frm_signup_user_email').val('');
					}
				}, "json");				
			});
			
			//login Submit
			
			$("#submit_login").click(function(){	
				var login_username = $('#frm_login_username').val();
				var login_password = $('#frm_login_password').val();

				$.post('<?php echo site_url();?>login/login_process', { 'login_username' : login_username, 'login_password' : login_password }, function(data){	
					var response_message = data.response_message;
					var response = data.response;					
					if ( response != 'Success') {						
						last_gritter = $.gritter.add({							
							text: response_message,
							class_name: 'gritter-error gritter-center'
						});
						//$('#frm_login_username').val('');
						$('#frm_login_password').val('');						
					}
					else {						
						window.location.href = "<?php echo base_url();?>dashboard";					
					}
				}, "json");				
			});

			
		});
		</script>
	</body>
</html>
