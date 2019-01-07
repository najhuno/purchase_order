<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Aplikasi Data Actual</h2>
        </div>
    <hr>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li>
                <a>Order Management</a>
            </li>
          <li class="active">
                <strong>Executing</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab_contenta" data-toggle="tab">Daftar</a>
					</li>
					<li class="">
						<a href="#tab_contentb" data-toggle="tab">Detail</a>
					</li>
					<li class="">
						<a href="#tab_contentc" data-toggle="tab">Update</a>
					</li>
				</ul>
	<div class="tab-content">
		<div  id="tab_contenta" class="tab-pane active">
			<div class="panel-body">
			    <div class="form-horizontal form-label-left">
			    	<div class="form-group">
			    		 <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
					    	<div class="col-md-4 col-sm-6 col-xs-12">
							    <select class="form-control prjctname">
							        <option value="">COMPLAINCE RISK MGNT & GA</option>
							    </select>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12">
								<select class="form-control prjctname">
								    <option value="">Supply center</option>
								</select>
							</div>
			    		</div>
			    		<div class="form-group">
			    			<label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
			    			<div class="col-md-4 col-sm-6 col-xs-12">
								<select class="form-control prjctname">
							        <option value="">BIM</option>
							    </select>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12">
						      	<select class="form-control prjctname">
							        <option value="">Tahun</option>
							        <?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							        <option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
							        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						      	</select>
					      	</div>
			    		</div>
			    		<div class="form-group">
			    			<label class="control-label col-md-2 col-sm-6 col-xs-12">Jenis Anggaran</label>
					      	<div class="col-md-6 col-sm-9 col-xs-12">
						        <select class="form-control prjctname">
						          <option value="">Explotasi OPEX</option>
						        </select>
					        </div>
			    		</div>
			    		<div class="form-group">
			    			<label class="control-label col-md-2 col-sm-6 col-xs-12">Pelaksana Procurument</label>
					    	<div class="col-md-6 col-sm-9 col-xs-12">
						      	<select class="form-control prjctname">
						        	<option value="">OPEX proses 1</option>
						      	</select>
					      	</div>
			    		</div>
			    		<div class="x-content">
			    			<table class="mandaysTable_view table table-bordered table-responsive table-hover">
			    				<thead>
									<tr>
										<th class ="table-head" style="text-align: center">No</th>
										<th class ="table-head" style="text-align: center">Paket Pengadaan</th>
										<th class ="table-head" style="text-align: center">Pola Pengadaan</th>
										<th class ="table-head" style="text-align: center">Target</th>
										<th class ="table-head" style="text-align: center">Act Start</th>	
										<th class ="table-head" style="text-align: center">Act Finish</th>
										<th class ="table-head" style="text-align: center">Action</th>	
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<center>
												<button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
												<button type="button" class="btn btn-danger button_delete_project" id="delete_grup"value="">Delete<i class="fa fa-close"></i> </button>
									  		</center>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	<div id="tab_contentb" class="tab-pane" >
		<div class="panel-body">
				<div class="form-horizontal form-label-left">
					<div class="form-group">
			 			<label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
				 			<div class="col-md-3 col-sm-6 col-xs-12">
		 						<input type="text" class="form-control" id="emp-no">
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
		 						<input type="text" class="form-control" id="emp-no">
							</div>
			 			</div>
					 	<div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
					        	<div class="col-md-3 col-sm-6 col-xs-12">
							       <select class="form-control prjctname">
							            <option value="">Procurument</option>
							       </select>        
							  	</div>
								 <div class="col-md-3 col-sm-6 col-xs-12">
								      <select class="form-control prjctname">
								          <option value="">Tahun</option>
								          <?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								          <option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
						                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								      </select>
								 </div>
							</div>
							<div class="form-group">
							    <label class="control-label col-md-2 col-sm-6 col-xs-12">Jenis anggaran</label>
							        <div class="col-md-6 col-sm-6 col-xs-12">
							          	<select class="form-control prjctname">
						            		<option value="">Explotasi OPEX</option>
						       			</select>
							        </div>
						      	</div>
								<div class="form-group"> 
									<label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
								 	  <div class="col-md-6 col-sm-6 col-xs-12">
								   	   	<input type="text" class="form-control" id="emp-no">
								      </div>
							  	</div>
							  	<div class="x-content">
									<table class="mandaysTable_view table table-bordered table-responsive table-hover">
										<thead>
											<tr>
												<th class ="table-head" style="text-align: center">No</th>
												<th class ="table-head" style="text-align: center">Proses Procurument</th>
												<th class ="table-head" style="text-align: center">Bobot</th>
												<th class ="table-head" style="text-align: center">Plan Finish</th>	
												<th class ="table-head" style="text-align: center">Actual Start</th>
												<th class ="table-head" style="text-align: center">Actual Finish</th>
												<th class ="table-head" style="text-align: center">Keterangan</th>	
												<th class ="table_head" style="text-align: center">Action</th>
											</tr>
											 <td style="text-align:center">1</td>
											<td style="text-align: center;">
												<td>
												</td>
											</td>
											<td style="text-align:center"></td>
											<td style="text-align:center"></td>
											<td style="text-align:center"></td>

											<td style="text-align: center;">
												<td>
												<center>
													<button  type="button" class="btn btn-w-m btn-info" data-toggle="modal">Detail</button>
												  </center>
												</td>
											</td>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>	
