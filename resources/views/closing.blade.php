@extends('layout.master')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Closing Pengadaan</h2>
        </div>
    <hr>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
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
        <div class="col-md-12
		">
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
							          	 <input type="text"  title="Nama pengadaan" class="form-control cari_closing" id="cari_closing">
							        	</div>
								    <div class="control-label col-md-1 col-sm-3 col-xs-12">
							            <button class="btn btn-success  btn-cari-closing">Search</button>
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
											<th class ="table-head" style="text-align: center">Status</th>
                      <th class ="table-head" style="text-align: center">Action</th>  	
										</tr>
									<tbody class ="t_pencarian">
                                        @foreach($data as $datas)
                                      <tr>
                                      <td><center>{{ $datas->id_closing }}</center></td>
                                        <td>{{ $datas->paket_pengadaan }}</td>
                                        <td>{{ $datas->tgl_closing }}</td>
                                        <td>{{ $datas->keterangan }}</td>
                                        <td>@php if($datas->status == 1){ @endphp
                                                  <label>Aktif</label>
                                             @php }else{ @endphp
                                                  <label>Non Aktif</label>
                                             @php } @endphp
                                         </td>
                                      <td>
                                        <center>
                                        <div class="input-group">
                                              <button type="button" class="btn btn-warning button_edit" data-toggle="modal" value="{{ $datas->id_closing }}*{{ $datas->paket_pengadaan }}*{{ $datas->tgl_closing }}">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp
                                              <button type="button" class="btn btn-danger delete_closing" id="btn_delete_closing"value="{{ $datas->paket_pengadaan }}">Delete<i class="glyphicon glyphicon-trash"></i> </button>
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
                      												   	   	<input type="text" id="Nm_closing" class="form-control Nm_closing">
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
                  												          	<input type="text" class="form-control keterangan" id="keterangan" value="{{ $datas->keterangan }}">
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
                                  @endforeach
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
        						   	   <input type="text" class="form-control paket_pengadaan" id="paket_pengadaan">
        						     </div>
        						</div>
    							  <div class="form-group"> 
    								  <label class="control-label col-md-2 col-sm-6 col-xs-12">Tanggal Closing</label>
    							 	  <div class="col-md-6 col-sm-6 col-xs-12">
    							   	   	<input type="date" class="form-control tgl_closing" id="tgl_closing">
    							      </div>
    							  </div>
                    <div class="form-group">
  						        <label class="control-label col-md-2 col-sm-6 col-xs-12">BAST</label>
  							        <div class="col-md-6 pull-left">
                          <input type="file" name="file_bast" class="form-control">
  							        </div>
						        </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" class="form-control" id="keterangan">
                         </div>
                    </div>
						        <div class="col-md-12 pull-right">
                      <div class="col-md-8">
                      </div>
                      <div class="col-md-5">
  					            <div class="col-md-2">
  							            <button id="btn-input-emp" class="btn btn-success">Batal</button>
  							        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2 pull-left">
                            <button id="btn-input-closing" class="btn btn-primary btn-success">Input</button>
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


            $('.btn-edit-closing').click(function(){
                var String_id_closing = $(".id_closing").val();; 
                var op = "";
                var String_paket_pengadaan = $('.pkt_pengadaan').val();
                var String_tgl_closing = $('.dateedit').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/closing/edit',
                    data  : {'id_closing':String_id_closing,'paket_pengadaan':String_paket_pengadaan,'date1':String_tgl_closing,_token: '{{csrf_token()}}'},
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
                    var id_closing   = $(".id_closing").val();
                    
                    var val = {'id_clos' : id_closing, _token :'{{csrf_token()}}'};  
                    
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
  $('.btn-cari-closing').click(function(){

        var cari = $('.cari_closing').val();
        var paket_pengadaan  = $('.paket_pengadaan').val();

       var val = {'cari_closing': cari, 'paket_pengadaan' : paket_pengadaan, _token :'{{csrf_token()}}'};  
        {
            $("#error1").html("Your Data is not complete!");
            $('#myModal1').modal("show");
          }
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
                        t += '<td>' + v.keterangan + '</td>';
                        t += '<td>' + v.Status + '</td>';
                        t += '<td>' ;
                        t += '<center>';
                        t += '<div class="input-group">';
                       
                        t += '<button type="button" class="btn btn-warning btn_edit" data-toggle="modal" value="'+v.id_closing+'*'+v.paket_pengadaan+'*'+v.tgl_closing+'*'+v.keterangan+'">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp';

                        t +='<button type="button" class="btn btn-danger delete_putih" id="delete_grup"value="'+v.paket_pengadaan+'*'+v.tgl_closing+'">Delete<i class="fa fa-close"></i> </button>';
                              
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
                        $(".id_closing").val(splt[0]);
                        $(".pkt_pengadaan").val(splt[1]);
                        $(".dateedit").val(splt[2]);
                        $('#modal_edit').modal("show");

                      });
                        $('.delete_putih').click(function(){
                           var splt = $(this).val().split('*');
                            $("#id_closing").val(splt[0]);
                            $(".nomer").text(splt[0]);
                            $('#Deletelist').modal('show');
                        });
    
                    }
                
            });
        });
  $('#btn-input-closing').click(function(){
    var paket_pengadaan = $('#paket_pengadaan').val();
    var tgl_closing = $("#tgl_closing").val();
    var keterangan = $("#keterangan").val();
    // console.log(tgl_closing);
            if(paket_pengadaan == "" || tgl_closing == "" || keterangan == ""){
                $("#error1").html("Your Data is not complete!");
                $('#myModal1').modal("show");
            }else{
            $.ajax({
                url : baseUrl +'/closing/input',
                type: 'POST',
                data: {'paket_pengadaan': paket_pengadaan,'tgl_closing': tgl_closing,'keterangan': keterangan, _token: '{{csrf_token()}}'},
                dataType: 'json',
                success:function(r){
                            if(r.msg == 'Success Insert'){
                              $("#error2").html(r.msg);
                              $('#myModal2').modal("show");
                              setTimeout(function(){
                                location.reload(); 
                              }, 1000); 
                            }
                        }
            });
          }
      });
  });
</script>
@endsection