<!-- page specific plugin styles -->



<!--<link rel="stylesheet" href="<?php //echo base_url();?>assets/css/ace-fonts.css" />-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />

<!-- Gritter -->
<link href="<?php echo base_url();?>assets/css/jquery.gritter.css" rel="stylesheet"/>


		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<script type="text/javascript">
					try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
				</script>
		
				<ul class="breadcrumb">
					<li>
						<i class="icon-home home-icon"></i>
						<a href="<?php echo site_url();?>home"><?php echo _('Home');?></a>
					</li>
		
					<li class="active"><?php echo _('New_Position');?></li>
				</ul><!-- .breadcrumb -->
		
				<!--<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="icon-search nav-search-icon"></i>
						</span>
					</form>
				</div>--><!-- #nav-search -->
			</div>
				
			<div class="page-content">
				<!--<div class="page-header">
					<h1><?php //echo _('New_Position');?></h1>
				</div>-->
				<div class="row">
					<div class="col-xs-12">
						
						<div class="span12">
							<div class="widget-box">
								<div class="widget-header widget-header-blue widget-header-flat">
									<h4 class="lighter"><?php echo _('New_Position_Wizard');?></h4>							
								</div>
		
								<div class="widget-body">
									<div class="widget-main">
										<div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
											<ul class="wizard-steps">
												<li data-target="#step1" class="active">
													<span class="step">1</span>
													<span class="title"><?php echo _('Position');?></span>
												</li>
		
												<li data-target="#step2">
													<span class="step">2</span>
													<span class="title"><?php echo _('Funnel');?></span>
												</li>
		
												<li data-target="#step3">
													<span class="step">3</span>
													<span class="title"><?php echo _('Location');?></span>
												</li>
		
												<li data-target="#step4">
													<span class="step">4</span>
													<span class="title"><?php echo _('Validation');?></span>
												</li>
											</ul>
										</div>
		
										<hr />
										<div class="step-content row-fluid position-relative" id="step-container">
											<div class="step-pane active" id="step1">
												
												<h3 class="lighter block green"> <?php echo _('Opening_Details');?>
													<small>
													<i class="icon-double-angle-right"></i>
													<?php echo _('All_fields_are_mandatory');?>
													</small>
												</h3>
												
												
												<form id="newPositionStep1" class="form-horizontal" role="form">
													<div class="row">
													
														<div class="form-group">												
															<label class="col-sm-3 control-label no-padding-right" for="formNewPosition"> <?php echo _('Position');?> </label>
															<div class="col-xs-12 col-sm-5">
															<input class="form-control no-add-on" type="text" id="formNewPosition" name="formNewPosition" placeholder="Position" maxlength="200" required/>
															</div>												
														</div>																			
													
														<div class="form-group">											
															<label class="col-sm-3 control-label no-padding-right" for="formNewPositionDate"> <?php echo _('Posted_on');?> </label>
															<div class="col-xs-12 col-sm-5">
																
																<div class="input-group">
																	<input class="form-control date-picker" id="formNewPositionDate" name="formNewPositionDate" placeholder="dd-mm-yyyy" type="text" data-date-format="dd-mm-yyyy"  required/>
																	<span class="input-group-addon">
																		<i class="icon-calendar"></i>
																	</span>
																</div>
																
															</div>
														</div>										
													
														<div class="form-group">											
															<label class="col-sm-3 control-label no-padding-right" for="formNewPositionFunction"> <?php echo _('Function');?> </label>
															<div class="input-group col-xs-12 col-sm-5">
																<select class="select2 form-control" id="formNewPositionFunction" name="formNewPositionFunction" data-placeholder="<?php echo _('Please_select');?>" required>
																	<option value="">&nbsp;</option>														
																</select>
															</div>
														</div>	
			
														<div class="form-group">											
															<label class="col-sm-3 control-label no-padding-right" for="formNewPositionExperience"> <?php echo _('Experience');?> </label>
															<div class="input-group col-xs-12 col-sm-5">
																<select class="select2 form-control" id="formNewPositionExperience" name="formNewPositionExperience" data-placeholder="<?php echo _('Please_select');?>" required>
																	<option value="">&nbsp;</option>
																</select>
															</div>											
														</div>																			
													
														<div class="form-group">											
															<label class="col-sm-3 control-label no-padding-right" for="formNewPositionType"> <?php echo _('Job_Type');?> </label>
															<div class="input-group col-xs-12 col-sm-5">
																<select class="select2 form-control" id="formNewPositionType" name="formNewPositionType" data-placeholder="<?php echo _('Please_select');?>" required>
																	<option value="">&nbsp;</option>
																</select>
															</div>											
														</div>											
													</div>
													
													<div class="hr dotted"></div>
													
													<div class="row">
														<h4 class="header green clearfix">
															<?php echo _('Job_Description');?>
														</h4>
														<div class="widget-box">												
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<div class="wysiwyg-editor" id="jobDescriptionEditor"></div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="hr dotted"></div>
													
													<div class="row">											
														<div class="col-sm-6">
															<h4 class="header green clearfix">
															<?php echo _('Education_and_Training');?>
															</h4>
															<div class="widget-box">												
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<div class="wysiwyg-editor" id="educationTrainingEditor"></div>
																	</div>
																</div>
															</div>
														</div><!-- /.col-sm-6 -->
														
														<div class="col-sm-6">
															<h4 class="header green clearfix">
															<?php echo _('Skills_and_Experience');?>
															</h4>												
															<div class="widget-box">												
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<div class="wysiwyg-editor" id="skillsExperienceEditor"></div>
																	</div>
																</div>
															</div>
														</div><!-- /.col-sm-6 -->
													</div><!-- /.row -->
													
													<div class="hr dotted"></div>
													
													<div class="row">
														<h4 class="header green clearfix">
														<?php echo _('Responsibilities');?> 
														</h4>									
														<div class="widget-box">												
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<div class="wysiwyg-editor" id="responsibilitiesEditor"></div>
																</div>
															</div>
														</div>
													</div>
												</form>							
											</div><!--/step1-->
			
											<div class="step-pane" id="step2">												
												<h3 class="lighter block green"> <?php echo _('Hiring_Funnel');?>
													<small>
													<i class="icon-double-angle-right"></i>
														<?php echo _('Describe_your_hiring_process');?>
													</small>
												</h3>
												
												
												
												
												<div class="row">
													<div class="col-xs-12 col-sm-4">
														<ul class="item-list" id="hiringProcessList">
															<li class="item-red clearfix" data-id="1" id="funnel_step1"> 
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Pooling');?></span>
																</label>
															</li>
															
															<li class="item-blue clearfix hiring-process-item" data-id="2" id="funnel_step2"> 
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Phone_Interview');?></span>
																</label>
																<div class="pull-right action-buttons">
																	<a href="#editStepFormModal" class="green edit_step step_button">
																		<i class="icon-cog bigger-130"></i>
																	</a>
																	<span class="vbar"></span>
																	<a href="#" class="red remove_step step_button">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</li>												
															<li class="item-blue clearfix hiring-process-item" data-id="3" id="funnel_step3">
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Job_Interview_One');?></span>
																</label>
																<div class="pull-right action-buttons">
																	<a href="#editStepFormModal" class="green edit_step step_button">
																		<i class="icon-cog bigger-130"></i>
																	</a>
																	<span class="vbar"></span>
																	<a href="#" class="red remove_step step_button">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</li>
															<li class="item-blue clearfix hiring-process-item" data-id="4" id="funnel_step4">
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Job_Interview_Two');?></span>
																</label>
																<div class="pull-right action-buttons">
																	<a href="#editStepFormModal" class="green edit_step step_button">
																		<i class="icon-cog bigger-130"></i>
																	</a>
																	<span class="vbar"></span>
																	<a href="#" class="red remove_step step_button">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</li>
															<li class="item-blue clearfix hiring-process-item" data-id="5" id="funnel_step5">
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Background_Check');?></span>
																</label>
																<div class="pull-right action-buttons">
																	<a href="#editStepFormModal" class="green edit_step step_button">
																		<i class="icon-cog bigger-130"></i>
																	</a>
																	<span class="vbar"></span>
																	<a href="#" class="red remove_step step_button">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</li>
															<li class="item-blue clearfix hiring-process-item" data-id="6" id="funnel_step6">
																<label class="stepName inline">
																	<span class="lbl"><?php echo _('Job_Offer');?></span>
																</label>
																<div class="pull-right action-buttons">
																	<a href="#editStepFormModal" class="green edit_step step_button">
																		<i class="icon-cog bigger-130"></i>
																	</a>
																	<span class="vbar"></span>
																	<a href="#" class="red remove_step step_button">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</li>										
														</ul>											
														
														<div class="widget-box" id="addStepForm"><!--Add step-->
															<div class="widget-header widget-header-small">
																<h5 class="lighter"><?php echo _('Add_a_step');?></h5>
															</div>		
															<div class="widget-body">
																<div class="widget-main">
																	<form class="form-search" role="form">
																		<div class="row">																	
																			<div class="col-xs-12">																		
																				<div class="input-group">
																					<input type="text" id="funnelStep" class="form-control search-query" placeholder="<?php echo _('Description');?>" />
																					<span class="input-group-btn">
																						<button type="button" id="addHiringStep" class="btn btn-purple btn-sm">																				
																							<i class="icon-plus bigger-110"></i>
																						</button>
																					</span>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!--step2-->
			
											<div class="step-pane" id="step3">									
												<h3 class="lighter block green"> <?php echo _('Job_Location');?>
													<small>
													<i class="icon-double-angle-right"></i>
														<?php echo _('Provide_as_many_details_as_possible');?>  
													</small>
												</h3>
											
												<form id="newPositionStep3" class="form-horizontal" role="form">											
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group location">
																<label class="col-sm-3 control-label no-padding-right" for="formCompanyName"> <?php echo _('Company');?> </label>
																<div class="col-xs-12 col-sm-5">
																	<input class="form-control no-add-on" type="text" id="formCompanyName" name="formCompanyName" placeholder="<?php echo _('Company_name');?>" maxlength="1000" required/>													
																</div>
															</div>												
															<div class="form-group location">
																<label class="col-sm-3 control-label no-padding-right" for="formCompanyIndustry"> <?php echo _('Industry');?> </label>
																<div class="input-group col-xs-12 col-sm-5">
																	<select class="select2 form-control" id="formCompanyIndustry" name="formCompanyIndustry" placeholder="<?php echo _('Please_select');?>" required>
																		<option value="">&nbsp;</option>
																	</select>
																</div>	
															</div>												
															<div class="form-group location">
																<label class="col-sm-3 control-label no-padding-right" for="formCompanyDescription"> <?php echo _('Description');?> </label>
																<div class="input-group col-xs-12 col-sm-5">													
																	<textarea class="form-control" id="formCompanyDescription" name="formCompanyDescription" placeholder="<?php echo _('Describe_your_company');?>" maxlength="1000" required></textarea>													
																</div>	
															</div>
														</div>
													</div>											
													<div class="hr hr-18 dotted"></div>											
													<div class="row">
														<div class="col-sm-12">
															<div class="col-sm-4">
																<div class="widget-box">
																	<div class="widget-header">
																		<h4><?php echo _('Company_Location');?></h4>
																	</div>
																	<div class="widget-body">
																		<div class="widget-main">
																			<div class="location">
																				<label for="formCompanyAddress1"> <?php echo _('Address_1');?> </label>																	
																				<textarea class="form-control" type="text" id="formCompanyAddress1" name="formCompanyAddress1" maxlength="1000" required></textarea>																	
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyAddress2"> <?php echo _('Address_2');?> </label>
																				<textarea class="form-control" type="text" id="formCompanyAddress2" name="formCompanyAddress2" maxlength="1000" ></textarea>																	
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyCity"> <?php echo _('City');?> </label>
																				<input class="form-control no-add-on" type="text" id="formCompanyCity" name="formCompanyCity" maxlength="1000" required/>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyState"> <?php echo _('State');?> </label>																	
																				<input class="form-control no-add-on" type="text" id="formCompanyState" name="formCompanyState" maxlength="100" required/>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyZip"> <?php echo _('ZIP');?> </label>																	
																				<input class="form-control no-add-on" type="text" id="formCompanyZip" name="formCompanyZip" maxlength="100" required/>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyCountry"> <?php echo _('Country');?> </label>																
																				<select class="select2 form-control" id="formCompanyCountry" name="formCompanyCountry" required>
																					<option value="">&nbsp;</option>
																				</select>																		
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="widget-box">
																	<div class="widget-header">
																		<h4><?php echo _('Company_Details');?></h4>
																	</div>
																	<div class="widget-body">
																		<div class="widget-main">
																			<div class="location">
																				<label for="formCompanyPhone1"> <?php echo _('Phone_1');?> </label>
																				<div class="input-group">
																					<span class="input-group-addon">
																						<i class="icon-phone"></i>
																					</span>
																					<input class="form-control input-mask-phone" type="text" id="formCompanyPhone1" name="formCompanyPhone1" required/>
																				</div>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyPhone2"> <?php echo _('Phone_2');?> </label>
																				<div class="input-group">
																					<span class="input-group-addon">
																						<i class="icon-phone"></i>
																					</span>
																					<input class="form-control input-mask-phone" type="text" id="formCompanyPhone2" name="formCompanyPhone2" />
																				</div>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyEmail"> <?php echo _('Email');?> </label>
																				<div class="input-group">
																					<span class="input-group-addon">
																						<i class="icon-envelope"></i>
																					</span>
																					<input class="form-control" type="email" id="formCompanyEmail" name="formCompanyEmail" maxlength="50" required/>
																				</div>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyWebsite"> <?php echo _('Website');?> </label>
																				<div class="input-group">
																					<span class="input-group-addon">
																						<i class="icon-globe"></i>
																					</span>
																					<input class="form-control" type="text" id="formCompanyWebsite" name="formCompanyWebsite" maxlength="50" required/>
																				</div>
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanyType"> <?php echo _('Type');?> </label>
																				<select class="select2 form-control" id="formCompanyType" name="formCompanyType" required>
																					<option value="">&nbsp;</option>
																				</select>																																		
																			</div>
																			<div class="space-4"></div>
																			<div class="location">
																				<label for="formCompanySize"> <?php echo _('Size');?> </label>																	
																				<select class="select2 form-control" id="formCompanySize" name="formCompanySize" required>
																					<option value="">&nbsp;</option>
																				</select>																	
																			</div>
																		</div><!--/widget main-->
																	</div><!--/widget body-->
																</div><!--/widget box-->
															</div><!--/Col sm-->
														</div>
													</div>
												</form>
											</div><!--/step3-->
		
											<div class="step-pane" id="step4">
												<h3 class="lighter block green" id="validationHeader"> <?php echo _('Validation');?>
													<!--<small>
													<i class="icon-double-angle-right"></i>
														<?php //echo _('Decide_how_a_candidate_can_apply');?>
													</small>-->
												</h3>
												
												<div class="row">													
													<form class="form-horizontal" role="form">
														<div>												
															<label class="col-sm-3 control-label no-padding-right" for="positionUrl"> <?php echo _('URL');?> </label>
															<div class="col-xs-12 col-sm-5">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="icon-external-link green"></i>
																	</span>
																	<input class="form-control" type="text" id="positionUrl" name="positionUrl" placeholder="Position URL"/>
																</div>
															</div>												
														</div>
													</form>
												</div>
												
											</div><!--/step4-->
											
										</div>
		
										<hr />
										<div class="row-fluid wizard-actions form-actions">
											<button id="fueluxWizardPrev" class="btn btn-prev">
												<i class="icon-arrow-left"></i>
												<?php echo _('Prev');?>
											</button>
											<button id="fueluxWizardNext" class="btn btn-success btn-next" data-last="<?php echo _('Finish');?> ">
												<?php echo _('Next');?>
												<i class="icon-arrow-right icon-on-right"></i>
											</button>
											<button id="fueluxWizardFinish" class="btn btn-success hide">
												<i class="icon-ok icon-on-right"></i>
												<?php echo _('Finish');?>												
											</button>
										</div>
										
									</div><!-- /widget-main -->
								</div><!-- /widget-body -->
							</div>
						</div>
					</div>
				</div>
				
				
			</div><!-- /.page-content -->			
		</div><!-- /.main-content -->				
	</div><!-- /.main-container-inner -->
