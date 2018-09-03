<!-- BEGIN BREADCRUMBS -->
<div class="breadcrumbs">
    <h1>List Toko</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#!">Beranda</a>
        </li>
        <li class="active">List Toko</li>
    </ol>
</div>
<!-- END BREADCRUMBS -->
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light ">
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a class="btn sbold green" data-toggle="modal" data-type="baru" href="#modalToko"> Tambah Baru
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="TokoTabel">
            <thead>
                <tr>
                    <th> Nama Toko </th>
                    <th> Kategori </th>
                    <th> Provinsi<br>Kabupaten/Kota<br>Kecamatan<br>Alamat </th>
                    <th> No Telp Pengelola </th>
                    <th> Call Center </th>
                    <th> Saldo </th>
                    <th> Jenis Member<br>Item </th>
                    <th> Lama <br> (bulan) </th>
                    <th> Mulai </th>
                    <th> Sampai </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<!-- /.modal -->
<div class="modal fade bs-modal-lg" id="modalToko" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="formTokoBaru2" class="modal-content">
            <input type="hidden" name="type" id="type" value="">
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Form Toko</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Toko</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nama" name="nama" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <select class="form-control mb10" id="provinsi" required>
                                    <option value="">Provinsi</option>
                                </select>
                                <select class="form-control mb10 ilang" id="kabkot" required>
                                    <option value="">Kabupaten/Kota</option>
                                </select>
                                <select class="form-control mb10 ilang" id="kecamatan" name="kecamatan" required>
                                    <option value="">Kecamatan</option>
                                </select>
                                <input type="text" id="jalan" name="alamat" placeholder="ex: Jalan Sudirman no.1" class="form-control ilang" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No Telp Pengelola</label>
                            <div class="col-md-9">
                                <input type="text"  class="form-control mask_number" id="no_telp" name="no_telp" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Foto Toko</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kategori Toko</label>
                            <div class="col-md-9">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="">Kategori</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Member</label>
                            <div class="col-md-9">
                                <select class="form-control" id="jenis_member" name="jenis_member" required>
                                    <option value="">Jenis Member</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="" id="password" name="password" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Call Center</label>
                            <div class="col-md-9">
                                <input type="text"  class="form-control mask_number" id="call_center" name="call_center" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Hari Buka</label>
                            <div class="col-md-9">
                                <select class="form-control" id="hari_buka" name="hari_buka[]" multiple>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jam Buka</label>
                            <div class="col-md-9">
                                <select class="form-control" id="jam_buka" name="jam_buka[]" multiple>
                                    <option value='0'>00:00</option>
                                    <option value='1'>01:00</option>
                                    <option value='2'>02:00</option>
                                    <option value='3'>03:00</option>
                                    <option value='4'>04:00</option>
                                    <option value='5'>05:00</option>
                                    <option value='6'>06:00</option>
                                    <option value='7'>07:00</option>
                                    <option value='8'>08:00</option>
                                    <option value='9'>09:00</option>
                                    <option value='10'>10:00</option>
                                    <option value='11'>11:00</option>
                                    <option value='12'>12:00</option>
                                    <option value='13'>13:00</option>
                                    <option value='14'>14:00</option>
                                    <option value='15'>15:00</option>
                                    <option value='16'>16:00</option>
                                    <option value='17'>17:00</option>
                                    <option value='18'>18:00</option>
                                    <option value='19'>19:00</option>
                                    <option value='20'>20:00</option>
                                    <option value='21'>21:00</option>
                                    <option value='22'>22:00</option>
                                    <option value='23'>23:00</option>
                                    <option value='24'>24:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Saldo Awal</label>
                            <div class="col-md-9">
                                <input type="text"  class="form-control mask_number" id="saldo" name="saldo" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Lama Berlangganan</label>
                            <div class="col-md-9">
                                <input type="text" id="lamaLangganan" class="form-control mask_number" name="lama" required/>
                                <span class="help-block"> bulan </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mulai Berlangganan</label>
                            <div class="col-md-9">
                                <input type="text" id="mulaiTanggal" class="form-control date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d" name="mulai" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Berakhir</label>
                            <div class="col-md-9">
                                <input type="text" id="tanggalBerakhir" class="form-control" name="sampai" readonly/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn green">Simpan</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--FORM UPDATE TOKO-->
<div class="modal fade bs-modal-lg" id="modalTokoUpdate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="formTokoUpdate" class="modal-content">
            <input type="hidden" name="type" id="type" value="">
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Member</label>
                            <div class="col-md-9">
                                <select class="form-control" id="jenis_member2" name="jenis_member" required>
                                    <option value="">Jenis Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn green">Update</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--FORM PERPANJANG TOKO-->
<div class="modal fade bs-modal-lg" id="modalTokoPerpanjangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="formTokoPerpanjangan" class="modal-content">
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Perpanjang</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Mulai</label>
                            <div class="col-md-9">
                                <input type="text" value="" readonly/>
                                <span class="help-block">Tanggal mulai adalah tanggal berakhir kontrak pertama.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Lama</label>
                            <div class="col-md-9">
                                <input type="text" id="lamaLangganan2" name="lamaLangganan" class="form-control mask_number" required/>
                                <span class="help-block"> bulan </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Berakhir</label>
                            <div class="col-md-9">
                                <input type="text" id="tanggalBerakhir2" value="" readonly/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn green">Perpanjang</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--FORM UPDATE TOKO-->
<div class="modal fade bs-modal-lg" id="modalTokoTopUP" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="formTokoTopUP" class="modal-content">
            <input type="hidden" name="type" id="type" value="">
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">TopUP</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah TopUP</label>
                            <div class="col-md-9">
                                <input type="text" id="jml_topUP" name="jml_topUP" class="form-control mask_number" required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn green">Simpan</button>
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

var table = $('#TokoTabel');

// begin first table
table.dataTable({
    ajax: 'ajax/toko.list.php',
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

//Data Provinsi
$.ajax({
    url: 'ajax/option.provinsi.php',
    type: 'POST',
    dataType: 'json',
    cache: false,
    processData: false, // Don't process the files
    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
    beforeSend: function(){},
    success: function(data){
        var items = "";
        $.each(data.data, function(key,val){
            items += "<option value='" + val[0] + "'>" + val[1] + "</option>";
        });
        $(items).appendTo("#provinsi");
    }
});
//Kategori Toko
$.ajax({
    url: 'ajax/option.ktg.toko.php',
    type: 'POST',
    dataType: 'json',
    cache: false,
    processData: false, // Don't process the files
    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
    beforeSend: function(){},
    success: function(data){
        var items = "";
        $.each(data.data, function(key,val){
            items += "<option value='" + val[0] + "'>" + val[1] + "</option>";
        });
        $(items).appendTo("#kategori");
    }
});
//Jenis Member
$.ajax({
    url: 'ajax/option.jenis.member.php',
    type: 'POST',
    dataType: 'json',
    cache: false,
    processData: false, // Don't process the files
    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
    beforeSend: function(){},
    success: function(data){
        var items = "";
        $.each(data.data, function(key,val){
            items += "<option value='" + val[0] + "'>" + val[1] + "</option>";
        });
        $(items).appendTo("#jenis_member");
        $(items).appendTo("#jenis_member2");
    }
});
</script>