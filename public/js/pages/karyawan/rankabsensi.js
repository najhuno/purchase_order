var table = {
  el: {},
  id: '#table-risingstar'
};

var table_late = {
  el: {},
  id: '#table-latestar'
};

$(document).ready(function() {
	initializeTable();
	initializeTableLate();
});

function initializeTable(){
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
              {extend: 'csv', title: 'Karyawan Rising Star', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {extend: 'pdf', title: 'Karyawan Rising Star', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {extend: 'print', title: 'Karyawan Rising Star', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                },
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable('rising')
                  }
              },
            ]
        },
        processing: true,
        ajax : {
        	url : base_url+"karyawan/ajax_rank_absensi",
        	method : 'POST',
          data : function(data){
            data.tahun = $("#filter-tahun").val();
            data.bulan = $("#filter-bulan").val();
            data.orderby = 'before';
          }
        },
        "columns": [
            {
              "data": "id",
              render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            {data: 'FID'},
            {data: 'Nama'},
            {data: 'Bulan'},
            {data: 'before_time'},
            // {data: 'after_time'}
        ],
        createdRow: function(row, data, dataIndex){
        	console.log(data.before_time);
        	if(dataIndex == 0 && data.before_time > 0){
	            this.api().cell($('td:eq(0)', row).addClass('bg-primary'));
	            this.api().cell($('td:eq(1)', row).addClass('bg-primary'));
	            this.api().cell($('td:eq(2)', row).addClass('bg-primary'));
	            this.api().cell($('td:eq(3)', row).addClass('bg-primary'));
	            this.api().cell($('td:eq(4)', row).addClass('bg-primary'));
	            this.api().cell($('td:eq(5)', row).addClass('bg-primary'));
        	}
        },
        "fnDrawCallback": function( oSettings ) {
            $('#ibox1').children('.ibox-content').removeClass('sk-loading');
        }
	});
}

function initializeTableLate(){
	table_late.el = $(table_late.id).DataTable({
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
              {extend: 'csv', title: 'Karyawan Late Star', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {extend: 'pdf', title: 'Karyawan Late Star', className: 'btn btn-default',
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {extend: 'print', title: 'Karyawan Late Star', className: 'btn btn-default',
               customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');

                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                },
                exportOptions:{
                  columns: [ 0, 1, 2, 3, 4 ]
                }
              },
              {text: '<i class="fa fa-refresh"></i>', className: 'btn btn-default',
                  action: function ( e, dt, node, config ) {
                      reloadTable('late')
                  }
              },
            ]
        },
        processing: true,
        ajax : {
        	url : base_url+"karyawan/ajax_rank_absensi",
        	method : 'POST',
          data : function(data){
            data.tahun = $("#filter-tahun-late").val();
            data.bulan = $("#filter-bulan-late").val();
            data.orderby = 'after';
          }
        },
        "columns": [
            {
              "data": "id",
              render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            {data: 'FID'},
            {data: 'Nama'},
            {data: 'Bulan'},
            // {data: 'before_time'},
            {data: 'after_time'}
        ],
        createdRow: function(row, data, dataIndex){
        	console.log(data.after_time);
        	if(dataIndex == 0 && data.after_time > 0){
	            this.api().cell($('td:eq(0)', row).addClass('bg-danger'));
	            this.api().cell($('td:eq(1)', row).addClass('bg-danger'));
	            this.api().cell($('td:eq(2)', row).addClass('bg-danger'));
	            this.api().cell($('td:eq(3)', row).addClass('bg-danger'));
	            this.api().cell($('td:eq(4)', row).addClass('bg-danger'));
	            this.api().cell($('td:eq(5)', row).addClass('bg-danger'));
        	}
        },
        "fnDrawCallback": function( oSettings ) {
            $('#ibox2').children('.ibox-content').removeClass('sk-loading');
        }
	});
}

function submitFilter(param) {
  // table.el.ajax.url(base_url+'karyawan/ajax_list_absensiperorang').load();
  if(param =='rising'){
  	$('#ibox1').children('.ibox-content').addClass('sk-loading');
	table.el.ajax.reload();
  }else{
  	$('#ibox2').children('.ibox-content').addClass('sk-loading');
	table_late.el.ajax.reload();
  }
}
function reloadTable(param) {
  if(param =='rising'){
	$('#ibox1').children('.ibox-content').addClass('sk-loading');
	table.el.ajax.reload();
  }else{
	$('#ibox2').children('.ibox-content').addClass('sk-loading');
	table_late.el.ajax.reload();
  }
}