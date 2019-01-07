<?php $__env->startSection('content'); ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Group Information</h2>
        </div>
		<hr>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li>
                <a>User Management</a>
            </li>
        	<li class="active">
                <strong>Group</strong>
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
					        		<label class="control-label col-md-7 col-sm-10 col-xs-12"></label>
					        		<div class="col-md-4 col-sm-6 col-xs-12">
					        			<input type="text" class="form-control search_group" id="search_group" title="Search Group name...">
					        		</div>
					        		<div class="form-horizontal form-label-right">
					        			<button class="btn btn-primary  btn-search-group">Search</button>
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
										<th class ="table-head" style="text-align: center">Group Name</th>
										<th class ="table-head" style="text-align: center">Group Descriptions</th>	
										<th class ="table-head" style="text-align: center">Action</th>	
										</tr>
									</thead>
									<tbody class="t_pencarian">
										<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><center><?php echo e($datas->id_group); ?></center></td>
											<td><?php echo e($datas->nama_group); ?></td>
											<td><?php echo e($datas->des_group); ?></td>
											<td>
												<center>
												<div class="input-group">
													<button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="<?php echo e($datas->nama_group); ?>*<?php echo e($datas->id_group); ?>*<?php echo e($datas->des_group); ?>">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
													<button type="button" class="btn btn-danger button_delete_project" id="delete_grup"value="<?php echo e($datas->nama_group); ?>*<?php echo e($datas->des_group); ?>">Delete<i class="fa fa-close"></i> </button>
												</div>
												</center>
											</td>
										</tr>
										<div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true"> 
											<div class="modal-dialog modal-lg">
												<div class="modal-content animated bounceInRight">
													<div class="modal-header">
														<h2 class="modal-title" id="exampleModalLabel">Edit Group</h2>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="form-horizontal"><?php echo e(csrf_field()); ?>

															<div class="form-group">
																<label class="control-label col-md-4 col-sm-6 col-xs-12">Group name</label>
																<div class="col-md-6 col-sm-9 col-xs-12">
																	<input type="text" class="form-control grname" id="grname">
																	<input type="hidden" class="form-control id_group" id="id_group">

																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-4 col-sm-6 col-xs-12">Group description</label>
																<div class="col-md-6 col-sm-9 col-xs-12">
																	<textarea  class="form-control grdes"  id="grdes" style="resize: none;" value=""><?php echo e($datas->des_group); ?></textarea>
																</div>
															</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
															<button class="btn btn-success pull-right btn-edit-group">Save</button>
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
					<div id="tab_content3" class="tab-pane">
						<div class="panel-body">
						    <div class="row">
						        <form class="form-horizontal" method="post" action="<?php echo e(url('insert')); ?>"><?php echo e(csrf_field()); ?>

									<div class="modal-body">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-6 col-xs-12">Group name</label>
											<div class="col-md-6 col-sm-9 col-xs-12">
												<input name="grname" type="text" class="form-control grname" id="grname" placeholder="Enter Group name...">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-6 col-xs-12">Group description</label>
											<div class="col-md-6 col-sm-9 col-xs-12">
												<textarea name="grdes" type="text"class="form-control grdes" id="grdes" style="resize: none;" placeholder="Enter Group description..."></textarea>             
											</div>
										</div>
									</div> 
									<div class="modal-footer">
										<div class="control-label col-md-10 col-sm-9 col-xs-12">
											<button id="insert" class="btn btn-primary btn-success">Input</button>
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
<div class="modal fade" id="DeleteGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-10" role="document">
	      <div class="modal-content">
		        <div class="modal-body">
		        <center> 
		  			<h4> Apakah anda yakin akan menghapus <Label  class="grname" name="grname" id="grname" ></Label>  ? </h4>
		              <input type="hidden" name="grdes" id="grdes" >
		       </center> 
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
		          <button class="btn btn-success pull-right btn_delete_group" id="btn_delete_group" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
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
            		$(".id_group").val(splt[1]);
            		$(".grname").val(splt[0]);
            		$(".grdes").val(splt[2]);
            		$('#modal_edit').modal("show");

            });
            $('.button_delete_project').click(function(){
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


            $('.btn-edit-group').click(function(){
                var String_id_group =$('.id_group').val() ; 
                var op = "";
                var String_nama_group = $('.grname').val();
                var String_des_group = $('.grdes').val(); 

                $.ajax({
                    type  :'POST',
                    url   :baseUrl +'/group/edit',
                    data  : {'group_id':String_id_group,'nama_group':String_nama_group,'des_group':String_des_group,_token: '<?php echo e(csrf_token()); ?>'},
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
                //console.log(data);
            });
            $('#btn_delete_group').click(function(){
                var String_nama_group      = $("#grname").val();                    
	            var String_nama_group      = $("#grname").val();
	            var String_des_group       = $("#grdes").val();
	            var val = {'grname': String_nama_group, 'grdes' : String_des_group, _token :'<?php echo e(csrf_token()); ?>'};  
            	//jadi grname sama grdes akan di simpan atau masuk di var val atas ini
              	$.ajax({
              		url : baseUrl +'/group/delete',//memanggil di url harus sama dengan yang di routes atau web.php
		            type: 'POST',//type harus sama dengan yang di web atau routes
					data: val,      
					dataType: 'json',
					beforeSend: function(){
					$('.ajax-loader').css("visibility", "visible");
					},

		            success:function(r){
		            $('#DeleteGroup').modal('hide');
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
              	//console.log(data);
		    	});
				$('.btn-search-group').click(function(){

				        var grname = $('.search_group').val();
				        var grdes  = $('.grdes').val();

				       var val = {'search_group': grname, 'grdes' : grdes, _token :'<?php echo e(csrf_token()); ?>'};  
				        {
				            $("#error1").html("Your Data is not complete!");
				            $('#myModal1').modal("show");
				          }
				            $.ajax({
				                url : baseUrl +'/group/search',
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
				                        t += '<td style="text-align:center">'+v.id_group+'</td>';
				                        t += '<td>' + v.nama_group + '</td>';
				                        t += '<td>' + v.des_group + '</td>';
				                        t += '<td>' ;
				                         t += '<center>';
				                        t += '<div class="input-group">';
				                       
				                        t += '<button type="button" class="btn btn-warning btn_edit" data-toggle="modal" value="'+v.nama_group+'*'+v.id_group+'*'+v.des_group+'">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp';

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

				                       $('.btn_edit').click(function(){
				                        var splt = $(this).val().split('*');
				                          $(".id_group").val(splt[1]);
				                          $(".grname").val(splt[0]);
				                          $(".grdes").val(splt[2]);
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