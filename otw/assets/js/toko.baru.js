//untuk send form toko baru
$(document).on('submit','#formTokoBaru',function(e){
	var form_data = new FormData(this);
	// var formData = new FormData(this);
	// formData.append('file',$('#foto')[0].files[0]);
	$.ajax({
        url: 'ajax/simpan.toko.baru.php',
        type: 'POST',
        data: form_data,
        dataType: 'json',
        cache: false,
	    processData: false, // Don't process the files
	    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
	    async: true,
	    beforeSend: function(){$('#overlay').addClass('show');},
        success: function(data){
        	$('#formTokoBaru')[0].reset();
        	$('input#jalan').addClass('ilang');
        	$('select#kabkot').addClass('ilang');
        	$('select#kecamatan').addClass('ilang');
        	swal('',data.pesan,data.status);
        },
        error: function(xhr, status, error) {swal(xhr.responseText); }
    });
    return false;
});
//untuk hitungan mulai dan berakhir berlangganan
$(document).on('change','#mulaiTanggal,#lamaLangganan',function(e){
	var mulai = $('#mulaiTanggal').val();
	var lama = $('#lamaLangganan').val();

	if(mulai.length>0 && lama.length>0){
		var d =Date.parse(mulai).add(parseInt(lama)).month();
		$('#tanggalBerakhir').val(d.toString('yyyy-M-d'));
	}
});

//untuk tombol kabupaten kota
$(document).on('change','#provinsi',function(e){
	e.stopPropagation();
	var pid = $(this).val();
	if(pid.length>0){
		$.ajax({
		    url: 'ajax/option.kabkot.php',
		    type: 'GET',
		    data: "uid="+pid,
		    dataType: 'json',
		    cache: false,
		    processData: false, // Don't process the files
		    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
		    beforeSend: function(){},
		    success: function(data){
		    	$('select#kabkot').children('option:not(:first)').remove();
		        var items = "";
		        $.each(data.data, function(key,val){
		        	if(val[0].length>0){
		            	items += "<option value='" + val[0] + "'>" + val[1] + "</option>";
		            }
		        });
		        $(items).appendTo("select#kabkot");
		        $('select#kabkot').removeClass('ilang');
		    },
		    error: function(xhr, status, error){swal(xhr.responseText);}
		});
	}
});

//untuk tombol kabupaten kota
$(document).on('change','#kabkot',function(e){
	e.stopPropagation();
	var pid = $(this).val();
	if(pid.length>0){
		$.ajax({
		    url: 'ajax/option.kecamatan.php',
		    type: 'GET',
		    data: "uid="+pid,
		    dataType: 'json',
		    cache: false,
		    processData: false, // Don't process the files
		    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
		    beforeSend: function(){},
		    success: function(data){
		    	$('select#kecamatan').children('option:not(:first)').remove();
		        var items = "";
		        $.each(data.data, function(key,val){
		        	if(val[0].length>0){
		            	items += "<option value='" + val[0] + "'>" + val[1] + "</option>";
		            }
		        });
		        $(items).appendTo("select#kecamatan");
		        $('select#kecamatan').removeClass('ilang');
		    },
		    error: function(xhr, status, error){swal(xhr.responseText);}
		});
	}
});

//untuk tombol kecamatan
$(document).on('change','#kecamatan',function(e){
	e.stopPropagation();
	var pid = $(this).val();
	if(pid.length>0){
		$('input#jalan').removeClass('ilang');
	}
});