<div id="tab_contentc" class="tab-pane fade">
	<div class="panel-body">
		<div class="form-horizontal form-label-left">
			<div class="form-group">
    			<label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
	        		<div class="col-md-3 col-sm-6 col-xs-12">
			     		<select class="form-control prjctname">
			          		<option value=""></option>
			    		</select>
	       			</div>
	        	<div class="col-md-3 col-sm-6 col-xs-12">
			     	<select class="form-control prjctname">
			           	<option value="">Supply center</option>
			     	</select>
			 	</div>
  			</div>
  			<div class="form-group">
		       		<label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
		       			<div class="col-md-3 col-sm-6 col-xs-12">
						    <select class="form-control prjctname">
						        <option value="">OPEX PROCURUMENT</option>
						    </select>
						</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<select class="form-control prjctname">
				          <option value="">Tahun</option>
				          <?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				          <option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
		                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		              </select>
		          </div>
		      </div>
		      <div class="form-group">
				    <label class="control-label col-md-2 col-sm-6 col-xs-12">Jenis anggaran</label>
				      	<div class="col-md-6 col-sm-6 col-xs-12">
				          	<select class="form-control prjctname">
			            		<option value="">Explotasi OPEX</option>
			       			</select>
				        </div>
			      	</div>
			      	<div class="form-group">
						<label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
				        <div class="col-md-6 col-sm-6 col-xs-12">
				          <input type="text" class="form-control" id="emp-no">
				      </div>
				  </div>
				  <div class="form-group">
						<label class="control-label col-md-2 col-sm-6 col-xs-12">Proses Procurument</label>
			        <div class="col-md-6 col-sm-6 col-xs-12">
			          <input type="text" class="form-control" id="emp-no">
			        </div>
			   </div>
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-6 col-xs-12">Tanggal Actual</label>
					<div class="col-md-3 col-sm-6 col-xs-12">
          				<div class="input-group date" id="datetimepicker1">
                      		<input type="date" class="form-control">
                      <span class="input-group-addon">
                          	<span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
               </div>
				<div class="col-md-3 col-sm-6 col-xs-12">
      				<div class="input-group date" id="datetimepicker1">
                  		<input type="date" class="form-control">
                  <span class="input-group-addon">
                      	<span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
           </div>
       </div>
		<div class="form-group">
			<label class="control-label col-md-2 col-sm-6 col-xs-12">Keterangan Poggress</label>         
				<div class="col-md-6 col-sm-6 col-xs-12">
					<textarea  class="form-control" id="Reason" style="resize: none"></textarea>
				</div>
			</div>
			<div class="form-group">
	            <label class="control-label col-md-2 col-sm-6 col-xs-12">File Attachment</label>
            	<div class="col-md-4 col-sm-6 col-xs-12">
		          <input type="text" class="form-control" id="emp-name">
		        </div>
		        <div class="col-sm-1 pull-left">
		            <button id="btn-input-emp" class="btn btn-success pull-right">Browse</button>
		        </div>
		       <div class="col-sm-1 pull-left">
		         <button id="btn-input-emp" class="btn btn-success pull-right">Delete</button>
	        </div>
	    </div>
	    <div class="form-group">
        <div class="col-sm-3 pull-left">
	            <button id="btn-input-emp" class="btn btn-success pull-right">Batal</button>
	        </div>
     <div class="col-sm-1 pull-left">
            <button id="btn-input-emp" class="btn btn-success pull-right">Simpan</button>
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