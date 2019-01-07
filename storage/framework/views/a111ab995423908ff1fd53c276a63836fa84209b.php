<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Inisiation Program Pengadaan</h2>
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
                <strong>Inisiation</strong>
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
                    <li class="">
                        <a href="#tab_content2" data-toggle="tab">Input</a>
                    </li>
                    <li class="active">
                      <a href="#tab_content4" data-toggle="tab">Daftar</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab_content2" class="tab-pane">
                        <div class="panel-body">
                          <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                       <select class="form-control prjctname">
                                             <option value="">COMPLAINCE RISK MGNT & GA</option>
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
                               <label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" id="emp-no">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2 col-sm-6 col-xs-12">Nama Pengadaan</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" class="form-control Nama_pengadaan" id="Nama_pengadaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Nilai Estemasi - Jenis Anggaran</label>
                                   <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="emp-no">
                                  </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <select class="form-control prjctname">
                                      <option value="">EXPLOTASI OPEX</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Pola Pengadaan</label>
              	                 <div class="col-md-6 col-sm-6 col-xs-12">
                                   <select class="form-control prjctname">
                                        <option value="">Penerbitan SP</option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-sm-9 col-xs-12 col-md-9">     
                                    <button id="btn-input-emp" class="btn btn-success pull-right">save</button>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="tab_content4" class="tab-pane active">
                  <div class="panel-body">
                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-6 col-xs-12"></label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                      </div>
                                </div>
                                    <table class="mandaysTable_view table table-bordered table-responsive table-hover">
                                      <thead>
                                        <tr>
                                          <th class ="table-head" style="text-align: center">No</th>
                                          <th class ="table-head" style="text-align: center">Nama Pengadaan</th>
                                          <th class ="table-head" style="text-align: center">Pola Pengadaan</th>
                                          <th class ="table-head" style="text-align: center">Tanggal</th>  
                                          <th class ="table-head" style="text-align: center">Action</th>  
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                      <td><center><?php echo e($datas->id_ord); ?></center></td>
                                        <td><?php echo e($datas->Nama_pengadaan); ?></td>
                                        <td><?php echo e($datas->Pola_pengadaan); ?></td>
                                        <td><?php echo e($datas->Tanggal); ?></td>
                                      <td>
                                        <center>
                                        <div class="input-group">
                                              <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="<?php echo e($datas->id_ord); ?>*<?php echo e($datas->Nama_pengadaan); ?>">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
                                              <button type="button" class="btn btn-danger button_delete_project" id="delete_grup"value="">Delete<i class="fa fa-close"></i> </button>
                                          </div>
                                          </center>
                                        </td>
                                      </tr>
                                      <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content animated bounceInRight">
                                                <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLabel">Edit Inisiation</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="form-horizontal form-label-left">    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Direktorat - Unit Bisnis</label>
                                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                                               <select class="form-control prjctname" disabled="disabled">
                                                                     <option value="">COMPLAINCE RISK MGNT & GA</option>
                                                               </select>
                                                          </div>
                                                      <div class="col-md-2 col-sm-6 col-xs-12">
                                                          <select class="form-control prjctname" disabled="disabled">
                                                               <option value="">Supply center</option>
                                                          </select>
                                                     </div>
                                                </div>
                                              <div class="form-group">
                                                      <label class="control-label col-md-4 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                           <select class="form-control prjctname" disabled="disabled">
                                                                <option value="">Procurument</option>
                                                           </select>        
                                                      </div>
                                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                                      <select class="form-control prjctname" disabled="disabled">
                                                          <option value="">Tahun</option>
                                                          <?php $__currentLoopData = $t_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <option value="<?php echo e($list->TAHUN_ID); ?>"><?php echo e($list->TAHUN); ?></option>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                 </div>
                                            </div>
                                                <div class="form-group">
                                                      <label class="control-label col-md-4 col-sm-6 col-xs-12">Paket Pengadaan</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" class="form-control" id="emp-no" readonly="readonly">
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Nama Pengadaan</label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                          <input type="hidden" class="form-control id_ord" id="id_ord">
                                                          <input type="text" class="form-control Nama_pengadaanedit" id="Nama_pengadaanedit">
                                                        </div>
                                                    </div>
                                                <div class="form-group"> 
                                                    <label class="control-label col-md-4 col-sm-6 col-xs-12">Nilai Estemasi - Jenis Anggaran</label>
                                                      <div class="col-md-4 col-sm-6 col-xs-12" >
                                                        <input type="text" class="form-control" id="emp-no" readonly="readonly">
                                                      </div>
                                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                                      <select class="form-control prjctname" disabled="disabled">
                                                          <option value="">EXPLOTASI OPEX</option>
                                                      </select>
                                                  </div>
                                              </div>
                                                  <div class="form-group">
                                                     <label class="control-label col-md-4 col-sm-6 col-xs-12">Pola Pengadaan</label>
                                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                                         <select class="form-control prjctname">
                                                              <option value=""><?php echo e($datas->Pola_pengadaan); ?></option>
                                                         </select>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <button class="btn btn-success pull-right btn-edit-inisiasi">Update</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers : {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
            $('.button_edit').click(function(){
                var splt = $(this).val().split('*');
                $(".id_ord").val(splt[0]);
                $(".Nama_pengadaanedit").val(splt[1]);
                $('#modal_edit').modal("show");

            });
             $('.btn-edit-inisiasi').click(function(){
                var String_id_ord = $(".id_ord").val();; 
                var op = "";
                var String_Nama_pengadaan = $('.Nama_pengadaanedit').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/inisiasi/edit',
                    data  : {'id_ord':String_id_ord,'Nama_pengadaan':String_Nama_pengadaan,_token: '<?php echo e(csrf_token()); ?>'},
                    dataType: 'json',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    success:function(r){
                    setTimeout(function(){// wait for 5 secs(2)
                        location.reload(true); // then reload the page.(3)
                      }, 1000);
                        $('#modal_edit').modal('hide');
                        $("#error2").html(r.msg);
                        $('#myModal2').modal("show");
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
                //alert("hai");
               //console.log(data);
            });
        });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>