</div><!-- /.main-container -->

<!--Dialog and Modals-->

<!--Edit Hiring process Step Dialog-->
<div id="editStepFormModal" class="hide">			
	<input type="text" id="stepIDFormModal" class="hidden"/>
	<input type="text" id="stepNameFormModal" class="form-control"/>			
</div>

<!--Validation Confirmation Dialog-->
<div id="validationConfirm" class="hide">
<!--	<div class="alert alert-info bigger-110">
		<?php //echo _('The_position_will_be_saved');?>
	</div>-->

	<div class="space-6"></div>

	<p class="bigger-110 bolder center grey">
		<i class="icon-hand-right blue bigger-120"></i>
		<?php echo _('Are_you_sure');?>
	</p>
</div>

<!--/Dialog and Modals-->

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
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->
<!--<script src="<?php //echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>-->

<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/js/fuelux/fuelux.wizard.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>

<!--<script src="<?php //echo base_url();?>assets/js/x-editable/bootstrap-editable.min.js"></script>-->
<!--<script src="<?php //echo base_url();?>assets/js/x-editable/ace-editable.min.js"></script>-->
<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datepicker.min.js"></script>


<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/js/markdown/markdown.min.js"></script>
<script src="<?php echo base_url();?>assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-wysiwyg.min.js"></script>

