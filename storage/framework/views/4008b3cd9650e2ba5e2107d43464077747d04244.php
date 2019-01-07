    

<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Manage Blacklist</h2>
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
                <strong>Blacklist</strong>
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
                        <a href="#tab_content2" data-toggle="tab">View</a>
                    </li>
                    <li class="">
                        <a href="#tab_content3" data-toggle="tab">Input</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab_content2" class="tab-pane active">
                        <div class="panel-body">
                            <div class="form-horizontal form-label-left">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-6 col-xs-12"></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
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
                            <div class="table-responsive">
                                <table class="mandaysTable_view table table-bordered table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th class ="table-head" style="text-align: center">No</th>
                                            <th class ="table-head" style="text-align: center">Vendor</th>
                                            <th class ="table-head" style="text-align: center">Reason</th>
                                            <th class ="table-head" style="text-align: center">Start Blacklist Date</th>    
                                            <th class ="table-head" style="text-align: center">End Blacklist Date</th>
                                            <th class ="table-head" style="text-align: center">Evidence</th>
                                            <th class ="table-head" style="text-align: center">Status</th>
                                            <th class ="table-head" style="text-align: center">Action</th>  
                                        </tr>
                                    </thead>
                                    <body>
                                        <?php $__currentLoopData = $vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><center><?php echo e($vendors->id_vdr); ?></center></td>
                                            <td><?php echo e($vendors->Vendor); ?></td>
                                            <td><?php echo e($vendors->Reason); ?></td>
                                            <td><?php echo e($vendors->Start); ?></td>
                                            <td><?php echo e($vendors->End); ?></td>
                                            <td><?php echo e($vendors->Evidence); ?></td>
                                            <td><?php echo e($vendors->Status); ?></td>
                                            <td>
                                                <div class="input-group">
                                                    <center>
                                                        <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="<?php echo e($vendors->id_vdr); ?>*<?php echo e($vendors->Reason); ?>">Edit<i class="fa fa-fw fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger delete_black" id="btn_delete_black"value="<?php echo e($vendors->id_vdr); ?>*<?php echo e($vendors->Vendor); ?>">Delete<i class="fa fa-close"></i> </button>
                                                    </center>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                    <h2 class="modal-title" id="exampleModalLabel">Edit Approve Blacklist</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-horizontal"><?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor Specialize</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <select class="form-control prjctname" readonly="readonly">
                                                                    <option value=""><?php echo e($vendors->spesifikasi_vdr); ?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor Category</label>
                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select class="form-control prjctname" readonly="readonly">
                                                                <option><?php echo e($vendors->Vendor); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor Name</label>
                                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" readonly="readonly" class="form-control vdr_name" id="vdr_name" value="<?php echo e($vendors->Vendor); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Start Date</label>
                                                        <div class="col-md-6 col-sm-4 col-xs-12">
                                                            <div class="input-group date" id="datetimepicker1">
                                                                <input type="date" readonly="readonly" class="form-control" value="<?php echo e($vendors->Start); ?>">
                                                              <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                              </span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">End Date</label>
                                                       <div class="col-md-6 col-sm-4 col-xs-12">
                                                            <div class="input-group date" id="datetimepicker1">
                                                                <input type="date" readonly="readonly" class="form-control" value="<?php echo e($vendors->End); ?>">
                                                          <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                
                                                        
                                            <div class="form-group">
                                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Evidence 1</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" readonly="readonly" class="form-control" value="<?php echo e($vendors->Evidence); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Status aproval</label>
                                                <div class="col-md-8 col-sm-10 col-xs-12">
                                                    <input type="radio" id="Choice1"name="contact" value="<?php echo e($vendors->Status); ?>">Reject
                                                    <input type="radio" id="Choice2"name="contact" value="<?php echo e($vendors->Status); ?>">Approved<br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Notes For Approval</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="hidden" class="form-control id_vdr" id="id_vdr">
                                                    <textarea  class="form-control Reason" id="Reason" style="resize: none;"><?php echo e($vendors->Reason); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-success pull-right btn-edit-blacklist">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </body>
                </table>
            </div>
        </div>
    </div>
    <div id="tab_content3" class="tab-pane">
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Vendor Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control prjctname">
                                <option value="">vendor category's list</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Vendor Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control prjctname">
                                <option value="">vendor name's list</option>
                            </select>
                        </div>
                   </div>
                   <div class="form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12">Blacklist Date</label>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="input-group date1" id="date1">
                                <input type="date" class="form-control">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="input-group date2" id="date2">
                                    <input type="date" class="form-control">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Reason</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="form-control Reason" id="Reason" style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Evidence</label>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control Evidence" id="Evidence">
                                </div>
                                <div class="col-md-1">
                                    <button id="btn-input-emp" class="btn btn-success pull-right">Browse</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-6 col-xs-12"></label>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="form-control" id="Reason" style="resize: none;"></textarea>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                          <div class="col-sm-6">
                                      </div>
                                      <div class="col-sm-2">
                                        <button id="insert" class="btn btn-success pull-right">Simpan</button>
                                      </div>
                                  </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Deletelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2> Apakah anda yakin akan menghapus <Label  class="vdr_name" name="vdr_name" id="vdr_name" ></Label>  ? </h2>
                <input type="hidden" name="vdr_name" class="vdr_name" id="vdr_name" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
                <button class="btn btn-success pull-right btn_delete_black" id="btn_delete_black" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
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
                $(".id_vdr").val(splt[0]);
                $(".Reason").val(splt[1]);
                $('#modal_edit').modal("show");

            });
            $('.delete_black').click(function(){
               var splt = $(this).val().split('*');
               $("#id_vendor").val(splt[0]);
               $("#vdr_name").val(splt[0]);
               //yang di hapus ya itu nantinya adalah ikut (id_vendor)
                //kalau pakai titik berarti class jika pagar berarti id
                //.val().split('*'); adalah untuk split atau memotong data dari inputan (btn/teks bok s dan lain2)
                //.val(splt[0]); adalah nama variabel dan urutan data yang di potong dalam bentuk array
                //.val(splt[1]); adalah hasil potomgan berbentuk array
               $('#Deletelist').modal('show');
            });

            $('.btn-edit-blacklist').click(function(){
                var String_id_vdr = $(".id_vdr").val();; 
                var op = "";
                var String_Reason = $('.Reason').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/black/edit',
                    data  : {'id_vdr':String_id_vdr,'Reason':String_Reason,_token: '<?php echo e(csrf_token()); ?>'},
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
            });
            $('.btn_delete_black').click(function(){
                    var id_vdr   = $(".id_vdr").val();
                    
                    var val = {'id_vdr' : id_vdr, _token :'<?php echo e(csrf_token()); ?>'};  
                    //jadi grname sama grdes akan di simpan atau masuk di var val atas ini
                    console.log(val);
                      $.ajax({
                      url : baseUrl +'/black/delete',
                      //memanggil di url harus sama dengan yang di routes atau web.php
                      type: 'POST',
                      //type harus sama dengan yang di web atau routes
                      data: val,      
                      dataType: 'json',
                      beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                      },
                      success:function(r){
                        $('#Deletelist').modal('hide');
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                          }, 1000);
                           $("#error2").html(r.msg);
                          $('#myModal2').modal("show");
                          //setTimeout adalah waktu saat mengimput              
                        },
                        complete: function(){
                         $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            });
            $('#btn-search_black').click(function(){

                var vcategory   = $("#search_black").val();
                var vname       = $("#vname").val();
                var stardate    = $(".datetimepicker1").val();
                var Reason      = $(".Reason").val();
                var evidence    = $(".evidence").val();
                var val         = {'search_black': vcategory, 'vname' : vname,'datetimepicker1': datetimepicker1, 'Reason' : Reason, 'evidence' : evidence, _token :'<?php echo e(csrf_token()); ?>'};  
                {
                    $("#error1").html("Your Data is not complete!");
                    $('#myModal1').modal("show");
                }
                        $.ajax({
                            url : baseUrl +'/black/search',
                            type: 'POST',
                            data: val,      
                            dataType: 'json',
                            success:function(r)
                            {
                                var t = '';
                                var no = 1;
                                var tn;
                                $('.t_list tr').remove();
                                //nama class nya adalah t_pencarian yang ada di <tr> blade
                                // jadi di remove dulu
                                $.each(r.content, function(k, v){
                                    console.log(v.Vendor);
                                    t += '<tr>';
                                    t += '<td style="text-align:center">'+no+'</td>';
                                    t += '<td>' + v.Vendor + '</td>';
                                    t += '<td>' + v.Reason + '</td>';
                                    t += '<td>' + v.Start + '</td>';
                                    t += '<td>' + v.End + '</td>';
                                    t += '<td>' ;
                                    t += '<div class="input-group">';
                                    t += '<span class="edit_group"><a href="<?php echo e(url('edit_jobs')); ?>"><button type="button" class="btn btn-block btn-warning">Edit <i class="fa fa-edit"></i></button></a> </span>';
                                    t +='<button  type="button" class="btn btn-primary button_delete_project" id="delete_grup">Delete<i class="fa fa-close"></i> </button>';      
                                    t += '</div>';
                                    t += '</td>' ;
                                    t += '</tr>';
                                });
                                $('.t_list').append(t); 
                            },
                            complete: function(){
                            $('.ajax-loader').css("visibility", "hidden");
                            }
                        });
                    });
        });
    </script>
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>