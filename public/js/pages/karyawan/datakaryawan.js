var table = {
  el: {},
  id: '#table-karyawan'
};

var validateKaryawan;

$(document).ready(function () {
  $("#filter-nik-error").hide();

  $("#filter-fid-error").hide();

  initializeTables();
  initialize_department();
  // initialize_data_karyawan();

  $('.add-user').attr('data-toggle','modal');

  jQuery.validator.addMethod("checkNIK", function(value, element) {
    if(!$('#cek_aupdate').val()){
      if ($('#filter-nik').val() == $('#cek_availability').val()){
        return false;
      }else{
        return true;
      }
    }else{
      if ($('#filter-nik').val() == $('#cek_aupdate').val()){
        return true;
      }else{
        if ($('#filter-nik').val() == $('#cek_availability').val()){
          return false;
        }else{
          return true;
        }
      }
    }
  }, "NIK already exists.");

  jQuery.validator.addMethod("checkFID", function(value, element) {
    if(!$('#cek_aupdate_fid').val()){
      if ($('#filter-fid').val() == $('#cek_availability_fid').val()){
        return false;
      }else{
        return true;
      }
    }else{
      if ($('#filter-fid').val() == $('#cek_aupdate_fid').val()){
        return true;
      }else{
        if ($('#filter-fid').val() == $('#cek_availability_fid').val()){
          return false;
        }else{
          return true;
        }
      }
    }
  }, "FID already exists.");

  validateKaryawan = $("#form__add-karyawan").validate({
     rules: {
        "i_fid" : {
            minlength : 5,
            digits: true,
            checkFID: true
        },
        "i_nik" : {
            minlength : 5,
            checkNIK: true
        },
        "i_repassword" : {
            minlength : 5,
            equalTo : "#filter-password"
        },
        // "i_photo" : {
        //   extension: "png|jpg|jpeg"
        // }
     },
     messages: {
      'i_nik': {
        equalTo : "NIK already exists."
      }
     }
  });

  var searchRequest = null;

  $('#filter-nik').on('keyup', function(){
      var parameter = $(this).val();

      if(parameter.length >= 5){
        // if (searchRequest != null) 
        //     searchRequest.abort();

        searchRequest = $.ajax({
            type: "POST",
            url: base_url+'karyawan/cek_nik',
            data: {
                'nik' : parameter
            },
            success: function(data){
              if(parameter == $('#cek_aupdate').val()){
                  $("#cek_availability").val('');
              }else{
                if(data == 0){
                  $("#cek_availability").val('');
                }else{
                  $("#cek_availability").val(parameter);
                  validateKaryawan.showErrors({
                    "i_nik": "NIK already exists."
                  });
                }
              }
            }
        });
      }else{
        $("#cek_availability").val('');
      }
  });

  $('#filter-fid').on('keyup', function(){
    var parameter = $(this).val();

    if(parameter.length >= 5){
      // if (searchRequest != null) 
      //     searchRequest.abort();

      searchRequest = $.ajax({
          type: "POST",
          url: base_url+'karyawan/cek_fid',
          data: {
              'fid' : parameter
          },
          success: function(data){
            if(parameter == $('#cek_aupdate_fid').val()){
                $("#cek_availability_fid").val('');
            }else{
              if(data == 0){
                $("#cek_availability_fid").val('');
              }else{
                $("#cek_availability_fid").val(parameter);
                validateKaryawan.showErrors({
                  "i_fid": "FID already exists."
                });
              }
            }
          }
      });
    }else{
      $("#cek_availability_fid").val('');
    }
  });
});

