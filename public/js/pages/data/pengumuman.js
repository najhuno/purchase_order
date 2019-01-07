var table = {
  el: {},
  id: '#table-pengumuman'
};

$(document).ready(function () {
	initializeTables();
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
              {extend: 'csv', title: 'Data Pengumuman', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3 ]
                }
              },
              {extend: 'pdf', title: 'Data Pengumuman', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3 ]
                }
              },
              {extend: 'print', title: 'Data Pengumuman', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                },
                exportOptions:{
                  columns: [ 0, 1, 2, 3 ]
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable()
                  }
              },
              {text: '<i class="fa fa-plus"></i> Add Pengumuman', className: 'btn btn-default add-user',
                  action: function ( e, dt, node, config ) {
                    cleanModal();
                    $('#myModal').modal('show');
                  }
              },
            ]
        },
        processing: true,
		ajax : {
			url : base_url+"data/ajax_data_pengumuman",
			method : "POST"
		},
		"columns" : [
            {
              "data": "id",
              render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
			{data:"pengumuman_title"},
			// {data:"pengumuman_isi"},
			{data:"pengumuman_status",
             render: function (data, type, row, meta){
                if(row.pengumuman_status == 0){
                  return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.pengumuman_id+'" name="status_'+row.pengumuman_id+'"/>';
                }else{
                  return '<input class="bootstrapSwitch" type="checkbox" id="status_'+row.pengumuman_id+'" name="status_'+row.pengumuman_id+'" checked/>';
                }
             }
            },
			{data:"Nama"},
			{data:"pengumuman_date"},
            {render: function (data, type, row, meta) {
                let btnGroup = `
                  <div class="btn-group">
                    <button type="button" data-user-id="` + row.pengumuman_id + `" onclick="doEdit(`+row.pengumuman_id+`)" class="btn btn-outline btn-primary btn-md"><i class="fa fa-edit"></i></button>
                    <button type="button" data-user-id="` + row.pengumuman_id + `" onclick="doDelete(`+row.pengumuman_id+`)" class="btn btn-outline btn-danger btn-md"><i class="fa fa-trash"></i></button>
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
            $('.bootstrapSwitch').bootstrapSwitch({
                'labelText' : 'Active'
            });
        }
	});

  $(table.id).on('switchChange.bootstrapSwitch', '.bootstrapSwitch', function(event, state) {
    var el_name = this.getAttribute("name");
    var arr_name = el_name.split('_');
    var id = arr_name[1];
    var status = (state == true) ? 1 : 0;
    var jsonVariable = {};
    jsonVariable["pengumuman_id"] = id;
    jsonVariable["status"] = status;
    $.ajax({
        url: base_url + "data/update_status",
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
  $('.modal-title').html('<i class="fa fa-plus"></i>&nbsp;Add Pengumuman');
  $('.modal-small').html('Tambah Pengumuman Baru');
  // $("#form__add-pengumuman input").removeClass('error');
  // $("#form__add-pengumuman select").removeClass('error');
  // validateKaryawan.resetForm();
  $("#i-id").val(null);
  $("#i-judul").val(null);
  $("#i-isi").html(null);
  $('form').attr('action','store_pengumuman');
}

function doEdit(el){
  cleanModal();
  $.ajax({
    url:
      base_url + 'data/get_pengumuman_by_id/' + el,
      method: 'get',
    success: function(response) {
      console.log(response);
      let parse = JSON.parse(response);
      $("#i-id").val(parse.pengumuman_id);
	  $("#i-judul").val(parse.pengumuman_title);
	  $("#i-isi").html(parse.pengumuman_isi);
      $('#myModal').modal('show');
      $('form').attr('action','update_pengumuman');
      $('.modal-title').html('<i class="fa fa-edit"></i>&nbsp;Edit Pengumuman');
      $('.modal-small').html('Edit Pengumuman Existing');
    }
  });
}

function doDelete(el){
  cleanModal();
  swal({
      title: "Apakah ada yakin?",
      text: "Pengumuman akan terhapus dari database",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      cancelButtonText: "Tidak",
      confirmButtonText: "Ya, saya yakin",
      closeOnConfirm: false
  }, function () {
      $.ajax({
        url:
          base_url + 'data/delete_pengumuman',
          method: 'post',
          data: {
            pengumuman_id : el,
          },
        success: function(response) {
          reloadTable();
          swal("Deleted!", "Pengumuman berhasil dihapus.", "success");
        }
      });
  });
}

function reloadTable() {
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
  table.el.ajax.reload();
}