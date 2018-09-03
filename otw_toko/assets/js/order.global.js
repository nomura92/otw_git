$(document).on('shown.bs.modal','#OrderTabel', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var id = button.data('id');
  var modal = $(this);
  
});
//proses
$(document).on('click','.prosesOrder',function(e){
	var id = $(this).data('id');
	e.stopPropagation();
	swal({
	  title: "Apa kamu yakin?",
	  text: "Order akan dimasukan ke dalam kategori order diproses",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, proses order!",
	  cancelButtonText: "Tidak, batalkan.!",
	  closeOnConfirm: false,
	  closeOnCancel: false,
	  showLoaderOnConfirm: true
	},
	function(isConfirm) {
		if(isConfirm){
			$.ajax({
		        url: 'ajax/order.aksi.proses.php',
		        type: 'POST',
		        data: {id:id},
		        dataType:'json',
			    beforeSend: function(){$('#overlay').addClass('show');},
		        success: function(data){$('#OrderTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
		        error: function(xhr, status, error) {swal(xhr.responseText); }
		    });
		}else{
    		swal("Batal", "Data tidak jadi diproses", "error");
		}
	});
});
//batal
$(document).on('click','.batalOrder',function(e){
	var id = $(this).data('id');
	e.stopPropagation();
	swal({
	  title: "Apa kamu yakin?",
	  text: "Order akan dibatalkan!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, batalkan order!",
	  cancelButtonText: "Tidak!",
	  closeOnConfirm: false,
	  closeOnCancel: false,
	  showLoaderOnConfirm: true
	},
	function(isConfirm) {
		if(isConfirm){
			$.ajax({
		        url: 'ajax/order.aksi.batal.php',
		        type: 'POST',
		        data: {id:id},
		        dataType:'json',
			    beforeSend: function(){$('#overlay').addClass('show');},
		        success: function(data){$('#OrderTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
		        error: function(xhr, status, error) {swal(xhr.responseText); }
		    });
		}else{
    		swal("Batal", "Order tidak jadi dibatalkan", "error");
		}
	});
});
//blokir
$(document).on('click','.blokirOrder',function(e){
	var id = $(this).data('id');
	e.stopPropagation();
	swal({
	  title: "Apa kamu yakin?",
	  text: "No telp pemesan akan dimasukkan ke dalam black list!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, masukkan!",
	  cancelButtonText: "Tidak, batalkan.!",
	  closeOnConfirm: false,
	  closeOnCancel: false,
	  showLoaderOnConfirm: true
	},
	function(isConfirm) {
		if(isConfirm){
			$.ajax({
		        url: 'ajax/order.aksi.blokir.php',
		        type: 'POST',
		        data: {id:id},
		        dataType:'json',
			    beforeSend: function(){$('#overlay').addClass('show');},
		        success: function(data){$('#OrderTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
		        error: function(xhr, status, error) {swal(xhr.responseText); }
		    });
		}else{
    		swal("Batal", "No Telp pemesan tidak jadi diblokir", "error");
		}
	});
});
//sukses
$(document).on('click','.suksesOrder',function(e){
	var id = $(this).data('id');
	e.stopPropagation();
	swal({
	  title: "Apa kamu yakin?",
	  text: "Order telah sukses dilaksanakan!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, berhasil!",
	  cancelButtonText: "Tidak, batalkan.!",
	  closeOnConfirm: false,
	  closeOnCancel: false,
	  showLoaderOnConfirm: true
	},
	function(isConfirm) {
		if(isConfirm){
			$.ajax({
		        url: 'ajax/order.aksi.sukses.php',
		        type: 'POST',
		        data: {id:id},
		        dataType:'json',
			    beforeSend: function(){$('#overlay').addClass('show');},
		        success: function(data){$('#OrderTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
		        error: function(xhr, status, error) {swal(xhr.responseText); }
		    });
		}else{
    		swal("Batal", "No Telp pemesan tidak jadi diblokir", "error");
		}
	});
});