function initializeTables(){

  table.el = $(table.id).DataTable({
        "sDom": '<"html5buttons"B>lfTgtrp',  
        responsive: true,
        "pageLength": 25,
        buttons: {
          dom: {
            button: {
              tag: 'button',
              className: ''
            }
          },
          buttons: [
              {extend: 'csv', title: 'Data Karyawan', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
              },
              {extend: 'pdf', title: 'Data Karyawan', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
              },
              {extend: 'print', title: 'Data Karyawan', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                },
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable()
                  }
              },
              {text: '<i class="fa fa-user-plus"></i> Add Karyawan', className: 'btn btn-default add-user',
                  action: function ( e, dt, node, config ) {
                    cleanModal();
                    $('#myModal').modal('show');
                  }
              },
            ]
        },
        processing: true,
        ajax: {
          url: base_url+'karyawan/ajax_karyawan_all',
          method: 'GET',
        },
        "columns": [
            {
              "data": "id",
              render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            {data: 'FID',name:"FID"},
            {data: 'Nama'},
            {data: 'NIK'},
            {data: 'Namaunit'},
            {data: 'JABATAN'},
            {data: 'TGL_MASUK'},
            {data: 'Notelp'},
            // {data: 'PHOTO'},
            // {data: 'BE_Active'},
            // {data: 'tgL_Keluar'},
            // {data: 'Alasan_Keluar'},
            // {data: 'Cat_Keluar'},
            // {data: 'status',
            //  render: function (data, type, row, meta){
            //     if(row.status == 0){
            //       return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.user_id+'" name="status_'+row.user_id+'"/>';
            //     }else{
            //       return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.user_id+'" name="status_'+row.user_id+'" checked/>';
            //     }
            //  }
            // },
            {render: function (data, type, row, meta) {
                let btnGroup = `
                  <div class="btn-group">
                    <button type="button" data-user-id="` + row.FID + `" onclick="doEdit(`+row.FID+`)" class="btn btn-outline btn-primary btn-md"><i class="fa fa-edit"></i></button>
                    <button type="button" data-user-id="` + row.FID + `" onclick="doDelete(`+row.FID+`)" class="btn btn-outline btn-danger btn-md"><i class="fa fa-trash"></i></button>
                  </div>
                `;

                return btnGroup;
              }
            }
        ],
        createdRow: function(row, data, dataIndex){
        },
        "fnDrawCallback": function( oSettings ) {
            $('#ibox1').children('.ibox-content').removeClass('sk-loading');
            // $('.bootstrapSwitch').bootstrapSwitch({
            //     'labelText' : 'Active'
            // });
        }
  });


  
  $(table.id).on('switchChange.bootstrapSwitch', '.bootstrapSwitch', function(event, state) {
    var el_name = this.getAttribute("name");
    var arr_name = el_name.split('_');
    var iduser = arr_name[1];
    var status = (state == true) ? 1 : 0;
    var jsonVariable = {};
    jsonVariable["user_id"] = iduser;
    jsonVariable["status"] = status;
    $.ajax({
        url: base_url + "menu/update_status",
        type: 'post',
        dataType: 'json',
        data: jsonVariable,
        success: function (data) {
            var ret = data;
            if (ret > 0) {
              reloadTable();
              swal({
                type: 'success',
                title: 'Berhasil',
                text: 'Status berhasil diupdate'
              });
            } else {
              reloadTable();
              swal({
                type: 'error',
                title: 'Gagal',
                text: 'Status gagal diupdate'
              });
            }
        }
    });
  });
}
function cleanModal(){
  $('.modal-title').html('<i class="fa fa-user-plus"></i>&nbsp;Add Karyawan');
  $('.modal-small').html('Tambah Karyawan Baru');
  $("#form__add-karyawan input").removeClass('error');
  $("#form__add-karyawan select").removeClass('error');
  validateKaryawan.resetForm();
  $("#filter-fid").val(null);
  $("#filter-fid").attr('readonly',false);
  $("#filter-karyawan").val(null);
  $("#filter-nik").val(null);
  $("#filter-departemen").val(null)
    .trigger('change');
  $("#filter-jabatan").val(null);
  $("#filter-notelp").val(null);
  $("#cek_availability").val(null);
  $("#cek_availability_fid").val(null);
  $("#cek_aupdate").val(null);
  $("#cek_aupdate_fid").val(null);
  $('form').attr('action','store_karyawan');
}

function doEdit(el){
  cleanModal();
  $.ajax({
    url:
      base_url + 'karyawan/get_data_karyawan_fid/' + el,
      method: 'get',
    success: function(response) {
      console.log(response);
      let parse = JSON.parse(response);
      $("#filter-fid").val(parse.FID);
      $("#filter-fid").attr('readonly',true);
      $("#filter-karyawan").val(parse.Nama);
      $("#filter-nik").val(parse.NIK);
      $("#filter-departemen").val(parse.DEPT_NAME)
        .trigger('change');
      $("#filter-jabatan").val(parse.JABATAN);
      $("#filter-notelp").val(parse.Notelp);
      $("#cek_aupdate").val(parse.NIK);
      $("#cek_aupdate_fid").val(parse.FID);
      $('#myModal').modal('show');
      $('form').attr('action','update_karyawan');
      $('.modal-title').html('<i class="fa fa-edit"></i>&nbsp;Edit Karyawan');
      $('.modal-small').html('Edit Karyawan Existing');
    }
  });
}

function doDelete(el){
  cleanModal();
  swal({
      title: "Apakah ada yakin?",
      text: "Karyawan akan terhapus dari database",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      cancelButtonText: "Tidak",
      confirmButtonText: "Ya, saya yakin",
      closeOnConfirm: false
  }, function () {
      $.ajax({
        url:
          base_url + 'karyawan/delete_karyawan',
          method: 'post',
          data: {
            fid : el,
          },
        success: function(response) {
          reloadTable();
          swal("Deleted!", "Karyawan berhasil dihapus.", "success");
        }
      });
  });
}

function initialize_department(){
  $.ajax({
      type: 'GET',
      url: base_url+'karyawan/ajax_unit_karyawan',
      // data: {
      //     'anakunit': idUnit
      // },
      success: function (data) {
          // the next thing you want to do 
          var $v_select = $('#filter-departemen');
          var item = JSON.parse(data);
          $v_select.empty();
          $v_select.append("<option value=''></option>");
          $.each(item, function(index,valuee) {        
              $v_select.append("<option value='"+valuee.IdUnit+"'>"+valuee.Namaunit+"</option>");
          });

          //manually trigger a change event for the contry so that the change handler will get triggered
          $v_select.change();
      }
  });
}

function submitFilter() {
  // table.el.ajax.url(base_url+'absensiperorang/ajax_list_absensiperorang').load();
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
  table.el.ajax.reload();
}
function reloadTable() {
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
  table.el.ajax.reload();
}