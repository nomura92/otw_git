<!-- BEGIN BREADCRUMBS -->
<div class="breadcrumbs">
    <h1>Form Registrasi Toko Baru</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#!">Beranda</a>
        </li>
        <li>
            <a href="#!menu=list.toko">Toko</a>
        </li>
        <li class="active">Toko Baru</li>
    </ol>
</div>
<!-- END BREADCRUMBS -->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Form Registrasi </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal form-row-seperated" id="formTokoBaru">
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
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
<script type="text/javascript">
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
    }
});
</script>