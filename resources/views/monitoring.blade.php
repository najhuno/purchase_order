		@extends('layout.master')

		@section('content')

		<div class="col-md-12 col-sm-4 col-xs-12">
			<body>
		    <h1>Vendor Monitoring</h1>
		    <hr />
		</body>
		  <div class="x_panel">
		      <h3></h3><br
		      <div class="clearfix"></div>
		    <div class="form-horizontal form-label-left">
							      <div class="form-group">
							        <label class="control-label col-md-2 col-sm-6 col-xs-12">Direktorat - Bisnis</label>
							        <div class="col-sm-4">
									       <select class="form-control bisnis">
									            <option value="">Dept.Complaince Risk Mgt</option>
                              <option value="">agum</option>
									       </select>
							        </div>
							    	<div class="col-sm-3">
								       <select class="form-control prjctname">
								            <option value="">Supply center</option>
								       </select>
								  	</div>
							      </div>
							      <div class="form-group">
							        <label class="control-label col-md-2 col-sm-6 col-xs-12">Unit Kerja - Tahun RKAP</label>
							        <div class="col-sm-4">
									       <select class="form-control unit_kerja">
									            <option value="">OPEX PROCURUMENT</option>
									       </select>        
									 </div>
									 <div class="col-sm-3">
									       <select class="form-control prjctname">
									            <option value="">Tahun</option>
									       </select>
									  </div>
							      </div>
							      <div class="form-group">
								          <label class="control-label col-md-2 col-sm-6 col-xs-12">Jenis Anggaran</label>
								          <div class="col-sm-7">
										       <select class="form-control Anggaran" id="Anggaran">
										            <option value="">Exploitasi OPEX</option>
										       </select>        
										  </div>
									</div>
									<div class="form-group">
										        <label class="control-label col-md-2 col-sm-6 col-xs-12">Paket Pengadaan</label>
										        <div class="col-sm-7">
												       <select class="form-control pengadaan">
												            <option value="">Jasa Pembangunan Toll</option>
												       </select>        
												</div>
									</div>
									<div class="form-group">
												<label class="control-label col-md-2 col-sm-6 col-xs-12">Pencarian</label>
										        <div class="col-sm-6">
                              <input type="text" class="form-control search_toring" id="search_toring">
										        </div>
											        <div class="col-sm-1 pull-left">
										            <button id="btn-input-emp" class="btn btn-success btn-cari-toring ">Cari</button>
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
													<th class ="table-head" style="text-align: center">status</th>
													<th class ="table-head" style="text-align: center">Action</th>		
												</tr>
											</thead>
										  <tbody class ="t_pencarian">
												@foreach($monitoring as $monitorings)
                                       		<tr>
                                            <td><center>{{ $monitorings->id_monitoring }}</center></td>
                                            <td>{{ $monitorings->direktorat_bisnis }}</td>
                                            <td>{{ $monitorings->unit_kerja }}</td>
                                            <td>{{ $monitorings->janis_anggaran }}</td>
                                            <td>{{ $monitorings->paket_pengadaan }}</td>
                                            <td>{{ $monitorings->status }}</td>
											<td>
											<div class="input-group">
											<center>
												 <button type="button" class="btn btn-warning button_edit3" data-toggle="modal" value="{{ $monitorings->id_monitoring }}*{{ $monitorings->janis_anggaran }}">Edit<i class="fa fa-fw fa-edit"></i></button>

												 <button type="button" class="btn btn-danger delete_toring" id="btn_delete_toring"value="{{ $monitorings->id_monitoring }}*{{ $monitorings->paket_pengadaan }}">Delete<i class="fa fa-close"></i> </button>
											</center>
										</div>
									</td>
								</tr>
								 <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                    <h2 class="modal-title" id="exampleModalLabel">Edit monitoring</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-horizontal">{{csrf_field()}}
                                                        <div class="form-group">
                                                      <label class="control-label col-md-4 col-sm-6 col-xs-12">janis_anggaran</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <textarea  class="form-control janis_anggaran" id="janis_anggaran" style="resize: none;"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                     <label class="control-label col-md-4 col-sm-6 col-xs-12">paket_pengadaan</label>
                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select class="form-control prjctname" readonly="readonly">
                                                                <option>{{ $monitorings->paket_pengadaan }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                    		<div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-success pull-right btn-edit-monitoring">Save</button>
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
	</div>
</div>
</div>
<div class="modal fade" id="Deletelist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-10" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <center>
                <h3> Apakah anda yakin akan menghapus <Label  class="Anggaran" name="Anggaran" id="Anggaran" ></Label>  ? </h3>
              <center>
                <input type="hidden" name="id_monitor" class="id_monitor" id="id_monitor" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
                <button class="btn btn-success pull-right btn_delete_toring" id="btn_delete_toring" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
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
            
            $('.delete_toring').click(function(){
               var splt = $(this).val().split('*');
               $("#id_monitor").val(splt[0]);
                $(".Anggaran").text(splt[0]);
               //yang di hapus ya itu nantinya adalah ikut (id_vendor)
                //kalau pakai titik berarti class jika pagar berarti id
                //.val().split('*'); adalah untuk split atau memotong data dari inputan (btn/teks bok s dan lain2)
                //.val(splt[0]); adalah nama variabel dan urutan data yang di potong dalam bentuk array
                //.val(splt[1]); adalah hasil potomgan berbentuk array
               $('#Deletelist').modal('show');
            });

             $('.button_edit3').click(function(){
                var splt = $(this).val().split('*');
                $(".id_monitoring").val(splt[0]);
                $(".janis_anggaran").val(splt[1]);
                $('#modal_edit').modal("show");

            });

              $('.btn-edit-monitoring').click(function(){
                var String_id_monitoring = $(".id_monitoring").val();; 
                var op = "";
                var String_janis_anggaran = $('.janis_anggaran').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/monitoring/edit',
                    data  : {'id_monitoring':String_id_monitoring,'janis_anggaran':String_janis_anggaran,_token: '{{csrf_token()}}'},
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

        $('.btn-cari-toring').click(function(){

                var toring = $('.search_toring').val();
                var Anggaran  = $('.Anggaran').val();

               var val = {'search_toring': toring, 'Anggaran' : Anggaran, _token :'{{csrf_token()}}'};  
                {
                    $("#error1").html("Your Data is not complete!");
                    $('#myModal1').modal("show");
                  }
            $.ajax({
                url : baseUrl +'/toring/cari',
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
                        t += '<td>' + v.direktorat_bisnis + '</td>';
                        t += '<td>' + v.unit_kerja + '</td>';
                        t += '<td>' + v.janis_anggaran + '</td>';
                        t += '<td>' + v.paket_pengadaan + '</td>';
                        t += '<td>' + v.status + '</td>';
                        t += '<td>' ;
                        t += '<center>';
                        t += '<div class="input-group">';
                       
                        t += '<button type="button" class="btn btn-warning btn_edit" data-toggle="modal" value="'+v.direktorat_bisnis+'*'+v.id_monitoring+'*'+v.unit_kerja+'*'+v.janis_anggaran+'*'+v.paket_pengadaan+'">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp';

                        t +='<button type="button" class="btn btn-danger btn_delete" id="delete_grup"value="'+v.direktorat_bisnis+'*'+v.unit_kerja+'">Delete<i class="fa fa-close"></i> </button>';
                              
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
                            $(".id_monitoring").val(splt[0]);
                            $(".janis_anggaran").val(splt[1]);
                            $('#modal_edit').modal("show");

                        });
                        $('.btn_delete').click(function(){
                        var splt = $(this).val().split('*');
                           $("#id_monitor").val(splt[0]);
                            $(".Anggaran").text(splt[0]);
                           //yang di hapus ya itu nantinya adalah ikut (id_vendor)
                            //kalau pakai titik berarti class jika pagar berarti id
                            //.val().split('*'); adalah untuk split atau memotong data dari inputan (btn/teks bok s dan lain2)
                            //.val(splt[0]); adalah nama variabel dan urutan data yang di potong dalam bentuk array
                            //.val(splt[1]); adalah hasil potomgan berbentuk array
                           $('#Deletelist').modal('show');
                        });
    
                    }
                
            });
  });


            $('.btn_delete_toring').click(function(){
                    var id_monitor   = $(".id_monitor").val();
                    
                    var val = {'id_monitor' : id_monitor, _token :'{{csrf_token()}}'};  
                    //jadi grname sama grdes akan di simpan atau masuk di var val atas ini
                    console.log(val);
                      $.ajax({
                      url : baseUrl +'/monitoring/delete',
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
        });
    </script>
    @endsection