$(document).on('submit','#formSistemLevel', function(e){
    var form_data = new FormData(this);                  
	// var formData = new FormData(this);
	// formData.append('file',$('#foto')[0].files[0]);
	$.ajax({
        url: 'ajax/simpan.sistem.level.php',
        type: 'POST',
        data: form_data,
        dataType: 'json',
        cache: false,
	    processData: false, // Don't process the files
	    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
	    async: true,
	    beforeSend: function(){$('#overlay').addClass('show');},
        success: function(data){$('#sLevelTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
        error: function(xhr, status, error) {swal(xhr.responseText); }
    });
    $('#modalLevel').modal('hide');
	return false;
});
$(document).on('shown.bs.modal','#modalLevel', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var type = button.data('type'); // Extract info from data-* attributes
  var id = button.data('id');
  var modal = $(this);
  if(type=="lama"){
  	modal.find('#type').val(type);
  	modal.find('#id').val(id);
  	modal.find('#nama').val(button.data('nama'));
  	modal.find('#biaya').val(button.data('biaya'));
  	modal.find('#banyak').val(button.data('banyak'));
  }else if(type=="baru"){
  	modal.find('#type').val(type);
  	modal.find('#nama').val("");
  	modal.find('#biaya').val("");
  	modal.find('#banyak').val("");
  }
});
$(document).on('click','.hapusLevel',function(e){
	var id = $(this).data('id');
	e.stopPropagation();
	swal({
	  title: "Apa kamu yakin?",
	  text: "Data akan di masukkan ke dalam folder sampah!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, hapus data!",
	  cancelButtonText: "Tidak, batalkan.!",
	  closeOnConfirm: false,
	  closeOnCancel: false,
	  showLoaderOnConfirm: true
	},
	function(isConfirm) {
		if(isConfirm){
			$.ajax({
		        url: 'ajax/hapus.sistem.level.php',
		        type: 'POST',
		        data: {id:id},
		        dataType:'json',
			    beforeSend: function(){$('#overlay').addClass('show');},
		        success: function(data){$('#sLevelTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
		        error: function(xhr, status, error) {$('#loading').css('display','none');swal(xhr.responseText); }
		    });
		}else{
    		swal("Batal", "Data tidak jadi dihapus", "error");
		}
	});
});