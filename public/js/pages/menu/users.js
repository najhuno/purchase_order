var table = {
  el: {},
  id: '#table-users'
};

var validateUsers;

$(document).ready(function () {
  $("#filter-username-msg").hide();
  $("#filter-username-error").hide();

  initializeTables();
  initialize_data_groups();
  initialize_data_karyawan();

  $('.add-user').attr('data-toggle','modal');

  jQuery.validator.addMethod("checkA", function(value, element) {
    if(!$('#cek_aupdate').val()){
      if ($('#filter-username').val() == $('#cek_availability').val()){
        return false;
      }else{
        return true;
      }
    }else{
      if ($('#filter-username').val() == $('#cek_aupdate').val()){
        return true;
      }else{
        if ($('#filter-username').val() == $('#cek_availability').val()){
          return false;
        }else{
          return true;
        }
      }
    }
  }, "Username already exists.");

  validateUsers = $("#form__add-user").validate({
     rules: {
        "i_password" : {
            minlength : 5
        },
        "i_repassword" : {
            minlength : 5,
            equalTo : "#filter-password"
        },
        "i_username" : {
          minlength : 5,
          checkA: true,
        }
     },
     messages: {
      'i_username': {
        equalTo : "Username already exists."
      }
     }
  });

  var searchRequest = null;

  $('#filter-username').on('keyup', function(){
      var username = $(this).val();

      if(username.length >= 5){
        // if (searchRequest != null) 
        //     searchRequest.abort();

        searchRequest = $.ajax({
            type: "POST",
            url: base_url+'menu/cek_username',
            data: {
                'username' : username
            },
            success: function(data){
              // if(username == $('#cek_aupdate').val()){
              //     $("#cek_availability").val('');
              // }else{
                if(data == 0){
                  $("#cek_availability").val('');
                  $("#filter-username-error").show();
                }else{
                  $("#cek_availability").val(username);
                  $("#filter-username-error").hide();
                }
              // }
            }
        });
      }else{
        $("#filter-username-msg").hide();
        $("#cek_availability").val('');
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
              {extend: 'csv', title: 'Users', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5]
                }
              },
              {extend: 'pdf', title: 'Users', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5]
                }
              },
              {extend: 'print', title: 'Users', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                },
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4,5]
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable()
                  }
              },
              {text: '<i class="fa fa-user-plus"></i> Add User', className: 'btn btn-default add-user',
                  action: function ( e, dt, node, config ) {
                    cleanModal();
                    $('#myModal').modal('show');
                    $('form').attr('action','store_users');
                  }
              },
            ]
        },
        processing: true,
        ajax: {
          url: base_url+'menu/ajax_list_users',
          method: 'GET',
        },
        "columns": [
            {data: 'iduser'
            },
            {data: 'nik'},
            {data: 'nama'},
            {data: 'user_name'},
            {data: 'status',
             render: function (data, type, row, meta){
                if(row.status == 0){
                  return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.user_id+'" name="status_'+row.user_id+'"/>';
                }else{
                  return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.user_id+'" name="status_'+row.user_id+'" checked/>';
                }
             }
            },
            {data: 'nama_group'},
            {render: function (data, type, row, meta) {
                let btnGroup = `
                  <div class="btn-group">
                    <button type="button" data-user-id="` + row.iduser + `" onclick="doEdit(`+row.iduser+`)" class="btn btn-outline btn-primary btn-md"><i class="fa fa-edit"></i></button>
                    <button type="button" data-user-id="` + row.iduser + `" onclick="doDelete(`+row.iduser+`)" class="btn btn-outline btn-danger btn-md"><i class="fa fa-trash"></i></button>
                  </div>
                `;

                return btnGroup;
              }
            }
        ],
        createdRow: function(row, data, dataIndex){
          this.api().cell($('td:eq(0)', row)).data(dataIndex+1);
          this.api().cell($('td:eq(6)', row).addClass('text-center'));
        },
        "fnDrawCallback": function( oSettings ) {
            $('#ibox1').children('.ibox-content').removeClass('sk-loading');
            $('.bootstrapSwitch').bootstrapSwitch({
                'labelText' : 'Active'
            });
        },
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
  $('.modal-title').html('<i class="fa fa-user-plus"></i>&nbsp;Add User');
  $('.modal-small').html('Tambah User Baru');
  $("#form__add-user input").removeClass('error');
  $("#form__add-user select").removeClass('error');
  validateUsers.resetForm();
  $("#filter-karyawan").val(null)
    .trigger('change');
  $("#filter-groups").val(null)
    .trigger('change');
  $("#filter-username").val(null);
  $("#filter-password").val(null);
  $("#filter-repassword").val(null);
  $("#cek_aupdate").val(null);
  $("#cek_availability").val(null);
  $("#user_group_id").val(null);
  $("#user_id").val(null);
  $("#sys_user_info_id").val(null);
}

