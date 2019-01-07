<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Vendor Verification</h2>
        </div>
    <hr>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li>
                <a>Vendor Management</a>
            </li>
          <li class="active">
                <strong>Verification</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>Verifikasi</h5>
                  <div class="ibox-content">
                  	<div class="panel-body">
	                  	 <div class="form-horizontal form-label-left">
				       		<div class="form-group">
								<label class="control-label col-md-1 col-sm-4 col-xs-12">Pencarian</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									      <input type="text" class="form-control" id="emp-name">
									    </div>
									</div>
					      		<div class="form-group">
					      		 	<label class="control-label col-md-1 col-sm-4 col-xs-12">Status</label>
					          			<div class="col-md-5 col-sm-6 col-xs-12">
								             <select class="form-control prjctname">
									             <option value="">Select Status</option>
								            </select>
					         			</div>
						         	<div class="col-md-1 col-sm-4 col-xs-12">
						            	<button id="btn-input-emp" class="btn btn-success pull-right">Cari</button>
						        	</div>
						        </div>
						    <div class="form-group">
									<div class="col-md-9 col-sm-9 col-xs-12 col-md-9">     
									</div>
								</div>
							<div class="form-group">
								<div class="x-content">
									<table class="mandaysTable_view table table-bordered table-responsive table-hover">
										<thead>
											<tr>
												<th class ="table-head" style="text-align: center">No</th>
												<th class ="table-head" style="text-align: center">Nama Vendor</th>
												<th class ="table-head" style="text-align: center">Status</th>
												<th class ="table-head" style="text-align: center">Keterangan</th>	
												<th class ="table-head" style="text-align: center">Action</th>	
											</tr>
										</thead>
										<body>
											<tr>
                                            <td><center></center></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <center>
                                                <div class="input-group">
                                                        <button type="button" class="btn btn-info button_edit" data-toggle="modal" value="">Detail<i class="fa fa-fw fa-info"></i></button>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
										</body>
									</table>
								</div>
							</div>
						</div>
					</div>    
                </div>
             </div>
          </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>