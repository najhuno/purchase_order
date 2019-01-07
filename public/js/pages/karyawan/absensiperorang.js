var table = {
  el: {},
  id: '#table-absensiperorang'
};

$(document).ready(function () {

  initializeTables();

  $('#filter-unit').change(function () {
    // var id = $(this).find(':selected')[0].id;
    var idUnit = $('#filter-unit :selected').val();
    //alert(id); 
    $.ajax({
        type: 'POST',
        url: base_url+'karyawan/ajax_sub_unit',
        data: {
            'anakunit': idUnit
        },
        success: function (data) {
            // the next thing you want to do 
            var $subunit = $('#filter-subunit');
            var item = JSON.parse(data);
            $subunit.empty();
            $subunit.append("<option value=''></option>");
            $.each(item, function(index,valuee) {        
                $subunit.append("<option value='"+valuee.IdUnit+"'>"+valuee.Namaunit+"</option>");
            });

            //manually trigger a change event for the contry so that the change handler will get triggered
            $subunit.change();
        }
    });
  });

  $('#filter-subunit').change(function () {
    // var id = $(this).find(':selected')[0].id;
    var idUnit = $('#filter-subunit :selected').val();
    //alert(id); 
    $.ajax({
        type: 'POST',
        url: base_url+'karyawan/ajax_staff',
        data: {
            'dept_name': idUnit
        },
        success: function (data) {
            // the next thing you want to do 
            var $fnama = $('#filter-nama');
            var item = JSON.parse(data);
            $fnama.empty();
            $fnama.append("<option value=''></option>");
            $.each(item, function(index,valuee) {        
                $fnama.append("<option value='"+valuee.FID+"'>"+valuee.Nama+"</option>");
            });

            //manually trigger a change event for the contry so that the change handler will get triggered
            $fnama.change();
        }
    });
  });

});

function initializeTables(){

  table.el = $(table.id).DataTable({
        "sDom": '<"html5buttons"B>lTgtr',  
        responsive: true,
        "pageLength": 100,
        buttons: {
          dom: {
            button: {
              tag: 'button',
              className: ''
            }
          },
          buttons: [
              {extend: 'csv', title: 'Absensi Per Orang', className: 'btn btn-default'},
              {extend: 'pdf', title: 'Absensi Per Orang', className: 'btn btn-default'},
              {extend: 'print', title: 'Absensi Per Orang', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable()
                  }
              }
            ]
        },
        processing: true,
        ajax: {
          url: base_url+'karyawan/ajax_list_test',
          method: 'POST',
          data : function(data){
            data.tahun = $("#filter-tahun").val();
            data.bulan = $("#filter-bulan").val();
            data.apb1 = $("#filter-unit").val();
            data.apb2 = $("#filter-subunit").val();
            data.nama = $("#filter-nama").val();
          }
        },
        createdRow: function(row, data, dataIndex){
            console.log(data);
            // If name is "Ashton Cox"
            if(data[1] === 'Sabtu' || data[1] === 'Minggu'){
                this.api().cell($('td:eq(1)', row)).data('<span class="text-danger">'+data[1]+'</span>');
                this.api().cell($('td:eq(0)', row)).data('<span class="text-danger">'+data[0]+'</span>');
            }

            if(data[2] === 'Masuk'){
              this.api().cell($('td:eq(2)', row)).data('<span class="text-success">'+data[2]+'</span>');
              if(data[3] > '07:30:00'){
                this.api().cell($('td:eq(3)', row)).data('<span class="text-danger">'+data[3]+'</span>');
              }
            }else if(data[2] === 'Belum Jelas'){
                // Add COLSPAN attribute
                this.api().cell($('td:eq(0)', row).addClass('bg-muted'));
                this.api().cell($('td:eq(1)', row).addClass('bg-muted'));
                this.api().cell($('td:eq(2)', row).addClass('bg-muted'));
                $('td:eq(2)', row).attr('colspan', 8);

                // Hide required number of columns
                // next to the cell with COLSPAN attribute
                $('td:eq(3)', row).css('display', 'none');
                $('td:eq(4)', row).css('display', 'none');
                $('td:eq(5)', row).css('display', 'none');
                $('td:eq(6)', row).css('display', 'none');
                $('td:eq(7)', row).css('display', 'none');
                $('td:eq(8)', row).css('display', 'none');
                $('td:eq(9)', row).css('display', 'none');
                this.api().cell($('td:eq(10)', row).addClass('bg-muted'));

                // Update cell data
                // this.api().cell($('td:eq(1)', row)).data('N/A');
            }

            if(data[8] && data[8] !== '-'){
                // this.api().cell($('td:eq(2)', row)).data(data[10]);
                $('td:eq(2)', row).attr('colspan', 6);
                $('td:eq(3)', row).css('display', 'none');
                $('td:eq(4)', row).css('display', 'none');
                $('td:eq(5)', row).css('display', 'none');
                $('td:eq(6)', row).css('display', 'none');
                $('td:eq(7)', row).css('display', 'none');
                this.api().cell($('td:eq(3)', row)).data('-');
                this.api().cell($('td:eq(4)', row)).data('-');
                this.api().cell($('td:eq(5)', row)).data('-');
                this.api().cell($('td:eq(6)', row)).data('-');
                this.api().cell($('td:eq(7)', row)).data('-');
            }
            if(data[11] == 3 && data[3] === '-'){
                this.api().cell($('td:eq(0)', row).addClass('bg-info'));
                this.api().cell($('td:eq(1)', row).addClass('bg-info'));
                this.api().cell($('td:eq(2)', row).addClass('bg-info'));
                this.api().cell($('td:eq(8)', row).addClass('bg-info'));
                this.api().cell($('td:eq(9)', row).addClass('bg-info'));
                this.api().cell($('td:eq(10)', row).addClass('bg-info'));
            }
        },
        "fnDrawCallback": function( oSettings ) {
            $('#ibox1').children('.ibox-content').removeClass('sk-loading');
        }
  });
}

function submitFilter() {
  // table.el.ajax.url(base_url+'karyawan/ajax_list_absensiperorang').load();
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
	table.el.ajax.reload();
}
function reloadTable() {
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
  table.el.ajax.reload();
}