function doEdit(el){
  cleanModal();
  $.ajax({
    url:
      base_url + 'menu/get_data_users_fid/' + el,
      method: 'get',
    success: function(response) {
      console.log(response);
      let parse = JSON.parse(response);
      $("#filter-karyawan").val(parse.iduser)
        .trigger('change');
      $("#filter-groups").val(parse.group_id)
        .trigger('change');
      $("#filter-username").val(parse.user_name);
      $("#cek_aupdate").val(parse.user_name);
      $("#filter-password").val(parse.password);
      $("#user_group_id").val(parse.user_group_id);
      $("#user_id").val(parse.user_id);
      $("#sys_user_info_id").val(parse.sys_user_info_id);
      $('#myModal').modal('show');
      $('form').attr('action','update_users');
      $('.modal-title').html('<i class="fa fa-edit"></i>&nbsp;Edit User');
      $('.modal-small').html('Edit User Existing');
    }
  });
}

function doDelete(el){
  cleanModal();
  $.ajax({
    url:
      base_url + 'menu/get_data_users_fid/' + el,
      method: 'get',
    success: function(response) {
      console.log(response);
      let parse = JSON.parse(response);

      swal({
          title: "Apakah ada yakin?",
          text: "User akan terhapus dari database",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          cancelButtonText: "Tidak",
          confirmButtonText: "Ya, saya yakin",
          closeOnConfirm: false
      }, function () {
          $.ajax({
            url:
              base_url + 'menu/delete_users',
              method: 'post',
              data: {
                user_group_id : parse.user_group_id,
                user_id : parse.user_id,
                sys_user_info_id : parse.sys_user_info_id,
              },
            success: function(response) {
              reloadTable();
              swal("Deleted!", "User berhasil dihapus.", "success");
            }
          });
      });

    }
  });
}

function initialize_data_groups(){
  $.ajax({
      type: 'GET',
      url: base_url+'menu/ajax_data_groups',
      // data: {
      //     'anakunit': idUnit
      // },
      success: function (data) {
          // the next thing you want to do 
          var $fgroups = $('#filter-groups');
          var item = JSON.parse(data);
          $fgroups.empty();
          $fgroups.append("<option value=''></option>");
          $.each(item, function(index,valuee) {        
              $fgroups.append("<option value='"+valuee.id+"'>"+valuee.nama_group+"</option>");
          });

          //manually trigger a change event for the contry so that the change handler will get triggered
          $fgroups.change();
      }
  });
}

function initialize_data_karyawan(){
  $.ajax({
      type: 'GET',
      url: base_url+'menu/ajax_data_karyawan',
      // data: {
      //     'anakunit': idUnit
      // },
      success: function (data) {
          // the next thing you want to do 
          var $fgroups = $('#filter-karyawan');
          var item = JSON.parse(data);
          $fgroups.empty();
          $fgroups.append("<option value=''></option>");
          $.each(item, function(index,valuee) {        
              $fgroups.append("<option value='"+valuee.FID+"'>"+valuee.Nama+"</option>");
          });

          //manually trigger a change event for the contry so that the change handler will get triggered
          $fgroups.change();
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