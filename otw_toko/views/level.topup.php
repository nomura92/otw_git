<!-- BEGIN BREADCRUMBS -->
<div class="breadcrumbs">
    <h1>TopUP Saldo</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#!">Beranda</a>
        </li>        
        <li class="active">TopUP Saldo</li>
    </ol>
</div>
<!-- END BREADCRUMBS -->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>TopUP Saldo</div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal form-row-seperated" id="formTopUP">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Bank</label>
                    <div class="col-md-9">
                        <select class="form-control" id="bank" name="bank" required>
                            <option value="">Pilih Bank</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jumlah TopUP</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jumlah dengan kode unik</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="jumlahku" id="jumlahku" readonly>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green"><i class="fa fa-save"></i> Ajukan</button>
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
    url: 'ajax/option.bank.php',
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
        $(items).appendTo("#bank");
    }
});
</script>