<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Closing Pengadaan</h2>
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
                <strong>Closing</strong>
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
						<a href="#tab_content1" data-toggle="tab">Daftar</a>
					</li>
					<li class="">
						<a href="#tab_content2" data-toggle="tab">Input</a>
					</li>
				</ul>
				<div class="tab-content active">
					<div id="tab_content1" class="tab-pane active">
						<div class="panel-body">
					    	<div class="form-horizontal form-label-left">
							 	<div class="form-group">
						        	<label class="control-label col-md-1 col-sm-6 col-xs-12">Pencarian</label>
							        	<div class="control-label col-md-4 col-sm-6 col-xs-12">
							          		<input type="text" class="form-control search_clos" id="search_clos" placeholder="Search paket pengadaan....">
							        	</div>
								    <div class="control-label col-md-1 col-sm-3 col-xs-12">
							            <button class="btn btn-success btn-search-clos">Cari</button>
							        </div>
						      	</div>
						      	<div class="x-content">
									<table class="mandaysTable_view table table-bordered table-responsive table-hover">
									<thead>
										<tr>
											<th class ="table-head" style="text-align: center">No</th>
											<th class ="table-head" style="text-align: center">Paket Pengadaan</th>
											<th class ="table-head" style="text-align: center">Tanggal Closing</th>
											<th class ="table-head" style="text-align: center">Keterangan</th>	
											<th class ="table-head" style="text-align: center">Action</th>	
										</tr>
										 <tbody  class="t_pencarian">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                      <td><center><?php echo e($datas->id_closing); ?></center></td>
                                        <td><?php echo e($datas->paket_pengadaan); ?></td>
                                        <td><?php echo e($datas->tgl_closing); ?></td>
                                        <td><?php echo e($datas->keterangan); ?></td>
                                      <td>
                                        <center>
                                        <div class="input-group">
                                              <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="<?php echo e($datas->id_closing); ?>*<?php echo e($datas->paket_pengadaan); ?>*<?php echo e($datas->tgl_closing); ?>">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
                                              <button type="button" class="btn btn-danger delete_closing" id="btn_delete_closing"value="<?php echo e($datas->id_closing); ?>*<?php echo e($datas->paket_pengadaan); ?>">Delete<i class="fa fa-close"></i> </button>
                                          </div>
                                          </center>
                                        </td>
                                      </tr>
                                      <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content animated bounceInRight">
                                                <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLabel">Edit Closing</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="form-horizontal form-label-left">
												  <div class="form-group"> 
													<label class="control-label col-md-4 col-sm-4 col-xs-12">Paket Pengadaan</label>
												 	  <div class="col-md-6 col-sm-6 col-xs-12">
												 	  	<input type="hidden" class="form-control id_closing" id="id_closing">
												   	   	<input type="text" class="form-control pkt_pengadaan" id="pkt_pengadaan">
												      </div>
												  </div>
												  <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Tanggal Closing</label>
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control dateedit" id="dateedit">
                                                          <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
											    <div class="form-group">
											        <label class="control-label col-md-4 col-sm-4 col-xs-12">BAST</label>
												        <div class="col-md-4 col-sm-6 col-xs-12">
												          	<input type="text" class="form-control keterangan" id="keterangan" disabled="disabled" value="<?php echo e($datas->keterangan); ?>">
												        </div>
												        <div class="col-sm-1 pull-left">
												            <button id="btn-input-emp" class="btn btn-success pull-right">Browse</button>
												        </div>
												        <div class="col-sm-1 pull-left">
												            <button id="btn-input-emp" class="btn btn-success pull-right">Hapus</button>
												        </div>
											      </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <button class="btn btn-success pull-right btn-edit-closing">Update</button>
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
				<div id="tab_content2" class="tab-pane">
					<div class="panel-body">
						<div class="form-horizontal form-label-left">
				 		    <div class="form-group"> 
								<label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
							 	 <div class="col-md-6 col-sm-6 col-xs-12">
							   	   	<input type="text" class="form-control paket" id="paket">
							     </div>
							</div>
							  <div class="form-group"> 
								<label class="control-label col-md-2 col-sm-6 col-xs-12">Tanggal Closing</label>
							 	  <div class="col-md-6 col-sm-6 col-xs-12">
							   	   	<input type="date" class="form-control date1" id="date1">
							      </div>
							 </div>
						    <div class="form-group">
						        <label class="control-label col-md-2 col-sm-6 col-xs-12">BAST</label>
							        <div class="col-md-5 col-sm-6 col-xs-12">
							          	<input type="text" class="form-control" id="emp-name">
							        </div>
							       <div class="col-sm-1 pull-left">
							          <button id="btn-input-emp" class="btn btn-success pull-right">Browse</button>
							     </div>
						    </div>
							<div class="form-group">
					            <div class="col-sm-3 pull-left">
							            <button type="button" id="close" class="btn btn-success pull-right">Batal</button>
							        </div>
						     <div class="col-sm-1 pull-left">
						            <button type="button" id="btn-input-closing" class="btn btn-success pull-right">Simpan</button>
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
<div class="modal fade" id="Deletelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-10" role="document">
        <div class="modal-content">
            <div class="modal-body">
                 <center>
                <h3> Apakah anda yakin akan menghapus <Label  class="nomer" name="nomer" id="nomer" ></Label>  ? </h3>
                 </center>
                <input type="hidden" name="id_closing" class="id_closing" id="id_closing" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
                <button class="btn btn-success pull-right btn_delete_closing" id="btn_delete_closing" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
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
                $(".id_closing").val(splt[0]);
                $(".pkt_pengadaan").val(splt[1]);
                $(".dateedit").val(splt[2]);
                $('#modal_edit').modal("show");

            });
            $('.delete_closing').click(function(){
               var splt = $(this).val().split('*');
               $("#id_closing").val(splt[0]);
               $(".nomer").text(splt[0]);
               $('#Deletelist').modal('show');
            });

            $('#btn-input-closing').click(function(){
                var paket_pengadaan = $('#paket').val();
                var tgl_closing = $('#date1').val();

                if( paket_pengadaan == "" || tgl_closing == ""){
                    $("#error1").html("Your Data is not complete!");
                    $('#myModal1').modal("show");
                }else{

                   $.ajax({
                        url : baseUrl +'/closing/input',
                        type: 'POST',
                        data: {'paket': paket, 'date' : date1,_token: '<?php echo e(csrf_token()); ?>'},
                        dataType: 'json',
                        success:function(r){
                            if(r.msg == 'Success Insert'){
                              $("#error2").html(r.msg);
                              $('#myModal2').modal("show");
                              setTimeout(function(){// wait for 5 secs(2)
                                location.reload(); // then reload the page.(3)
                              }, 1000); 
                            }
                        }
                    });
                }
            })


            $('.btn-edit-closing').click(function(){
                var String_id_closing = $(".id_closing").val();; 
                var op = "";
                var String_paket_pengadaan = $('.pkt_pengadaan').val();
                var String_tgl_closing = $('.dateedit').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/closing/edit',
                    data  : {'id_closing':String_id_closing,'paket_pengadaan':String_paket_pengadaan,'date1':String_tgl_closing,_token: '<?php echo e(csrf_token()); ?>'},
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
            $('.btn_delete_closing').click(function(){
                    var paket_pengadaan   = $(".paket").val();
                    
                    var val = {'paket' : id_closing, _token :'<?php echo e(csrf_token()); ?>'};  
                    
                      $.ajax({
                      url : baseUrl +'/closing/delete',
                      type: 'POST',
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
            $('.btn-search-clos').click(function(){
            			var paket_pengadaan = $('.search_clos').val();
				        //var grdes  = $('.grdes').val();

				       var val = {'search_clos': paket_pengadaan, _token :'<?php echo e(csrf_token()); ?>'};  
				        {
				            $("#error1").html("Your Data is not complete!");
				            $('#myModal1').modal("show");
				          }
				         // console.log(paket_pengadaan);
				            $.ajax({
				                url : baseUrl +'/closing/search',
				                type: 'POST',
				                data: val,      
				                dataType: 'json',
				                success:function(r)
				                {
				                    var t = '';
				                    var no = 1;
				                    var tn;
				                    $('.t_pencarian tr').remove();
				                    //nama class nya adalah t_pencarian yang ada di <tr> blade
				                    // jadi di remove dulu
				                    $.each(r.content, function(k, v){
				                        
				                        t += '<tr>';
				                        t += '<td style="text-align:center">'+no+'</td>';
				                        t += '<td>' + v.paket_pengadaan + '</td>';
				                        t += '<td>' + v.tgl_closing + '</td>';
				                       // t += '<td>' + v.keterangan + '</td>';
				                        t += '<td>' ;
				                         t += '<center>';
				                        t += '<div class="input-group">';
				                       
				                        t += '<button type="button" class="btn btn-warning btn_edit" data-toggle="modal" value="'+v.id_closing+'*'+v.paket_pengadaan+'*'+v.tgl_closing+'">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp';

				                        t +='<button type="button" class="btn btn-danger btn_delete1" id="delete_grup"value="'+v.nama_group+'*'+v.des_group+'">Delete<i class="fa fa-close"></i> </button>';
				                              
				                        t += '</div>';
				                         t += '</center>';
				                        t += '</td>' ;
				                        t += '</tr>';
				                    });
				                     $('.t_pencarian').append(t); 
				                },
				                complete: function(){
				                        $('.ajax-loader').css("visibility", "hidden");

				                        $('.button_edit').click(function(){
							                var splt = $(this).val().split('*');
							                $(".id_closing").val(splt[0]);
							                $(".pkt_pengadaan").val(splt[1]);
							                $(".dateedit").val(splt[2]);
							                $('#modal_edit').modal("show");

							            });
				                        $('.btn_delete1').click(function(){
				                        var splt = $(this).val().split('*');
				                           $("#grname").val(splt[0]);
									        $(".grname").text(splt[0]);
									        //text nanti akan munculnya teks
									        //kalau pakai titik berarti class jika pagar berarti id
									        $("#grdes").val(splt[1]);
									        //menunjukkan urutan value dengan this splt(di potog) pemotongnya bintang
									        //
									       $('#DeleteGroup').modal('show');
				                        });
				    
				                    }
				                
				            });
				  });
             });
        </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>