<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>



<!--Nestable-->
<script src="<?php echo base_url();?>assets/js/jquery.nestable.min.js"></script>		

<!--Gritter-->
<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>

<!--Select-->

<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>

<!-- ace scripts -->

<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

<script type="text/javascript">
	jQuery(function($){
	
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

	//but we want to change a few buttons colors for the third style
	$('#jobDescriptionEditor, #educationTrainingEditor, #skillsExperienceEditor, #responsibilitiesEditor').ace_wysiwyg({
		toolbar:
		[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
		],
		'wysiwyg': {
			fileUploadError: showErrorAlert
		}
	}).prev().addClass('wysiwyg-style2');


	/*$('[data-toggle="buttons"] .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		var toolbar = $('#jobDescriptionEditor').prev().get(0);
		if(which == 1 || which == 2 || which == 3) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
		}
	});*/
	
	//Add Image Resize Functionality to Chrome and Safari
	//webkit browsers don't have image resize functionality when content is editable
	//so let's add something using jQuery UI resizable
	//another option would be opening a dialog for user to enter dimensions.
	if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {
		
		var lastResizableImg = null;
		
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

		var enableImageResize = function() {
			$('.wysiwyg-editor')
			.on('mousedown', function(e) {
				var target = $(e.target);
				if( e.target instanceof HTMLImageElement ) {
					if( !target.data('resizable') ) {
						target.resizable({
							aspectRatio: e.target.width / e.target.height,
						});
						target.data('resizable', true);
						
						if( lastResizableImg != null ) {//disable previous resizable image
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
						}
						lastResizableImg = target;
					}
				}
			})
			.on('click', function(e) {
				if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
					destroyResizable();
				}
			})
			.on('keydown', function() {
				destroyResizable();
			});
		}
		
		enableImageResize();

		/**
		//or we can load the jQuery UI dynamically only if needed
		if (typeof jQuery.ui !== 'undefined') enableImageResize();
		else {//load jQuery UI if not loaded
			$.getScript($path_assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
				if('ontouchend' in document) {//also load touch-punch for touch devices
					$.getScript($path_assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
						enableImageResize();
					});
				} else	enableImageResize();
			});
		}
		*/
	}


});
</script>

