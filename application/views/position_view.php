

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
				
							<li class="active">Position</li>
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
						<div class="row">
							<div class="page-header">
								<h1>Position</h1>
							</div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											<?php echo _('Job_Openning');?>
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>Position</th>
														<th>Posting Date</th>
														
														<th></th>
													</tr>
												</thead>

												<tbody>
													
													<?php foreach ($positionAll as $positionItem): ?>
													<tr class="positionRow">
														<td><?php echo $positionItem->position; ?></td>
														<td><?php echo $positionItem->postingDate; ?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<?php
																	$posURL = $positionItem->positionURL;
																	$posURL = base_url() . 'position/' . end(explode('/',$posURL));																				
																?>
																<a class="blue" href="<?php echo $posURL ; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" href="<?php echo $posURL ; ?>">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red remove_position" href="#">
																	<input class="positionID" value="<?php echo $positionItem->positionID; ?>" hidden/>
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													<?php endforeach ?>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								
								</div><!-- /.row -->
					

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				
<!--Validation Confirmation Dialog-->
<div id="deletionConfirm" class="hide">
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

<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/typeahead-bs2.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>

<script type="text/javascript">
	jQuery(function($) {
		var oTable1 = $('#sample-table-2').dataTable( {
		"aoColumns": [
						null, null, null
		] } );

		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
	})
</script>

<script>
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
	
	$('.positionRow').on('click', '.remove_position', function(e){
		e.preventDefault();
		var caller = this;
			
		$( "#deletionConfirm" ).removeClass('hide').dialog({
			resizable: false,
			modal: true,
			title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> <?php echo _('Confirm_deletion');?></h4></div>",
			title_html: true,
			buttons: [
				{
					html: "<i class='icon-trash bigger-110'></i>&nbsp; <?php echo _('Remove');?>",
					"class" : "btn btn-xs btn-danger",
					click: function() {
						//Posting Position position deletion
						var positionID = $(caller).children('input.positionID').val();						
						
						//Post data
						
						$.post('<?php echo site_url();?>position/delete_position', { 'positionID' : positionID }, function(data){					
							var status = data.status;
							var response = data.response;					
							if ( status != 'Success') {								
																
							}
							else {																			
								$( caller ).parents('.positionRow').remove();
								window.location = '<?php echo base_url();?>position';
							}				
						}, "json");
						//Posting Position position deletion end
						
						$( this ).dialog( "close" );
						
					}
				},
				{
					html: "<i class='icon-remove bigger-110'></i>&nbsp; <?php echo _('Cancel');?>",
					"class" : "btn btn-xs btn-default",
					click: function() {								
						$( this ).dialog( "close" );
					}
				}
			]
		});
	
	});
});
</script>
