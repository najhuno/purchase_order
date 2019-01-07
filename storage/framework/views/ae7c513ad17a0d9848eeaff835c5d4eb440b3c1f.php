<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Input Approval</h2>
        </div>
		<hr>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li>
                <a>Catalog Management</a>
            </li>
        	<li class="active">
                <strong>Upload</strong>
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
               	<h5>Input</h5>
               	<div class="ibox-content">
	<div class="panel-body">
		<div class="form-horizontal form-label-left">
			<div class="form-group">
				<label class="control-label col-md-2 col-sm-6 col-xs-12">Kategori Product</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="emp_name" class="form-control emp_name" selected="">
							<option value="">furniture</option>
						</select>
							<input type="hidden" class="form-control empname" id="empname" readonly="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Product</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="email" class="form-control" id="emp-email">
							</div>
						</div>
						<div class="form-group">
							 <label class="control-label col-md-2 col-sm-6 col-xs-12">Harga Barang</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<select id="emp-role" class="form-control rolename">
										<option value="">Rp</option>
									</select>
								</div>
							<div class="col-md-4">
								<input type="email" class="form-control" id="emp-email">
							</div>
						</div>
						<div class="form-group">
							 <label class="control-label col-md-2 col-sm-6 col-xs-12">Harga Jasa</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<select id="year" class="form-control year">
										<option value="">Rp</option>
									</select>
								</div>
							<div class="col-md-4">
									<input type="email" class="form-control" id="emp-email">
								</div>
							</div>  
							<div class="form-group">
								 <label class="control-label col-md-2 col-sm-6 col-xs-12">Tahun Pembuatan</label>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<select id="emp_name" class="form-control emp_name" selected="">
												<option value="">Tahun</option>
				                                <?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                                <option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
				                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
										<input type="hidden" class="form-control empname" id="empname" readonly="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-6 col-xs-12">Spesifikasi Teknis</label>         
										<div class="col-md-6 col-sm-6 col-xs-12">
											<textarea  class="form-control" id="jabatan-pegawai" style="resize: none;"></textarea>           
										</div>
									</div>
									<div class="form-group">
								            <div class="col-sm-7 pull-left">
									            <button id="btn-input-emp" class="btn btn-success pull-right">simpan</button>
									        </div>
								     <div class="col-sm-1 pull-left">
								            <button id="btn-input-emp" class="btn btn-success pull-right">cancel</button>
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