<!--Select Element Data-->
<script type="text/javascript">
//jQuery(function($) {
	
	//Position
	
	var select_jobfunction;
	select_jobfunction = <?php echo json_encode($select_jobfunction);?>;
	$.each(select_jobfunction, function() {
		$.each(this, function(k, v) {				
			$('#formNewPositionFunction').append($('<option>').text(v).attr('value', k));
		});
	});
	
	var select_jobexperience;
	select_jobexperience = <?php echo json_encode($select_jobexperience);?>;
	$.each(select_jobexperience, function() {
		$.each(this, function(k, v) {				
			$('#formNewPositionExperience').append($('<option>').text(v).attr('value', k));
		});
	});
	
	var select_jobtype;
	select_jobtype = <?php echo json_encode($select_jobtype);?>;
	$.each(select_jobtype, function() {
		$.each(this, function(k, v) {				
			$('#formNewPositionType').append($('<option>').text(v).attr('value', k));
		});
	});

	//Company
	
	var select_companysize;
	select_companysize = <?php echo json_encode($select_companysize);?>;
	$.each(select_companysize, function() {
		$.each(this, function(k, v) {				
			$('#formCompanySize').append($('<option>').text(v).attr('value', k));
		});
	});
	
	var select_companytype;
	select_companytype = <?php echo json_encode($select_companytype);?>;
	$.each(select_companytype, function() {
		$.each(this, function(k, v) {				
			$('#formCompanyType').append($('<option>').text(v).attr('value', k));
		});
	});
	
	var select_country;
	select_country = <?php echo json_encode($select_country);?>;
	$.each(select_country, function() {
		$.each(this, function(k, v) {				
			$('#formCompanyCountry').append($('<option>').text(v).attr('value', k));
		});
	});
	
	var select_industry;
	select_industry = <?php echo json_encode($select_industry);?>;
	$.each(select_industry, function() {
		$.each(this, function(k, v) {				
			$('#formCompanyIndustry').append($('<option>').text(v).attr('value', k));
		});
	});
	
