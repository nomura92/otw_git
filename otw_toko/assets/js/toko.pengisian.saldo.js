//untuk hapus pengajuan topUP
$(document).on('click','.hapusTopUP',function(e){
    var id = $(this).data('id');
    e.stopPropagation();
    swal({
      title: "Apa kamu yakin?",
      text: "Data akan di masukkan ke dalam folder sampah!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ya, hapus data!",
      cancelButtonText: "Tidak, batalkan!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
        if(isConfirm){
            $.ajax({
                url: 'ajax/toko.hapus.topUP.php',
                type: 'POST',
                data: {id:id},
                dataType:'json',
                beforeSend: function(){$('#overlay').addClass('show');},
                success: function(data){$('#PengisianSaldoTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
                error: function(xhr, status, error) {$('#loading').css('display','none');swal(xhr.responseText); }
            });
        }else{
            swal("Batal", "Data tidak jadi dihapus", "error");
        }
    });
});
//untuk tolak pengajuan topUP
$(document).on('click','.tolakTopUP',function(e){
    var id = $(this).data('id');
    e.stopPropagation();
    // swal({
    //   title: "Apa kamu yakin?",
    //   text: "",
    //   type: "warning",
    //   showCancelButton: true,
    //   confirmButtonClass: "btn-danger",
    //   confirmButtonText: "Ya, tolak!",
    //   cancelButtonText: "Tidak, batalkan!",
    //   closeOnConfirm: false,
    //   closeOnCancel: false
    // },
    // function(isConfirm) {
    //     if(isConfirm){
    //         $.ajax({
    //             url: 'ajax/toko.tolak.topUP.php',
    //             type: 'POST',
    //             data: {id:id},
    //             dataType:'json',
    //             beforeSend: function(){$('#overlay').addClass('show');},
    //             success: function(data){$('#PengisianSaldoTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
    //             error: function(xhr, status, error) {$('#loading').css('display','none');swal(xhr.responseText); }
    //         });
    //     }else{
    //         swal("Batal", "Batal dilakukan.", "error");
    //     }
    // });
    swal({ 
      title: "Penolakan TopUP",
      text: "Berikan alasan penolakan TopUP :",
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      inputPlaceholder: "Tulis...",
      showLoaderOnConfirm: true
    }, function (inputValue) {
      if (inputValue === false) return false;
      if (inputValue === "") {
        swal.showInputError("Masukan alasan penolakan!");
        return false
      }
      $.ajax({
        url: 'ajax/toko.tolak.topUP.php',
        type: 'POST',
        data: {id:id,pesan:inputValue},
        dataType:'json',
        beforeSend: function(){$('#overlay').addClass('show');},
        success: function(data){$('#PengisianSaldoTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
        error: function(xhr, status, error) {swal(xhr.responseText); }
      });
    });
});
//untuk verifikasi pengajuan topUP
$(document).on('click','.verifyTopUP',function(e){
    var id = $(this).data('id');
    e.stopPropagation();
    swal({
      title: "Apa kamu yakin?",
      text: "",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ya, verifikasi!",
      cancelButtonText: "Tidak, batalkan!",
      closeOnConfirm: false,
      closeOnCancel: false,
      showLoaderOnConfirm: true
    },
    function(isConfirm) {
        if(isConfirm){
            $.ajax({
                url: 'ajax/toko.verifikasi.topUP.php',
                type: 'POST',
                data: {id:id},
                dataType:'json',
                beforeSend: function(){$('#overlay').addClass('show');},
                success: function(data){$('#PengisianSaldoTabel').DataTable().ajax.reload();swal("",data.pesan,data.status);},
                error: function(xhr, status, error) {$('#loading').css('display','none');swal(xhr.responseText); }
            });
        }else{
            swal("Batal", "Batal dilakukan.", "error");
        }
    });
});