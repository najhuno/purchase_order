<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Activity Basline</h2>
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
                <strong>Planning</strong>
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
                        <a href="#tab_content2" data-toggle="tab">Input Activity</a>
                    </li>
                    <li class="">
                        <a href="#tab_content3" data-toggle="tab">Daftar Activity</a>
                    </li>
                    <li class="">
                        <a href="#tab_content4" data-toggle="tab">Input Justifikasi Kebutuhan</a>
                    </li>
                    <li class="">
                        <a href="#tab_content5" data-toggle="tab">Assigment Process Project</a>
                    </li>
                </ul>
                <div class="tab-content">
                  <div id="tab_content2" class="tab-pane active">
                    <div class="panel-body">
                      <div class="form-horizontal form-label-left">
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <select class="form-control prjctname">
                                <option value="">Dept.Complience Risk</option>
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
                                        <option value="">Procurument</option>
                                   </select>        
                                </div>
                             <div class="col-md-2 col-sm-6 col-xs-12">
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
                             <div class="col-md-6 col-sm-6 col-xs-12">
                               <select class="form-control prjctname">
                                  <option value="">Explotasi Opex</option>
                              </select>  
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Program Pengadaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control prjctname">
                                <option value="">Asas Pembangunan jalan Toll</option>
                              </select>  
                          </div>
                     </div>
                     <div class="x-content">
                        <table class="table table-bordered">
            				      <thead>
            				        <tr>
                                <th class ="table-head" style="text-align: center">No</th>
                                <th class ="table-head" style="text-align: center">Nama Kegiatan</th>
                                <th class ="table-head" style="text-align: center">Bobot</th>
                                <th class ="table-head" style="text-align: center">Durasi</th>  
                                <th class ="table-head" style="text-align: center">Start</th>
                                <th class ="table-head" style="text-align: center">Finish</th>  
                                <th class ="table-head" style="text-align: center">Action</th>    
            				        </tr>
            				          <td style="text-align:center">1</td>
            				          <td style="text-align:center">
                                  <div class="col-md-8">
                							       <input type="text" class="form-control" id="emp-name">
                							   </div>
                              </td>
            							 <td style="text-align:center">
                                  <div class="col-md-3">
            							          <input type="text" class="form-control" id="emp-name">
            							        </div>
                              </td>
            							 <td style="text-align:center">
                                  <div class="col-md-3">
            							          <input type="text" class="form-control" id="emp-name">
            							        </div>
                              </td>
            							 <td style="text-align:center">
                                <div class="col-sm-6">
            							            <div class="form-group">
            							                <div class="input-group date" id="datetimepicker1">
            							                    <input type="date" class="form-control">
            							                    <span class="input-group-addon">
            							                        <span class="glyphicon glyphicon-calendar"></span>
            							                    </span>
            							                </div>
            							            </div>
            							        </div>
                                </td>
            							   <td style="text-align:center">
                                  <div class="col-md-2 col-sm-6 col-xs-12">
            							            <div class="form-group">
            							                <div class="input-group date" id="datetimepicker1">
            							                    <input type="date" class="form-control">
            							                    <span class="input-group-addon">
            							                        <span class="glyphicon glyphicon-calendar"></span>
            							                    </span>
            							                </div>
            							            </div>
            							        </div>
                                </td>
            							   <td style="text-align:center">
                                 
                                  <center>
                                    <button  type="button" class="btn btn-w-m btn-info" data-toggle="modal">Edit</button>
                                    <button  type="button" class="btn btn-w-m btn-info" data-toggle="modal">Delete</button>
                                    </center>
                                </td>
            				      </thead>
          				    </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab_content3" class="tab-pane">
            <div class="panel-body">
                <div class="form-horizontal form-label-left">    
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                             <select class="form-control prjctname">
                                   <option value="">Dept 1</option>
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
                                  <option value="">Procurument</option>
                             </select>        
                        </div>
                       <div class="col-md-2 col-sm-6 col-xs-12">
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
                           <div class="col-md-6 col-sm-6 col-xs-12">
                                 <select class="form-control prjctname">
                                    <option value="">Explotasi Opex</option>
                                </select>  
                          </div>
                    </div>
                     <div class="form-group">
				                 <label class="control-label col-md-2 col-sm-6 col-xs-12">Pencarian Paket Pengadaan</label>
          					        <div class="col-md-5 col-sm-6 col-xs-12">
          					          <input type="text" class="form-control" id="emp-name">
          					     </div>
      					        <div class="col-sm-1 pull-left">
      					            <button id="btn-input-emp" class="btn btn-success pull-right">Cari</button>
    					       </div>
					       </div>
                <div class="x-content">
                    <table class="mandaysTable_view table table-bordered table-responsive table-hover">
  				              <thead>
  				                  <tr>
    				                  <th class ="table-head" style="text-align: center">No</th>
    				                  <th class ="table-head" style="text-align: center">Paket Pengadaan</th>
    				                  <th class ="table-head" style="text-align: center">Pola Pengadaan</th>
    				                  <th class ="table-head" style="text-align: center">Start</th>
    				                  <th class ="table-head" style="text-align: center">Finish</th>  
    				                  <th class ="table-head" style="text-align: center">Progres</th>
                              <th class ="table-head" style="text-align: center">Action</th>    
    				                </tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center"></td>
                            <td style="text-align:center"></td>
                            <td></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">
                            <td>
                              <center>
                                  <button  type="button" class="btn btn-w-m btn-info" data-toggle="modal">Edit</button>
                                  <button  type="button" class="btn btn-w-m btn-info" data-toggle="modal">Delete</button>
                                </center>
                              </td>
                          </td>
				              </thead>
				          </table>
              </div>
				 </div>
  	</div>
