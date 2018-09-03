<!-- BEGIN BREADCRUMBS -->
<div class="breadcrumbs">
    <h1>Order Baru</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#!">Beranda</a>
        </li>
        <li class="active">Order Baru</li>
    </ol>
</div>
<!-- END BREADCRUMBS -->
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light ">
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="OrderTabel">
            <thead>
                <tr>
                    <th> No Telp Pemesan </th>
                    <th> Nama Pemesan </th>
                    <th> Tanggal Order </th>
                    <th> Alamat </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade bs-modal-lg" id="modalDetailOrder" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="formSistemProduk" class="modal-content">
            <input type="hidden" name="type" id="type" value="">
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Detail Order</h4>
            </div>
            <div class="modal-body">
                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END EXAMPLE TABLE PORTLET-->
<script type="text/javascript">
// var table = $('#pasien').DataTable( {
//     ajax: 'ajax/pasien.php',order: [[ 0, "desc" ]]
// });
// $.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) { 
//     Swal(message);
// };

var table = $('#OrderTabel');

// begin first table
table.dataTable({
    ajax: 'ajax/order.proses.php',
    serverPaging: true,
    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
    "language": {
        "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        },
        "emptyTable": "Tidak ada data tersedia.",
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty": "Tidak ada data ditemukan.",
        "infoFiltered": "(filtered1 dari _MAX_ total data)",
        "lengthMenu": "Show _MENU_",
        "search": "Search:",
        "zeroRecords": "Tidak ada data yang cocok",
        "paginate": {
            "previous":"Prev",
            "next": "Next",
            "last": "Last",
            "first": "First"
        }
    },

    // Or you can use remote translation file
    //"language": {
    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
    //},

    // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
    // So when dropdowns used the scrollable div should be removed. 
    //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

    "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

    "lengthMenu": [
        [5, 15, 20, -1],
        [5, 15, 20, "All"] // change per page values here
    ],
    // set the initial value
    "pageLength": 5,            
    "pagingType": "bootstrap_full_number",
    "columnDefs": [
        {  // set default column settings
            "width": "100px", "targets": 3
        },
    ],
});
</script>