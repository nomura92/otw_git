//untuk send form toko baru 2
$(document).on('submit','#formTokoBaru2',function(e){
	var form_data = new FormData(this);
	// var formData = new FormData(this);
	// formData.append('file',$('#foto')[0].files[0]);
	$.ajax({
        url: 'ajax/simpan.toko.php',
        type: 'POST',
        data: form_data,
        dataType: 'json',
        cache: false,
	    processData: false, // Don't process the files
	    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
	    async: true,
	    beforeSend: function(){$('#overlay').addClass('show');},
        success: function(data){
            $('#TokoTabel').DataTable.reload();
        	$('input#jalan').addClass('ilang');
        	$('select#kabkot').addClass('ilang');
        	$('select#kecamatan').addClass('ilang');
        	swal('',data.pesan,data.status);
        },
        error: function(xhr, status, error) {swal(xhr.responseText); }
    });
    return false;
});
//Saat menampilkan modal untuk tombol ubah data
$(document).on('shown.bs.modal','#modalToko', function (event) {
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
    $('#formTokoBaru2')[0].reset();
    modal.find('#type').val(type);
  }
});
//untuk tombol hapus
$(document).on('click','.hapusToko',function(e){
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
      closeOnCancel: false
    },
    function(isConfirm) {
        if(isConfirm){
            $.ajax({
                url: 'ajax/hapus.toko.php',
                type: 'POST',
                data: {id:id},
                dataType:'json',
                beforeSend: function(){$('#overlay').addClass('show');},
                success: function(data){$('#TokoTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
                error: function(xhr, status, error) {$('#loading').css('display','none');swal(xhr.responseText); }
            });
        }else{
            swal("Batal", "Data tidak jadi dihapus", "error");
        }
    });
});