</div>
<div id="tab_content4" class="tab-pane">
    <div class="panel-body">
        <div class="row">
            <div class="form-horizontal form-label-left">
               <div class="form-group">
                          <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                 <select class="form-control prjctname">
                                       <option value="">Dept.Complience Risk</option>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                 <select class="form-control prjctname">
                                      <option value="">Opex Procurument</option>
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
                              <label class="control-label col-md-2 col-sm-6 col-xs-12">Project-Jenis Anggaran</label>
                                 <div class="col-md-4 col-sm-6 col-xs-12">
                                      <select class="form-control prjctname">
                                          <option value="">Suply Center</option>
                                      </select>  
                                  </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12">
                                    <select class="form-control prjctname">
                                        <option value="">Explotasi Opex</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">No justifikasi - tgl Justifikasi</label>
                                   <div class="col-md-4 col-sm-6 col-xs-12">
                                      <input type="text" class="form-control" id="emp-name">
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
                              <label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Kegiatan</label>
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                   <input type="text" class="form-control" id="emp-email">
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-2 col-sm-6 col-xs-12">Keterangan lainnya</label>
                                    <div class="col-md-7 col-sm-6 col-xs-12">
                                     <input type="text" class="form-control" id="emp-name">
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-md-2 col-sm-6 col-xs-12">Diterima - Rencana kegiatan </label>
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="input-group date" id="datetimepicker1">
                                        <input type="date" class="form-control">
                                          <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                           <input type="text" class="form-control" id="emp-name">
                                       </div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-2 col-sm-6 col-xs-12">Pencarian Paket Pengadaan</label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text" class="form-control" id="emp-name">
                                           </div>
                                        <div class="col-sm-1 pull-left">
                                            <button id="btn-input-emp" class="btn btn-success pull-right">Browser</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                          <button id="btn-input-daysProjek" class="btn btn-primary btn-success">Tambah</button>
                                        </div>
                                   </div>    
                    						</div>
                    				</div>
                    		</div>
                    </div>
                    <div id="tab_content5" class="tab-pane">
                        <div class="panel-body">
                          <div class="row">
                              <div class="form-horizontal form-label-left">    
                                  <div class="form-group">
                                     <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                           <select class="form-control prjctname">
                                                 <option value="">Dept 1</option>
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
                                                <option value="">Procurument</option>
                                           </select>        
                                      </div>
                                   <div class="col-md-2 col-sm-6 col-xs-12">
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
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <select class="form-control prjctname">
                                            <option value="">Explotasi Opex</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <select class="form-control prjctname">
                                              <option value="">Pengadaan Jasa Konsultan Dan lat Alat Berat</option>
                                        </select>  
                                    </div>
                                </div>
                  				      <div class="form-group">
                    								<label class="control-label col-md-2 col-sm-6 col-xs-12">Progress</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                    										  <input type="text" class="form-control">
                    									</div>
                  								</div>
                    							<div class="form-group">
                                     <label class="control-label col-md-2 col-sm-6 col-xs-12">PIC</label>
                                       <div class="col-md-4 col-sm-6 col-xs-12">
                                           <select class="form-control prjctname">
                                              <option value="">[26227]Pradipta umar[johan agum]</option>
                                          </select>  
                                      </div>
                    			         </div>
                          						<table class="mandaysTable_view table table-bordered table-responsive table-hover">
													  <thead>
														<tr>
														  <th class ="table-head" style="text-align: center">No</th>
														  <th class ="table-head" style="text-align: center">Paket Pengadaan</th>
														  <th class ="table-head" style="text-align: center">Progres</th>
														  <th class ="table-head" style="text-align: center">PIC</th>
														  <th class ="table-head" style="text-align: center">Action</th>    
														</tr>
													  </thead>
												</table>
											<div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="col-sm-1 pull-right">
                                                        <button id="btn-input-emp" class="btn btn-primary pull-right">Batal</button>
                                                    </div>
                                                  <div class="col-sm-1 pull-right">
                                                      <button id="btn-input-emp" class="btn btn-primary pull-right">Simpan</button>
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
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>