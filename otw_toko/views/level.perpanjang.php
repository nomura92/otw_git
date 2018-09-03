<!-- BEGIN BREADCRUMBS -->
<div class="breadcrumbs">
    <h1>Perpanjang Membership</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#!">Beranda</a>
        </li>        
        <li class="active">Perpanjang Membership</li>
    </ol>
</div>
<!-- END BREADCRUMBS -->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Perpanjang Membership</div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal form-row-seperated" id="formPerpanjang">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Lama</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="lama" id="lama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Level/Server</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="berakhir" id="berakhir" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Berakhir</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="berakhir" id="berakhir" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Total Biaya</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" id="tBiaya" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <p>Tanggal perpanjangan level/server akan dimulai pada saat waktu sebelumnya telah berakhir.</p>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green"><i class="fa fa-save"></i> Perpanjang</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
<script type="text/javascript">
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