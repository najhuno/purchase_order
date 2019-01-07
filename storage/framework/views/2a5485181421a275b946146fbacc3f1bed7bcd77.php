<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Approval</h2>
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
                <strong>Approval</strong>
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
                  <h5>Approval</h5>
                  <div class="ibox-content">
                  	<div class="panel-body">
					<div class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Nama mitra</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="nama-projek">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Product</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="nama-projek">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Kategori</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
					             <select id="rolename" class="form-control col-sm-4">
						             <option value="">combobox</option>
					            </select>
							</div>
						</div>
				        <div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Tahun</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<select id="unitname" class="form-control">
									<option value="">Tahun</option>
									<?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-6 col-xs-12">Harga Barang</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control hasDatepicker" id="finishdate">
							</div>
						</div>
						<div class="form-group">
					 		<label class="control-label col-md-2 col-sm-6 col-xs-12">Harga Product</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control hasDatepicker" id="finishdate">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-6 col-xs-12">Status aproval :</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
						     		<input type="radio" id="contactChoice1"name="contact" value="setuju">
								   	<label for="contactChoice1">Setuju</label>
								   	<input type="radio" id="contactChoice2"name="contact" value="tidak setuju">
								    <label for="contactChoice2">Tidak Setuju</label>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2 col-sm-6 col-xs-12">Komentar</label>         
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea  class="form-control" id="jabatan-pegawai" style="resize: none;"></textarea>             
									</div>
								</div>
						         <div class="form-group">
						            <div class="col-sm-3 pull-left">
							            <button id="btn-input-emp" class="btn btn-success pull-right">save</button>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>