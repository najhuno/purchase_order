<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <div class="title">
          <h2>Vendor Registrasi</h2>
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
                <strong>Registrasi</strong>
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
                  <h5>USER ID</h5>
                  <div class="ibox-content">
                    <div class="panel-body">
                      <div class="row">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-6 col-xs-12">Nama pengguna</label>
                                      <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control nama_pengguna" id="nama_pengguna">
                                            <input type="hidden" class="form-control id_reg_vdr" id="id_reg_vdr">
                                          </div>
                                          <div class="col-md-1 col-sm-6 col-xs-6">
                                            <button class="btn btn-success pull-right">check</button>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-2 col-sm-6 col-xs-12">Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="Password" class="form-control">
                                            </div>
                                        </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-2 col-sm-6 col-xs-12">Retype Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-6 col-xs-12">Telepon</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="text" class="form-control telepon" id="telepon">
                                              </div>
                                          </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-6 col-xs-12">Email</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="text" class="form-control email" id="email">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-6 col-xs-12">Penanggung Jawab</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="text" class="form-control penanggung_jawab" id="penanggung_jawab">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-md-12">
                                              <div class="col-sm-6">
                                          </div>
                                          <div class="col-sm-1">
                                            <button id="btn-input-registrasi" class="btn btn-success pull-right">save</button>
                                          </div>
                                          <div class="col-sm-1 pull-left">
                                            <button id="btn-input-emp" class="btn btn-success pull-right">cancel</button>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
        $(document).ready(function() {
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-input-registrasi').click(function(){
                var Id_reg_vdr       = $('#id_reg_vdr').val();
                var Nama_pengguna    = $('#nama_pengguna').val();
                var Telepon          = $('#telepon').val();
                var Email            = $('#email').val();
                var Penanggung_jawab = $('#penanggung_jawab').val();
                
                if( nama_pengguna == "" || Telepon == "" || Email == "" || Penanggung_jawab == ""){
                    $("#error1").html("Your Data is not complete!");
                    $('#myModal1').modal("show");
                }else{
                

                   $.ajax({
                        url : baseUrl +'/registrasi/input',
                        type: 'POST',
                        data: {'id_reg_vdr': Id_reg_vdr,'nama_pengguna': Nama_pengguna,'telepon': Telepon,'email': Email,'penanggung_jawab': Penanggung_jawab,_token: '<?php echo e(csrf_token()); ?>'},
                        dataType: 'json',
                        success:function(r){
                            if(r.msg == 'Success Insert'){
                              $("#error2").html(r.msg);
                              $('#myModal2').modal("show");
                              setTimeout(function(){// wait for 5 secs(2)
                                location.reload(true); // then reload the page.(3)
                              }, 1000); 
                            }
                        }
                    });
                }
                 //console.log(data);
            })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>