var table = {
  el: {},
  id: '#table-absensiharianapb'
};

$(document).ready(function () {

  initializeTables();

 $('#filter-bulan').change(function () {
    // var id = $(this).find(':selected')[0].id;
    var tahun = $('#filter-tahun :selected').val();
    var bulan = $('#filter-bulan :selected').val();
    //alert(id); 
    $.ajax({
        type: 'POST',
        url: base_url+'karyawan/ajax_hari',
        data: {
            'tahun': tahun,
            'bulan': bulan
        },
        success: function (data) {
            // the next thing you want to do 
            var $fnama = $('#filter-hari');
            var item = JSON.parse(data);
            $fnama.empty();
            $fnama.append("<option value=''></option>");
            $.each(item, function(index,valuee) {        
                $fnama.append("<option value='"+valuee.Tgl+"'>"+valuee.Tgl+" - "+valuee.Hari+"</option>");
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
              {extend: 'csv', title: 'Absensi Harian Pegawai APB', className: 'btn btn-default'},
              {extend: 'pdf', title: 'Absensi Harian Pegawai APB', className: 'btn btn-default'},
              {extend: 'print', title: 'Absensi Harian Pegawai APB', className: 'btn btn-default',
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
          url: base_url+'karyawan/ajax_list_harianapb',
          method: 'POST',
          data : function(data){
            data.tahun = $("#filter-tahun").val();
            data.bulan = $("#filter-bulan").val();
            data.hari = $("#filter-hari").val();
          }
       
        },
        createdRow: function(row, data, dataIndex){
            console.log(data);
            // If name is "Ashton Cox"
           // if(data[1] === 'Sabtu' || data[1] === 'Minggu'){
           //     this.api().cell($('td:eq(1)', row)).data('<span class="text-danger">'+data[1]+'</span>');
           //     this.api().cell($('td:eq(0)', row)).data('<span class="text-danger">'+data[0]+'</span>');
           // }

            if(data[3] === 'Masuk'){
              this.api().cell($('td:eq(3)', row)).data('<span class="text-success">'+data[3]+'</span>');
            }else if(data[3] === 'Belum Jelas'){
                // Add COLSPAN attribute
                this.api().cell($('td:eq(0)', row).addClass('bg-muted'));
                this.api().cell($('td:eq(1)', row).addClass('bg-muted'));
                this.api().cell($('td:eq(2)', row).addClass('bg-muted'));
                this.api().cell($('td:eq(3)', row).addClass('bg-muted'));
                $('td:eq(3)', row).attr('colspan', 8);

                // Hide required number of columns
                // next to the cell with COLSPAN attribute
                $('td:eq(4)', row).css('display', 'none');
                $('td:eq(5)', row).css('display', 'none');
                $('td:eq(6)', row).css('display', 'none');
                $('td:eq(7)', row).css('display', 'none');
                $('td:eq(8)', row).css('display', 'none');
                $('td:eq(9)', row).css('display', 'none');
                $('td:eq(10)', row).css('display', 'none');

                // Update cell data
                // this.api().cell($('td:eq(1)', row)).data('N/A');
            }

            if(data[10] && data[10] !== '-'){
                this.api().cell($('td:eq(3)', row)).data(data[11]);
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

/*function initializeTables2a() {
   processing: true,
        ajax: {
          url: base_url+'karyawan/ajax_list_harian',
          method: 'POST',
          data : function(data){
            data.tahun = $("#filter-tahun").val();
            data.bulan = $("#filter-bulan").val();
            data.hari = $("#filter-hari").val();
            data.apb1 = $("#filter-unit").val();
            data.apb2 = $("#filter-subunit").val();
            // data.nama = $("#filter-nama").val();
          }
}*/


function submitFilter() {
  // table.el.ajax.url(base_url+'karyawan/ajax_list_absensiperorang').load();
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
	table.el.ajax.reload();
}
function reloadTable() {
  $('#ibox1').children('.ibox-content').addClass('sk-loading');
  table.el.ajax.reload();
}