//});
</script>

<script type="text/javascript">
	jQuery(function($) {
	
		$('[data-rel=tooltip]').tooltip();
	
		var $validation = true;
		$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
			if(info.step == 1 && $validation) {
				if( ! $('#newPositionStep1').valid() ) return false;				
			}
			
			if(info.step == 3 && $validation) {
				if( ! $('#newPositionStep3').valid() ) return false;				
			}
			
		}		
		).on('finished', function(e) {
			
			window.location = '<?php echo base_url();?>position';
			
			/*bootbox.dialog({				
				message: "New Position has been posted!", 
				buttons: {
					"success" : {
						"label" : "OK",
						"className" : "btn-sm btn-primary"
					}
				}
			});*/
			
		}).on('stepclick', function(e){
			//return false;//prevent clicking on steps			
		});

		$('#fueluxWizardFinish').on('click', function(e) {
			window.location = '<?php echo base_url();?>position';
		});
		
		$('#fueluxWizardNext').on('click', function(e) {
			var item = $('#fuelux-wizard').wizard('selectedItem');
			//console.log(item.step);
			
			if ( item.step == 3 ) {
				$('#fueluxWizardNext').html('Validate <i class="icon-arrow-right icon-on-right"></i>');				
			}
			
			if ( item.step == 4 ) {
				
				e.preventDefault();
			
				$( "#validationConfirm" ).removeClass('hide').dialog({
					resizable: false,
					modal: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-info'></i> <?php echo _('Validate_the_position');?></h4></div>",
					title_html: true,
					buttons: [
						{
							html: "<i class='icon-ok bigger-110'></i>&nbsp; <?php echo _('Proceed');?>",
							"class" : "btn btn-xs btn-success",
							click: function() {
													//Posting New Position		
													var jobDescriptionEditor = $("#jobDescriptionEditor").html();
													var educationTrainingEditor = $("#educationTrainingEditor").html();
													var skillsExperienceEditor = $("#skillsExperienceEditor").html();
													var responsibilitiesEditor = $("#responsibilitiesEditor").html();						
													var positionData = [];
													
													positionData.push( {
														position: $('#formNewPosition').val(),
														postingDate: $('#formNewPositionDate').val(),
														jobFunctionID: $('#formNewPositionFunction').val(),
														experienceLevelID: $('#formNewPositionExperience').val(),
														jobTypeID: $('#formNewPositionType').val(),
														description: jobDescriptionEditor,
														educationAndTraining: educationTrainingEditor,
														skillsAndExperience: skillsExperienceEditor,
														responsibilities: responsibilitiesEditor
													} );
													
													//Get Hiring Process List
													var hiringProcessData = [];
													var list = $('#hiringProcessList li');
													var no = 0;
													
													list.each( function(){
														var process_name;
														no++;
														process_name = $( this ).text().trim();
														hiringProcessData.push( {
															process: process_name,
															sequenceNo: no
														});
													});
													
													//Location Data
													var locationData = [];
													locationData.push( {
														name: $('#formCompanyName').val(),
														industryID: $('#formCompanyIndustry').val(),
														description: $('#formCompanyDescription').val(),
														address: $('#formCompanyAddress1').val(),
														address2: $('#formCompanyAddress2').val(),
														city: $('#formCompanyCity').val(),
														state: $('#formCompanyState').val(),
														zip: $('#formCompanyZip').val(),
														countryID: $('#formCompanyCountry').val(),			
														phone1: $('#formCompanyPhone1').val(),
														phone2: $('#formCompanyPhone2').val(),
														email: $('#formCompanyEmail').val(),
														website: $('#formCompanyWebsite').val(),
														companyTypeID: $('#formCompanyType').val(),
														companySizeID: $('#formCompanySize').val()
													});
													
													//Post data
													
													$.post('<?php echo site_url();?>position/add_position', { 'position' : positionData, 'hiringProcess' : hiringProcessData, 'location' : locationData}, function(data){					
														var status = data.status;
														var response = data.response;					
														if ( status != 'Success') {
															alert('<?php echo _('Please_try_again');?>');
															$('[data-target=#step3]').trigger("click");
														}
														else {											
															$('#positionUrl').val('<?php echo base_url();?>'+response.positionCode);
															$('#validationHeader').html('<?php echo _('The_Position_has_been_validated_successfully');?>');															
															$('#fueluxWizardPrev').addClass('hide');
															$('#fueluxWizardNext').addClass('hide');
															$('#fueluxWizardFinish').removeClass('hide');															
														}				
													}, "json");
													//Posting New Position end
								
								$( this ).dialog( "close" );
							}
						}
						,
						{
							html: "<i class='icon-remove bigger-110'></i>&nbsp; <?php echo _('Cancel');?>",
							"class" : "btn btn-xs btn-danger",
							click: function() {
								$('[data-target=#step3]').trigger("click");
								$( this ).dialog( "close" );
							}
						}
					]
				});
			}
		});
	
		$('#skip-validation').removeAttr('checked').on('click', function(){
			$validation = this.checked;
			if(this.checked) {
				$('#sample-form').hide();
				$('#validation-form').removeClass('hide');
			}
			else {
				$('#validation-form').addClass('hide');
				$('#sample-form').show();
			}
		});
	
	
		//documentation : http://docs.jquery.com/Plugins/Validation/validate	
	
		$.mask.definitions['~']='[+-]';
		//$('.input-mask-phone').mask('(999) 999-9999');
	
		jQuery.validator.addMethod("phone", function (value, element) {
			return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
		}, "Enter a valid phone number.");
	
		
	});
