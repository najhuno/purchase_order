<?php $__env->startSection('content'); ?>

<style>
	#DataTables_Table_0_info{
		display: none;
	}
</style>
<div class="" role="tabpanel" data-example-id="togglable-tabs">
	<ul id="myTab" class="nav nav-tabs col-md-12 col-sm-4 col-xs-12" role="tablist">
		<li role="presentation" class="">
			<a href="#tab_content2" id="mandays-tab" role="tab" data-toggle="tab" aria-expanded="true">View</a>
		</li>
		<li role="presentation" class="">
			<a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Input</a>
		</li>
	</ul>

	<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
			<br>
			<div class="col-md-12 col-sm-4 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<ul class="nav navbar-right panel_toolbox"></ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						
							
								<table id="mandaysTable" class="table table-striped table-bordered">
									<thead>
										<tr>
											
										</tr>
									</thead>
								</table>
					
					</div>
				</div>
			</div>
		</div>

		<!-- hostoryModal -->
		<div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="historyModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="historyModalLabel">Timeline History</h4>
					</div>
					<div class="modal-body" style="height: 250px; overflow-y: auto;">...</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">      
				            <h2>Group</h2>    
				            <ul class="nav navbar-right panel_toolbox">   
				            </ul>
				            <div class="clearfix"></div><br>
					            <div class="form-horizontal form-label-left">
					              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						              <div class="form-group">
						                <label class="control-label col-md-1 col-sm-3 col-xs-12">Name</label>
							                <div class="col-md-9 col-sm-9 col-xs-12">
							                  <input type="text" class="form-control" id="tb_holidays_ket">
							                </div>
							                  <div class="form-horizontal form-label-right">
							                    <button class="btn btn-success  btn-search-mandays">Search</button>
							                  </div>    

						                  <div class="form-group">
						                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-9">     
						                    </div>
						                  </div>
						              </div> 
					            </div>
				          </div>
					<div class="x-content">
						<table class="mandaysTable_view table table-bordered table-responsive table-hover">
							<thead>
								<tr>
									<th class ="table-head" style="text-align: center">No</th>
									<th class ="table-head" style="text-align: center">Group name</th>
									<th class ="table-head" style="text-align: center">Group descriptions</th>	
									<th class ="table-head" style="text-align: center">Action</th>	
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
			<br>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">    	
						<h2>Group information table</h2>
						<ul class="nav navbar-right panel_toolbox">
						</ul>
						<div class="clearfix"></div>
					</div>

					<div class="x-content">
						<div class="form-horizontal form-label-left">		
							<fieldset>		
								<div class="form-group">
									<label class="col-lg-2 control-label">Group name</label>
									<div class="col-lg-10">
							            <input type="text" class="form-control" id="tb_holidays_ket">
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-2 control-label">Group descriptions</label>         
									<div class="col-lg-10">
										<textarea  class="form-control" id="jabatan-pegawai"></textarea>             
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button id="btn-input-daysProjek" class="btn btn-primary btn-success">Save</button>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>