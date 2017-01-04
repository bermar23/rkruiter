<!-- page specific plugin styles -->


<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-fonts.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-editable.css" />

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
						<a href="<?php echo site_url();?>home">Home</a>
					</li>
		
					<li class="active">View Position</li>
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
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->			
					<div class="tabbable">
						<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
							<li class="active">
								<a data-toggle="tab" href="#position">
									<i class="blue icon-edit bigger-120"> <?php echo _('Position');?> </i>	
								</a>
							</li>
		
							<li>
								<a data-toggle="tab" href="#funnel">
									<i class="red icon-filter bigger-120"> <?php echo _('Funnel');?> </i>
								</a>
							</li>
		
							<li>
								<a data-toggle="tab" href="#location">
									<i class="orange icon-map-marker bigger-120"> <?php echo _('Location');?> </i>
								</a>
							</li>
		
							<li>
								<a data-toggle="tab" href="#validation">
									<i class="green icon-external-link bigger-120"> <?php echo _('Link');?> </i>
								</a>
							</li>
						</ul>
		
						<div class="tab-content no-border padding-24">
							
							<div id="position" class="tab-pane fade in active">
								<div class="page-header">
									<h3 class="lighter block green">
										<?php echo _('Opening_Details');?>
										<small>
											<i class="icon-double-angle-right"></i>
											<?php echo _('All_fields_are_mandatory');?>
										</small>
									</h3>
								</div>
								
								<div class="profile-user-info profile-user-info-striped">
									
									<div class="profile-info-row">
										<div class="profile-info-name"> <?php echo _('Position');?> : </div>
										<div class="profile-info-value">
											<span id="formNewPosition" class="editable editable-click"></span>
										</div>
									</div><!-- /.profile-info-row -->
		
									<div class="profile-info-row">
										<div class="profile-info-name"> <?php echo _('Posted_on');?> : </div>
		
										<div class="profile-info-value">
											<span id="formNewPositionDate" class="editable editable-click"></span>
										</div>
									</div><!-- /.profile-info-row -->
		
									<div class="profile-info-row">
										<div class="profile-info-name"> <?php echo _('Function');?> : </div>
		
										<div class="profile-info-value">
											<span id="formNewPositionFunction" class="editable editable-click"></span>
										</div>
									</div><!-- /.profile-info-row -->
		
									<div class="profile-info-row">
										<div class="profile-info-name"> <?php echo _('Experience');?> : </div>
		
										<div class="profile-info-value">
											<span id="formNewPositionExperience" class="editable editable-click"></span>
										</div>
									</div><!-- /.profile-info-row -->
		
									<div class="profile-info-row">
										<div class="profile-info-name"> <?php echo _('Job_Type');?> : </div>
		
										<div class="profile-info-value">
											<span id="formNewPositionType" class="editable editable-click"></span>
										</div>
									</div><!-- /.profile-info-row -->
									
									<!--<div class="widget-toolbox padding-4 clearfix">
										<div class="btn-group pull-right">
											<button class="btn btn-sm btn-danger">
											<i class="icon-save bigger-125"></i>
											<?php //echo _('Save');?>
											</button>
										</div>
									</div>-->
									
								</div><!-- /.profile-user-info -->
								
		
								<div class="row">
									<h4 class="header green clearfix">
										<?php echo _('Job_Description');?>
									</h4>
		
									<div class="widget-box">												
										<div class="widget-body">
											<div class="widget-main no-padding">
												<div class="wysiwyg-editor" id="jobDescriptionEditor"><?php echo $positionData['description'];?></div>
											</div>
										
											<div class="widget-toolbox padding-4 clearfix">
												<div class="btn-group pull-left">
													<!--<button class="btn btn-sm btn-grey">
														<i class="icon-remove bigger-125"></i>
														<?php //echo _('Cancel');?>
													</button>-->
												</div>
		
												<div class="btn-group pull-right">
													<button class="btn btn-sm btn-danger" id="saveJobDescription">
														<i class="icon-save bigger-125"></i>
														<?php echo _('Save');?>
													</button>
												</div>
											</div><!-- /.widget-toolbox -->
										</div>
									</div>
								</div>
		
								<div class="row">
									<div class="col-sm-6">
										<h4 class="header green clearfix"><?php echo _('Education_and_Training');?></h4>
		
										<div class="widget-box">
											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="wysiwyg-editor" id="educationTrainingEditor"><?php echo $positionData['educationAndTraining'];?></div>
												</div>
												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<!--<button class="btn btn-sm btn-grey">
															<i class="icon-remove bigger-125"></i>
															<?php //echo _('Cancel');?>
														</button>-->
													</div><!-- /.btn-group -->
		
													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger" id="saveEducationTraining">
															<i class="icon-save bigger-125"></i>
															<?php echo _('Save');?>
														</button>
													</div><!-- /.btn-group -->
												</div><!-- /.widget-toolbox -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col-sm-6 -->
		
									<div class="col-sm-6">
										<h4 class="header green clearfix"><?php echo _('Skills_and_Experience');?></h4>
		
										<div class="widget-box">
											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="wysiwyg-editor" id="skillsExperienceEditor"><?php echo $positionData['skillsAndExperience'];?></div>
												</div>
		
												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<!--<button class="btn btn-sm btn-grey">
															<i class="icon-remove bigger-125"></i>
															<?php //echo _('Cancel');?>
														</button>-->
													</div>
		
													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger" id="saveSkillsExperience">
															<i class="icon-save bigger-125"></i>
															<?php echo _('Save');?>
														</button>
													</div><!-- /.btn-group -->
												</div><!-- /.widget-toolbox -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col-sm-6 -->
								</div><!-- /.row -->
								
								<div class="row">
									<h4 class="header green clearfix">
										<?php echo _('Responsibilities');?>
									</h4>
		
									<div class="widget-box">												
										<div class="widget-body">
											<div class="widget-main no-padding">
												<div class="wysiwyg-editor" id="responsibilitiesEditor"><?php echo $positionData['responsibilities'];?></div>
											</div>
											
											<div class="widget-toolbox padding-4 clearfix">
												<div class="btn-group pull-left">
													<!--<button class="btn btn-sm btn-grey">
														<i class="icon-remove bigger-125"></i>
														<?php //echo _('Cancel');?>
													</button>-->
												</div>
		
												<div class="btn-group pull-right">
													<button class="btn btn-sm btn-danger" id="saveResponsibilities">
														<i class="icon-save bigger-125"></i>
														<?php echo _('Save');?>
													</button>
												</div>
											</div><!-- /.widget-toolbox -->
										</div>
									</div>
								</div>
							</div>
							
							<div id="funnel" class="tab-pane">
								<div class="page-header">
									<h3 class="lighter block green"> <?php echo _('Hiring_Funnel');?>
										<small>
										<i class="icon-double-angle-right"></i>
											<?php echo _('Describe_your_hiring_process');?>
										</small>
									</h3>
								</div>
								
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<ul class="item-list" id="hiringProcessList">
											<?php foreach ($hiringProcessData as $row): ?>
											<li class="<?php echo ( $row->process != _('Pooling') ? 'item-blue' : 'item-red'); ?> clearfix hiring-process-item" data-id="<?php print_r($row->id) ?>" id="funnel_step<?php print_r($row->sequenceNo) ?>"> 
												<label class="stepName inline">
													<span class="lbl"><?php print_r($row->process) ?></span>
												</label>													
												<?php if($row->process != _('Pooling')): ?>
													<div class="pull-right  action-buttons">												
														<a href="#editStepFormModal" class="green edit_step step_button">
															<i class="icon-cog bigger-130"></i>
														</a>
														<span class="vbar"></span>
														<a href="#" class="red remove_step step_button">
															<i class="icon-trash bigger-130"></i>
														</a>												
													</div>
												<?php endif;?>
											</li>											
											<?php endforeach; ?>
											
										</ul>
										
										<div class="widget-box"><!--Add step-->
											<div class="widget-header widget-header-small">
												<h5 class="lighter"><?php echo _('Add_a_step');?></h5>
											</div>		
											<div class="widget-body">
												<div class="widget-main">
													<form class="form-search" id="addStepForm" role="form">
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
												
												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger" id="saveHiringProcess">
														<i class="icon-save bigger-125"></i>
														<?php echo _('Save');?>
														</button>
													</div>
												</div>
												
											</div>
										</div>
									</div><!--col-->
								</div><!--row-->
							</div>
								
							<div id="location" class="tab-pane">
								<div class="page-header">
									<h3 class="lighter block green">
										<?php echo _('Job_Location');?>
										<small>
											<i class="icon-double-angle-right"></i>
											<?php echo _('Provide_as_many_details_as_possible');?> 
										</small>
									</h3>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="row">
										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Company');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyName" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Industry');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyIndustry" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Description');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyDescription" class="editable editable-click"><?php echo $locationData['companyDescription'];?></span>
												</div>
											</div><!-- /.profile-info-row -->
										</div>
									</div>
									<div class="row">
										<h4 class="header green clearfix">
											<?php echo _('Company_Location');?>
										</h4>
										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Address_1');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyAddress1" class="editable editable-click"><?php echo addslashes($locationData['companyAddress']);?></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Address_2');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyAddress2" class="editable editable-click"><?php echo addslashes($locationData['companyAddress2']);?></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('City');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyCity" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('State');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyState" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('ZIP');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyZip" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Country');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyCountry" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->									
										</div>
									</div>
									
									<div class="row">		
										<h4 class="header green clearfix">
											<?php echo _('Company_Details');?>
										</h4>
										
										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Phone_1');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyPhone1" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Phone_2');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyPhone2" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Email');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyEmail" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Website');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyWebsite" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Type');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanyType" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
											
											<div class="profile-info-row">
												<div class="profile-info-name"> <?php echo _('Size');?> : </div>
												<div class="profile-info-value">
													<span id="formCompanySize" class="editable editable-click"></span>
												</div>
											</div><!-- /.profile-info-row -->
										</div>
									</div>
								</div>
							</div><!-- /.tab.pane -->
		
							<div id="validation" class="tab-pane">
								<div class="page-header">
									<h3 class="lighter block green"> <?php echo _('Apply_via');?>
										<small>
										<i class="icon-double-angle-right"></i>
											<?php echo _('Decide_how_a_candidate_can_apply');?>
										</small>
									</h3>
								</div><!-- /.page-header -->
								
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<form class="form-horizontal" role="form">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo _('URL');?> </label>
		
										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?php echo $positionData['positionURL'];?>" class="col-xs-10 col-sm-7" readonly=""/>
										</div>
									</form>	
								</div><!-- /.form-group -->
							</form>
		
							<div class="hr dotted"></div>
						
							<div class="widget-toolbox padding-4 clearfix">
								<div class="btn-group pull-right">							
									<a class="btn btn-sm btn-danger" type="button" href="<?php echo site_url();?>position">
									<i class="icon-remove bigger-125"></i>
									<?php echo _('Close');?>
									</a>
								</div>
							</div>
									
							</div><!-- /.validation -->
						</div>
					</div><!-- /.tabbable -->
		
					
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->						
			</div><!-- /.page-content -->
		
				
				

				
				
			
		</div><!-- /.main-content -->				
	</div><!-- /.main-container-inner -->