</script>

		
<script type="text/javascript">	
	$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});
</script>

<!--Form Validation-->

<script type="text/javascript">
	jQuery(function($){
		
		$('#newPositionStep1').validate({
			errorElement: 'div',
			errorClass: 'help-block',
			focusInvalid: false,
			rules: {
				formNewPosition: {
					required: true,					
				},
				formNewPositionDate: {
					required: true,					
				},
				formNewPositionFunction: {
					required: true,					
				},
				formNewPositionExperience: {
					required: true,					
				},
				formNewPositionType: {
					required: true,					
				},
			},
			invalidHandler: function (event, validator) { //display error alert on form submit   
				$('.alert-danger', $('.login-form')).show();
			},	
			highlight: function (e) {
				$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
			},	
			success: function (e) {
				$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
				$(e).remove();
			},	
			errorPlacement: function (error, element) {
				if(element.is(':checkbox') || element.is(':radio')) {
					var controls = element.closest('div[class*="col-"]');
					if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
					else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
				}
				else if(element.is('.select2')) {
					error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
				}
				else if(element.is('.chosen-select')) {
					error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
				}
				else if(element.is('textarea') || element.is('.no-add-on')) {
					error.insertAfter(element);
				}				
				else error.insertAfter(element.parent());
			}
		});
		
		$('#newPositionStep3').validate({
			errorElement: 'div',
			errorClass: 'help-block',
			focusInvalid: false,
			rules: {
				formCompanyName: {
					required: true,					
				},
				formCompanyIndustry: {
					required: true,					
				},
				formCompanyDescription: {
					required: true,					
				},
				formCompanyAddress1: {
					required: true,					
				},
				formCompanyCity: {
					required: true,					
				},
				formCompanyState: {
					required: true,					
				},
				formCompanyZip: {
					required: true,					
				},
				formCompanyCountry: {
					required: true,					
				},
				formCompanyPhone1: {
					required: true,					
				},
				formCompanyEmail: {
					required: true,
					email: true					
				},
				formCompanyWebsite: {
					required: true,					
				},
				formCompanyType: {
					required: true,					
				},
				formCompanySize: {
					required: true,					
				}
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   
				$('.alert-danger', $('.login-form')).show();
			},
	
			highlight: function (e) {
				$(e).closest('.location').removeClass('has-info').addClass('has-error');
			},
	
			success: function (e) {
				$(e).closest('.location').removeClass('has-error').addClass('has-info');
				$(e).remove();
			},
	
			errorPlacement: function (error, element) {
				if(element.is(':checkbox') || element.is(':radio')) {
					var controls = element.closest('div[class*="col-"]');
					if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
					else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
				}
				else if(element.is('.select2')) {
					error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
				}
				else if(element.is('.chosen-select')) {
					error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
				}
				else if(element.is('textarea') || element.is('.no-add-on')) {
					error.insertAfter(element);
				}				
				else error.insertAfter(element.parent());
				//else error.insertAfter(element);
			}
		});
		
	});
