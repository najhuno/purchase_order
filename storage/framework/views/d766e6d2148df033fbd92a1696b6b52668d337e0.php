<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>List Proggres Monitoring</h2>
        </div>
    <hr>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li>
                <a>Vendor Monitoring</a>
            </li>
          <li class="active">
                <strong>Monitoring</strong>
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
              			<h5>Monitoring</h5>
              			<div class="ibox-content">
              				<div class="panel-body">
              					<div class="form-horizontal form-label-left">
              						<div class="form-group">
              							<label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Bisnis</label>
              							<div class="col-md-4 col-sm-6 col-xs-12">
              								<select class="form-control prjctname">
              									<option value="">Dept.Complaince Risk Mgt</option>
              								</select>
              							</div>
              							<div class="col-md-2 col-sm-6 col-xs-12">
              								<select class="form-control prjctname">
              									<option value="">Supply center</option>
              								</select>
              							</div>
              						</div>
              						<div class="form-group">
              							<label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
              							<div class="col-md-4 col-sm-6 col-xs-12">
              								<select class="form-control prjctname">
              									<option value="">OPEX PROCURUMENT</option>
              								</select>
              							</div>
              							<div class="col-md-2 col-sm-6 col-xs-12">
              								<select class="form-control prjctname">
              									<option value="">Tahun</option>
              									<?php $__currentLoopData = $Id_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              									<option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
              								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              							</select>
              						</div>
              					</div>
              					<div class="form-group">
              						<label class="control-label col-md-2 col-sm-6 col-xs-12">Jenis Anggaran</label>
              						<div class="col-md-6 col-sm-6 col-xs-12">
              							<select class="form-control prjctname">
              								<option value="">Exploitasi OPEX</option>
							       	</select>
							       </div>
							  </div>
							  <div class="form-group">
							  	<label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
							  	<div class="col-md-6 col-sm-6 col-xs-12">
							  		<select class="form-control prjctname">
							  			<option value="">Jasa Pembangunan Toll</option>
							  		</select>
							  	</div>
							  </div>
							  <div class="form-group">
							  	<label class="control-label col-md-2 col-sm-6 col-xs-12">Pencarian</label>
							  	<div class="col-md-4 col-sm-6 col-xs-12">
							  		<input type="text" class="form-control" id="emp-name">
							  	</div>
							  	<div class="col-sm-1 pull-left">
							  		<button id="" class="btn btn-primary pull-right">Cari</button>
							  	</div>
							  </div>
							  <div class="x-content">
							  	<table class="mandaysTable_view table table-bordered table-responsive table-hover">
							  		<thead>
							  			<tr>
							  				<th class ="table-head" style="text-align: center">No</th>
											<th class ="table-head" style="text-align: center">Proggres Kerjaan</th>
											<th class ="table-head" style="text-align: center">Proggres</th>	
											<th class ="table-head" style="text-align: center">Start</th>
											<th class ="table-head" style="text-align: center">End</th>	
										</tr>
									</thead>
										<tbody>
											<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><center><?php echo e($datas->id_monitor); ?></center></td>
												<td><?php echo e($datas->Proggres_kerjaan); ?></td>
												<td><?php echo e($datas->Proggres); ?></td>
												<td><?php echo e($datas->Start); ?></td>
												<td><?php echo e($datas->End); ?></td>
											</tr>
										</tbody>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>