</div><!-- /.main-container -->

<!--Dialog and Modals-->
<div id="editStepFormModal" class="hide">			
	<input type="text" id="stepIDFormModal" class="hidden"/>
	<input type="text" id="stepNameFormModal" class="form-control"/>			
</div><!-- #dialog-confirm -->
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

<script src="<?php echo base_url();?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?php echo base_url();?>assets/js/x-editable/ace-editable.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/js/markdown/markdown.min.js"></script>
<script src="<?php echo base_url();?>assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-wysiwyg.min.js"></script>

<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>

<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>


<!--Nestable-->
<script src="<?php echo base_url();?>assets/js/jquery.nestable.min.js"></script>		

<!--Gritter-->
<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>

<!--Select-->

<!--<script src="<?php //echo base_url();?>assets/js/select2.min.js"></script>-->

<!-- ace scripts -->

<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

<script>
jQuery(function($){
	$(".chosen-select").chosen();
});
</script>

<!--Editor-->
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

<!--Editables-->

<script type="text/javascript">
jQuery(function($) {

	//editables on first profile page
	$.fn.editable.defaults.mode = 'inline';
	$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
	$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
								'<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    
	
	var positionPk = '<?php echo $positionData['positionID'];?>';

	//Position editables 
	$('#formNewPosition').editable({
		type: 'text',
		value: '<?php echo addslashes($positionData['position']);?>',
		pk: positionPk,
		url: '<?php echo site_url();?>position/edit_position_editable',
		name: 'position',
		success: function(response, newValue) {			
			
		},
		validate: function(value) {
			if($.trim(value) == '') {
			return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});

	$('#formNewPositionDate').editable({
		type: 'date',
		value: '<?php echo $positionData['postingDate'];?>',
		pk: positionPk,
		url: '<?php echo site_url();?>position/edit_position_editable',
		name: 'postingDate',
		format: 'yyyy-mm-dd',
		viewformat: 'dd/mm/yyyy',
		datepicker: {
			weekStart: 1
		}
	});
	
	//
	var select_jobfunction = <?php echo json_encode($select_jobfunction);?>;	
	var jobfunction = [];	
	$.each(select_jobfunction, function() {
		$.each(this, function(k, v) {				
			jobfunction.push({id: k, text: v});
		});
	});
	
	$('#formNewPositionFunction').editable({
		type: 'select2',
		value: <?php echo $positionData['jobFunctionID'];?>,
		pk: positionPk,
		url: '<?php echo site_url();?>position/edit_position_editable',
		name: 'jobFunctionID',
		source: jobfunction
	});
	
	var select_jobexperience = <?php echo json_encode($select_jobexperience);?>;	
	var jobexperience = [];	
	$.each(select_jobexperience, function() {
		$.each(this, function(k, v) {				
			jobexperience.push({id: k, text: v});
		});
	});
	
	$('#formNewPositionExperience').editable({
		type: 'select2',
		value: <?php echo $positionData['experienceLevelID'];?>,
		pk: positionPk,
		url: '<?php echo site_url();?>position/edit_position_editable',
		name: 'experienceLevelID',
		source: jobexperience
	});
	
	var select_jobtype = <?php echo json_encode($select_jobtype);?>;	
	var jobtype = [];	
	$.each(select_jobtype, function() {
		$.each(this, function(k, v) {				
			jobtype.push({id: k, text: v});
		});
	});	
	
	$('#formNewPositionType').editable({
		type: 'select2',
		value: <?php echo $positionData['jobTypeID'];?>,
		pk: positionPk,
		url: '<?php echo site_url();?>position/edit_position_editable',
		name: 'jobTypeID',
		source: jobtype
	});	
	
	//wysiwyg-editor HTML DATA
	$('#saveJobDescription, #saveEducationTraining, #saveSkillsExperience, #saveResponsibilities').click(function() {
		var buttonID = this.id;
		var editorValue = '';
		var fieldName = '';
		
		if (buttonID == 'saveJobDescription') {
			editorValue = $("#jobDescriptionEditor").html();
			fieldName = 'description';
		}
		else if (buttonID == 'saveEducationTraining') {
			editorValue = $("#educationTrainingEditor").html();
			fieldName = 'educationAndTraining';
		}
		else if (buttonID == 'saveSkillsExperience') {
			editorValue = $("#skillsExperienceEditor").html();
			fieldName = 'skillsAndExperience';
		}
		else if (buttonID == 'saveResponsibilities') {
			editorValue = $("#responsibilitiesEditor").html();
			fieldName = 'responsibilities';
		}
		else{
			return;
		}
		$.post('<?php echo site_url();?>position/edit_position_editable', { 'pk' : '<?php echo $positionData['positionID'];?>', 'value' : editorValue, 'name' : fieldName}, function(data){							
		var status = data;					
			if ( status != 'Success') {
				alert('<?php echo _('Please_try_again');?>');
			}
			else {											
				//alert('Saved');
			}				
		});
	});
	
	//Save Hiring Process
	$('#saveHiringProcess').click(function() {
		
		//Get Hiring Process List
		var hiringProcessData = [];
		var list = $('#hiringProcessList li');
		var no = 0;
		
		list.each( function(){
			var process_name;
			no++;
			process_name = $( this ).text().trim();
			process_id = $( this ).attr( 'data-id' );
			hiringProcessData.push( {
				id: process_id,
				process: process_name,				
				sequenceNo: no
			});
		});
		
		$.post('<?php echo site_url();?>position/edit_position_hiringprocess', { 'positionID' : '<?php echo $positionData['positionID'];?>', 'value' : hiringProcessData}, function(data){							
		var status = data;					
			if ( status != 'Success') {
				alert('<?php echo _('Please_try_again');?>');
			}
			else {											
				//alert('Saved');
			}				
		});
		
	});	

	var select_companysize = <?php echo json_encode($select_companysize);?>;	
	var companysize = [];	
	$.each(select_companysize, function() {
		$.each(this, function(k, v) {				
			companysize.push({id: k, text: v});
		});
	});
	
	var select_companytype = <?php echo json_encode($select_companytype);?>;	
	var companytype = [];	
	$.each(select_companytype, function() {
		$.each(this, function(k, v) {				
			companytype.push({id: k, text: v});
		});
	});
	
	var select_country = <?php echo json_encode($select_country);?>;	
	var country = [];	
	$.each(select_country, function() {
		$.each(this, function(k, v) {				
			country.push({id: k, text: v});
		});
	});
	
	var select_industry = <?php echo json_encode($select_industry);?>;	
	var industry = [];	
	$.each(select_industry, function() {
		$.each(this, function(k, v) {				
			industry.push({id: k, text: v});
		});
	});

	var companyPk = '<?php echo $locationData['locationID'];?>';
	
	//Company Editables	
	$('#formCompanyName').editable({
		type: 'text',
		value: '<?php echo addslashes($locationData['companyName']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'name',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});
	
	$('#formCompanyIndustry').editable({
		type: 'select2',				
		value: '<?php echo $locationData['industryID'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',
		name: 'industryID',
		source: industry
	});
	
	$('#formCompanyDescription').editable({
		type: 'textarea',		
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',
		name: 'description',
		tpl: '<textarea maxlength="1000"></textarea>',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});
	
	$('#formCompanyAddress1').editable({
		type: 'textarea',
		//value: '<?php //echo addslashes($locationData['companyAddress']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'address',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});
	
	$('#formCompanyAddress2').editable({
		type: 'textarea',
		//value: '<?php //echo addslashes($locationData['companyAddress2']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'address2'
	});
	
	$('#formCompanyCity').editable({
		type: 'text',
		value: '<?php echo addslashes($locationData['companyCity']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'city',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});

	$('#formCompanyState').editable({
		type: 'text',
		value: '<?php echo addslashes($locationData['companyState']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'state',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});

	$('#formCompanyZip').editable({
		type: 'text',
		value: '<?php echo addslashes($locationData['companyZip']);?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'zip',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});
	
	$('#formCompanyCountry').editable({
		type: 'select2',
		value: '<?php echo $locationData['countryID'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'countryID',
		source: country
	});
	
	$('#formCompanyPhone1').editable({
		type: 'text',
		value: '<?php echo $locationData['companyPhone1'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'phone1',
		validate: function(value) {
			if($.trim(value) == '' || $.trim(value) == '(___) ___-____') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});
	
    //$('#formCompanyPhone1, #formCompanyPhone2').on('shown', function() {
    //    $(this).data('editable').input.$input.mask('(999) 999-9999');
    //});
	
	$('#formCompanyPhone2').editable({
		type: 'text',
		value: '<?php echo $locationData['companyPhone2'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'phone2'
	});
	
	$('#formCompanyEmail').editable({
		type: 'email',		
		value: '<?php echo $locationData['companyEmail'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'email',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});	

	$('#formCompanyWebsite').editable({
		type: 'text',
		value: '<?php echo $locationData['companyWebsite'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'website',
		validate: function(value) {
			if($.trim(value) == '') {
				return '<?php echo _('This_field_is_required') ?>';
			}
		}
	});	
	
	$('#formCompanyType').editable({
		type: 'select2',
		value: '<?php echo $locationData['companyTypeID'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'companyTypeID',
		source: companytype
	});
	
	$('#formCompanySize').editable({
		type: 'select2',
		value: '<?php echo $locationData['companySizeID'];?>',
		pk: companyPk,
		url: '<?php echo site_url();?>position/edit_location_editable',		
		name: 'companySizeID',
		source: companysize
	});
	
});
</script>


<!--Sortable list-->

<script>
jQuery(function($) {
	//$( "#hiringProcessList" ).sortable({
	//	items: "> li:gt(0)", 
	//	connectWith: ".connectedSortable" 
	//});
	//$( "#hiringProcessList" ).disableSelection();
	
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

});

$('#hiringProcessList').on('click', '.remove_step', function(e){
	e.preventDefault();
	
	var hiringProcessID = $(this).parents('li.hiring-process-item').attr('data-id');	
	$.post('<?php echo site_url();?>position/delete_hiringprocess_step', { 'positionID' : '<?php echo $positionData['positionID'];?>', 'id' : hiringProcessID}, function(data){							
	var status = data;					
		if ( status != 'Error') {			
			$("li[data-id='" + status + "']").remove();
		}
		else {														
			alert('<?php echo _('Please_try_again');?>');
		}				
	});	
});

$('#addStepForm').on('click', '#addHiringStep', function(e){
	e.preventDefault();
	
	var funnelStep = $('#funnelStep').val();	
	var sequenceNo = get_sequence_no();
	var new_id = 'funnel_step' + sequenceNo;	
	if ( funnelStep != '' ) {
		
		$.post('<?php echo site_url();?>position/add_hiringprocess_step', { 'positionID' : '<?php echo $positionData['positionID'];?>', 'companyID' : '<?php echo $positionData['companyID'];?>', 'sequenceNo' : sequenceNo, 'process' : funnelStep}, function(data){							
			var status = data;					
			if ( status != 'Error') {
				var step = "<li class='item-blue clearfix hiring-process-item' data-id='" + status + "' id='" + new_id +
							"'><label class='stepName inline'><span class='lbl'>" + funnelStep +
							"</span></label><div class='pull-right action-buttons'><a class='green edit_step step_button' href='#editStepFormModal'><i class='icon-cog bigger-130'></i></a><span class='vbar'></span><a class='red remove_step step_button' href='#'><i class='icon-trash bigger-130'></i></a></div>" +							
							"</li>";
				$( "#hiringProcessList" ).append( step );
				$('#funnelStep').val('');
			}
			else {
				alert('<?php echo _('Please_try_again');?>');					
			}				
		});
		
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
								$.post('<?php echo site_url();?>position/edit_hiringprocess_stepname', { 'stepName' : newStepName, 'stepID' : stepID }, function(data){
									if ( data != 'Error') {										
										$( stepNameContainer ).html( newStepName );
										$('#stepNameFormModal').val('');
										$('#stepIDFormModal').val('');
									}
									else {								
										$('#stepNameFormModal').val('');
										$('#stepIDFormModal').val('');
									}							
								});
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
	function get_sequence_no () {		
		var list = document.getElementById('hiringProcessList').getElementsByTagName('li');
		return list.length + 1;		
	}	
</script>

<script>
$(function() { 
//for bootstrap 3 use 'shown.bs.tab' instead of 'shown' in the next line
$('a[data-toggle="tab"]').on('click', function (e) {
//save the latest tab; use cookies if you like 'em better:
localStorage.setItem('viewPositionTab', $(this).attr('href'));
});

//go to the latest tab, if it exists:
var lastTab = localStorage.getItem('viewPositionTab');

if (lastTab) {
$('a[href="'+lastTab+'"]').click();
}
});
</script>