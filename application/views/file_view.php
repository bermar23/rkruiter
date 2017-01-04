

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

							<li class="active">S3 Files</li>
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
						<div class="row">
							<div class="page-header">
								<h1>S3 Files</h1>
							</div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header header-color-green2">
												<h4 class="lighter smaller">Browse Files</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-8">
													<div id="tree2" class="tree"></div>
												</div>
											</div>
										</div>
									</div>
							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

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

		<script src="<?php echo base_url();?>assets/js/fuelux/data/fuelux.tree-sampledata.js"></script>
		<script src="<?php echo base_url();?>assets/js/fuelux/fuelux.tree.min.js"></script>

		<!-- ace scripts -->

		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
		
		</script>
		
		<script type="text/javascript">
		var data_for_tree;
		
		jQuery(function($){			
		
		data_for_tree = function(){
		$( "<?php echo site_url();?>aws/get_files" , function( data ) {						
		return data;		
				});
		};
		alert(data_for_tree);
		$('#tree2').ace_tree({
			/*dataSource: new DataSourceTree({data: 
				{'for-sale' : {name: 'For Sale', type: 'folder'}	,
				'vehicles' : {name: 'Vehicles', type: 'folder'}	,
				'rentals' : {name: 'Rentals', type: 'folder'}	,
				'real-estate' : {name: 'Real Estate', type: 'folder'}	,
				'pets' : {name: 'Pets', type: 'folder'}	,
				'tickets' : {name: 'Tickets', type: 'item'}	,
				'services' : {name: 'Services', type: 'item'}	,
				'personals' : {name: 'Personals', type: 'item'}}})
			,*/
			dataSource: new DataSourceTree({data: 
				{'for-sale' : {name: 'For Sale', type: 'folder'}	,
				'vehicles' : {name: 'Vehicles', type: 'folder'}	,
				'rentals' : {name: 'Rentals', type: 'folder'}	,
				'real-estate' : {name: 'Real Estate', type: 'folder'}	,
				'pets' : {name: 'Pets', type: 'folder'}	,
				'tickets' : {name: 'Tickets', type: 'item'}	,
				'services' : {name: 'Services', type: 'item'}	,
				'personals' : {name: 'Personals', type: 'item'}}})
			,
			//dataSource: new DataSourceTree(data_for_tree),
			loadingHTML:'<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
			'open-icon' : 'icon-folder-open',
			'close-icon' : 'icon-folder-close',
			'selectable' : false,
			'selected-icon' : null,
			'unselected-icon' : null
		});
			
		/**
		$('#tree1').on('loaded', function (evt, data) {
		});

		$('#tree1').on('opened', function (evt, data) {
		});

		$('#tree1').on('closed', function (evt, data) {
		});

		$('#tree1').on('selected', function (evt, data) {
		});
		*/
		});
		</script>