</script>

<!--Sortable list-->

<script>
$(function() {
	
	//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
	//so disable dragging when clicking on label
	var agent = navigator.userAgent.toLowerCase();
	if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
	  $('#hiringProcessList').on('touchstart', function(e){
		var li = $(e.target).closest('#hiringProcessList li');
		if(li.length == 0)return;
		var label = li.find('label.inline').get(0);
		if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
	});

	$('#hiringProcessList').sortable({
		opacity:0.8,
		items: "> li:gt(0)",
		revert:true,
		forceHelperSize:true,
		placeholder: 'draggable-placeholder',
		forcePlaceholderSize:true,
		tolerance:'pointer',
		stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
			$(ui.item).css('z-index', 'auto');
		}
		}
	);
	$('#hiringProcessList').disableSelection();
	
//	$( "#hiringProcessList" ).sortable({
//    items: "> li:gt(0)", 
//    connectWith: ".connectedSortable" 
//});
//	$( "#hiringProcessList" ).disableSelection();
	
	
});

$('#hiringProcessList').on('click', '.remove_step', function(e){
	e.preventDefault();	
	$(this).parents('li.hiring-process-item').remove();
});


$('#addStepForm').on('click', '#addHiringStep', function(e){
	e.preventDefault();
	
	var funnelStep = $('#funnelStep').val();
	var sequenceNo = get_sequence_no();
	var new_id = 'funnel_step' + sequenceNo;			
	if ( funnelStep != '' ) {
		var step = "<li class='item-blue clearfix hiring-process-item' data-id='" + sequenceNo + "' id='" + new_id + "'><label class='stepName inline'><span class='lbl'>" + $('#funnelStep').val() +
		"</span></label><div class='pull-right action-buttons'><a class='green edit_step step_button' href='#editStepFormModal'><i class='icon-cog bigger-130'></i></a><span class='vbar'></span><a class='red remove_step step_button' href=''><i class='icon-trash bigger-130'></i></a></div></li>";				
		$( "#hiringProcessList" ).append( step );			
		$('#funnelStep').val('');		
	}
	else{				
		alert('<?php echo _('Please_Enter_Step_name');?>');			
	}
});

