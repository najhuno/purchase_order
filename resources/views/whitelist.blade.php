@extends('layout.master')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    	<div class="title">
        	<h2>Manage Whitelist</h2>
        </div>
		<hr>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a>Vendor Management</a>
            </li>
        	<li class="active">
                <strong>Whitelist</strong>
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
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="control-label col-md-7 col-sm-6 col-xs-12"></label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                         <input type="text" title="Nama pengadaan" class="form-control search_white" id="search_white">
                                    </div>
                                    <div class="form-horizontal form-label-right">
                                        <button class="btn btn-success  btn-search-white">Search</button>
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
                                            <th class ="table-head" style="text-align: center">Start Whitelist Date</th>    
                                            <th class ="table-head" style="text-align: center">End Whitelist Date</th>
                                            <th class ="table-head" style="text-align: center">Evidence</th>
                                            <th class ="table-head" style="text-align: center">Status</th>
                                            <th class ="table-head" style="text-align: center">Action</th>  
                                        </tr>
                                    </thead>
                                     <tbody class ="t_pencarian">
                                        @foreach($vendor as $vendors)
                                        <tr>
                                            <td><center>{{ $vendors->id_vdr }}</center></td>
                                            <td>{{ $vendors->Vendor }}</td>
                                            <td>{{ $vendors->Reason }}</td>
                                            <td>{{ $vendors->Start }}</td>
                                            <td>{{ $vendors->End }}</td>
                                            <td>{{ $vendors->Evidence }}</td>
                                            <td>{{ $vendors->Status }}</td>
                                            <td>
                                                <div class="input-group">
                                                    <center>
                                                        <button type="button" class="btn btn-warning button_edit1" data-toggle="modal" value="{{ $vendors->id_vdr }}*{{ $vendors->Reason }}*{{ $vendors->Start }}*{{ $vendors->End }}*{{ $vendors->Evidence }}">View<i class="fa fa-fw fa-edit"></i></button>
                                                        
                                                        <button type="button" class="btn btn-danger delete_white" id="btn_delete_white"value="{{ $vendors->Vendor }}">Delete<i class="fa fa-close"></i> </button>
                                                    </center>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal inmodal" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                    <h2 class="modal-title" id="exampleModalLabel">Approve Whitelist</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-horizontal">{{csrf_field()}}
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor Specialize</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <select class="form-control prjctname" readonly="readonly">
                                                                    <option value="">{{ $vendors->Spesifikasi_vdr }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor Category</label>
                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select type="text" class="form-control bule" id="bule" readonly="readonly">
                                                                <option>{{ $vendors->Vendor }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Vendor name</label>
                                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control grname" id="grname">
                                                           <input type="hidden" class="form-control id_vdr" id="id_vdr" value="{{ $vendors->Vendor }}">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Start date</label>
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
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">End date</label>
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control editdate" id="editdate">
                                                          <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-6 col-xs-12">Evidence</label>
                                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" readonly="readonly" class="form-control vdr_name" id="vdr_name">
                                                        </div>
                                                    </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Status aproval</label>
                                                <div class="col-md-8 col-sm-10 col-xs-12">
                                                    <input type="radio" id="Choice1"name="contact" value="{{ $vendors->Status }}">
                                                    <label for="contactChoice1">Reject</label>
                                                    <input type="radio" id="Choice2"name="contact" value="{{ $vendors->Status }}">
                                                    <label for="contactChoice2">Approved</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Reason</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="hidden" class="form-control id_vdr" id="id_vdr">
                                                    <textarea  class="form-control Reason" id="Reason" style="resize: none;">{{ $vendors->Reason }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-success pull-right btn-edit-Whitelist">Save</button>
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
     <div id="tab_content3" class="tab-pane">
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal">
                  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Vendor Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control  Vendor" id="Vendor">
                                <option value="">vendor category's list</option>
                                <option value="">johan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-6 col-xs-12">Vendor Name</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                            <input type="text" class="form-control grname" id="grname">
                           <input type="hidden" class="form-control id_vdr" id="id_vdr">
                      </div>
                   </div>
                   <div class="form-group"> 
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">Blacklist date</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" class="form-control date1" id="date1">
                                  </div>
                              </div>
                              <div class="form-group"> 
                                <label class="control-label col-md-2 col-sm-6 col-xs-12">End blacklist date</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" class="form-control date2" id="date2">
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
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control dence" id="dence">
                                  <!--  <input type="hidden" class="form-control id_vdr" id="id_vdr"> -->

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
                                         <button id="btn-input-black" class="btn btn-primary btn-success btn-input-black">Input</button>
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
    <div class="modal-dialog modal-lg-10" role="document">
        <div class="modal-content">
            <div class="modal-body">
                 <center>
                <h3> Apakah anda yakin akan menghapus <Label  class="vendor" name="vendor" id="vendor" ></Label>  ? </h3>
                 </center>
                <input type="hidden" name="id_vendor" class="id_vendor" id="id_vendor" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No <i class="fa fa-close"></i> </button>  
                <button class="btn btn-success pull-right btn_delete_white" id="btn_delete_white" >Yes <i class="fa fa-check-square-o" aria-hidden="true"></i> </button>
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
            $('.button_edit1').click(function(){
                var splt = $(this).val().split('*');
                $(".id_vdr").val(splt[0]);
                $(".Reason").val(splt[1]);
                $(".dateedit").val(splt[2]);
                $(".editdate").val(splt[3]);
                $(".grname").val(splt[4]);
                $('#modal_edit').modal("show");

            });
            $('.delete_white').click(function(){
               var splt = $(this).val().split('*');
               $("#id_vendor").val(splt[0]);
                $(".vendor").text(splt[0]);
               //yang di hapus ya itu nantinya adalah ikut (id_vendor)
                //kalau pakai titik berarti class jika pagar berarti id
                //.val().split('*'); adalah untuk split atau memotong data dari inputan (btn/teks bok s dan lain2)
                //.val(splt[0]); adalah nama variabel dan urutan data yang di potong dalam bentuk array
                //.val(splt[1]); adalah hasil potomgan berbentuk array
               $('#Deletelist').modal('show');
            });

            $('.btn-edit-Whitelist').click(function(){
                var id_vdr = $(".id_vdr").val();; 
                var op = "";
                var Reason = $('.Reason').val();
                var String_tgl_closing = $('.dateedit').val();
                var tgl_closing = $('.editdate').val();
                var String_nama_group = $('.grname').val();

                $.ajax({
                    type  :'POST',
                    url   : baseUrl +'/white/edit',
                   data  : {'id_vdr':id_vdr,'Reason':Reason,'date1':String_tgl_closing,'date2':tgl_closing,'Vendor':String_nama_group,_token: '{{csrf_token()}}'},
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
            $('.btn_delete_white').click(function(){
                    var id_vendor   = $(".id_vendor").val();
                    
                    var val = {'id_vendor' : id_vendor, _token :'{{csrf_token()}}'};  
                    //jadi grname sama grdes akan di simpan atau masuk di var val atas ini
                    console.log(val);
                      $.ajax({
                      url : baseUrl +'/white/delete',
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
    $('.btn-search-white').click(function(){

        var white = $('.search_white').val();
        var vendor  = $('.vendor').val();

       var val = {'search_white': white, 'vendor' : vendor, _token :'{{csrf_token()}}'};  
        {
            $("#error1").html("Your Data is not complete!");
            $('#myModal1').modal("show");
          }
            $.ajax({
                url : baseUrl +'/white/search',
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
                        t += '<td>' + v.Vendor + '</td>';
                        t += '<td>' + v.Reason + '</td>';
                        t += '<td>' + v.Start + '</td>';
                        t += '<td>' + v.End + '</td>';
                        t += '<td>' + v.Evidence + '</td>';
                        t += '<td>' + v.Status + '</td>';
                        t += '<td>' ;
                        t += '<center>';
                        t += '<div class="input-group">';
                       
                        t += '<button type="button" class="btn btn-warning btn_edit" data-toggle="modal" value="'+v.id_vdr+'*'+v.Vendor+'*'+v.Reason+'*'+v.Start+'*'+v.End+'*'+v.Evidence+'">Edit<i class="fa fa-fw fa-edit"></i></button>&nbsp';

                        t +='<button type="button" class="btn btn-danger delete_putih" id="delete_grup"value="'+v.Vendor+'*'+v.Reason+'">Delete<i class="fa fa-close"></i> </button>';
                              
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
                            $(".id_vdr").val(splt[0]);
                            $(".Reason").val(splt[1]);
                            $(".dateedit").val(splt[2]);
                            $(".editdate").val(splt[3]);
                            $(".grname").val(splt[4]);
                            $('#modal_edit').modal("show");
                      });
                        $('.delete_putih').click(function(){
                           var splt = $(this).val().split('*');
                            $("#id_vendor").val(splt[0]);
                            $(".vendor").text(splt[0]);
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
    $('#btn-input-black').click(function(){

    var Vendor = $('#Vendor').val();
    var grname = $('#grname').val();
    var date1 = $("#date1").val();
    var date2 = $("#date2").val();
    var Reason = $("#Reason").val();
    var dence = $("#dence").val();
    // console.log(tgl_closing);
            if(Vendor == "" || grname == "" || date1 == "" || date2 == ""|| Reason == "" || dence == ""){
                $("#error1").html("Your Data is not complete!");
                $('#myModal1').modal("show");
            }else{
            $.ajax({
                url : baseUrl +'/white/input',
                type: 'POST',
                data: {'Vendor': Vendor,'grname': grname,'date1': date1,'date2': date2,'Reason': Reason,'dence': dence, _token: '{{csrf_token()}}'},
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


