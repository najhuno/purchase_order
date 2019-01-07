@extends('layout.master')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Manage Categories</h2>
        </div>
		<hr>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a>Catalog Management</a>
            </li>
        	<li class="active">
                <strong>Category</strong>
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
								<div class="x-content">
									<table class="mandaysTable_view table table-bordered table-responsive table-hover">
										<thead>
											<tr>
												<th class ="table-head" style="text-align: center">No</th>
												<th class ="table-head" style="text-align: center">Nama Categories</th>
												<th class ="table-head" style="text-align: center">Action</th>
											</tr>
										</thead>
										<body>
										@foreach($data as $datas)
                                        <tr>
                                            <td><center>{{ $datas->id_category }}</center></td>
                                            <td>{{ $datas->Nama_category }}</td>
                                            <td>
                                                <center>
                                                    <div class="input-group">
                                                        <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="{{ $datas->id_category }}*{{ $datas->Nama_category }}">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
                                                        <button type="button" class="btn btn-danger button_delete_category" value="{{ $datas->Nama_category }}">Delete<i class="fa fa-close"></i> </button>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLabel">Update Categories</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-horizontal form-label-left">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Parent name</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
    												            <select class="form-control">
    													             <option value="">Root</option>
    												            </select>
    												         </div>
    													</div>
    													<div class="form-group">
    														 <label class="control-label col-md-4 col-sm-4 col-xs-12">Categories name</label>
    													          <div class="col-md-6 col-sm-6 col-xs-12">
    													          	<input type="hidden" class="form-control id_category" id="id_category">
    																<input type="text" id="Nm_category" class="form-control Nm_category">
    															</div>
    														</div>
    														<div class="modal-footer">
                                                          		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                          	     <button class="btn btn-success pull-right btn-edit-category">Save</button>
                                                             </div>
        		                                          </div>
        		                                      </div>
        		                                  </div>
        		                              </div>
                                      	@endforeach
        							</body>
        						</table>
        					</div>
        				</div>
        			</div>
        		</div>
                <div id="tab_content3" class="tab-pane">
                    <div class="panel-body">
                        <div class="row">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-6 col-xs-12">Parent name</label>
        								<div class="col-md-6 col-sm-6 col-xs-12">
        						             <select id="rolename" class="form-control col-sm-4">
        							             <option value="">Root</option>
        						            </select>
        						         </div>
							         </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Categories name</label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control Nama_category" id="Nama_category">
                                        </div>
                                    </div>
        							<div class="modal-footer">
        								<button id="btn-input-category" class="btn btn-primary btn-success">Input</button>
        							</div>
        						</form>
        					</div>		
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg-10" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <center> 
                        <h4> Yakin Akan Menghapus Kategori <Label  class="Nama_category" name="Nama_category" id="Nama_category" ></Label>  ? </h4>
                          <input type="hidden" name="id_category" id="id_category" >
                   </center> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal<i class="fa fa-close"></i> </button>  
                  <button class="btn btn-success pull-right btn_delete_categori" id="btn_delete_categori" >Ya<i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                </div>
          </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers : {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
            $('.button_edit').click(function(){
                var splt = $(this).val().split('*');
                $(".id_category").val(splt[0]);
                $(".Nm_category").val(splt[1]);
                $('#modal_edit').modal("show");

            });
             $('.button_delete_category').click(function(){
               var splt = $(this).val().split('*');
                $("#id_category").val(splt[0]);
                $(".Nama_category").text(splt[0]);
                $('#Delete').modal('show');
            });

            $('#btn-input-category').click(function(){

                var Nama_category = $('#Nama_category').val();
                
                if( Nama_category == ""){
                    $("#error1").html("Your Data is not complete!");
                    $('#myModal1').modal("show");
                }else{
                

                   $.ajax({
                        url : baseUrl +'/category/input',
                        type: 'POST',
                        data: {'Nama_category': Nama_category,_token: '{{csrf_token()}}'},
                        dataType: 'json',
                        success:function(r){
                            if(r.msg == 'Success Insert'){
                              $("#error2").html(r.msg);
                              $('#myModal2').modal("show");
                              setTimeout(function(){// wait for 5 secs(2)
                                location.reload(forceGet); // then reload the page.(3)
                              }, 1000); 
                            }
                        }
                    });
                }
                 // console.log();
            })
             $('.btn-edit-category').click(function(){
                var String_id_category = $(".id_category").val();; 
                var op = "";
                var String_Nama_category = $('.Nm_category').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/category/edit',
                    data  : {'id_category':String_id_category,'Nama_category':String_Nama_category,_token: '{{csrf_token()}}'},
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
              $('#btn_delete_categori').click(function(){
                var String_id_category      = $("#id_category").val();                    

                var val = {'id_category': String_id_category, _token :'{{csrf_token()}}'};  
                //jadi grname sama grdes akan di simpan atau masuk di var val atas ini
                $.ajax({
                    url : baseUrl +'/category/delete',//memanggil di url harus sama dengan yang di routes atau web.php
                    type: 'POST',//type harus sama dengan yang di web atau routes
                    data: val,      
                    dataType: 'json',
                    beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                    },

                    success:function(r){
                    $('#Delete').modal('hide');
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
         });
    </script>
@endsection