//Edit Step Name
jQuery(function($) {

	//override dialog's title function to allow for HTML titles
	$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
		_title: function(title) {
			var $title = this.options.title || '&nbsp;'
			if( ("title_html" in this.options) && this.options.title_html == true )
				title.html($title);
			else title.text($title);
		}
	}));

	$('#hiringProcessList').on('click', '.edit_step', function(e){
		e.preventDefault();	
		
		var stepID = $(this).parents('li.hiring-process-item').attr('data-id');		
		$('#stepIDFormModal').val(stepID);
		
		var stepNameContainer = $(this).parents('li.hiring-process-item').find('span.lbl');
		var oldStepName = stepNameContainer.text();
		
		$('#stepNameFormModal').val(oldStepName);
		e.preventDefault();
	
		var dialog = $( "#editStepFormModal" ).removeClass('hide').dialog({
			modal: true,
			title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='icon-pencil'></i> <?php echo _('Please_Enter_Step_name'); ?> </h4></div>",
			title_html: true,
			buttons: [ 
				{
					text: "Cancel",
					"class" : "btn btn-xs",
					click: function() {
						$( this ).dialog( "close" ); 
					} 
				},
				{
					text: "OK",
					"class" : "btn btn-primary btn-xs",
					click: function() {						
						var newStepName = $('#stepNameFormModal').val();						
							if ( newStepName != oldStepName) {
								$( stepNameContainer ).html( newStepName );
							}
						$( this ).dialog( "close" ); 
					} 
				}
			]
		});
		
	});
	
});
</script>

<script type="text/javascript">			
	function get_new_value () {		
		var list = document.getElementById('hiringProcessList').getElementsByTagName('li');
		var i;
		var current = 1;
		for(i=0; i<list.length; i++){
			var candidate = list[i].getAttribute('data-id');				
			if ( current < candidate ) {
				current = candidate;
			}			
		}
		return parseInt(current) + 1;
	}
	
	function get_sequence_no () {		
		var list = document.getElementById('hiringProcessList').getElementsByTagName('li');
		return list.length + 1;		
	}	
</script>

