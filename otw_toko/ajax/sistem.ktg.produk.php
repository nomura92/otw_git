<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlKtgProduk = "select * from otw_ktg_produk where hapus=0 and id_toko='$_SESSION[id_toko]'";

$ktgProduk = $ms->bacaAll($sqlKtgProduk);
$cek = $ms->cek($sqlKtgProduk);

if($cek > 0){
	foreach ($ktgProduk as $baris) {
		$btnGroup = "<div class='btn-group'>
                            <button class='btn btn-xs green dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'> Actions
                                <i class='fa fa-angle-down'></i>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                                <li>
                                    <a href='#modalKtgProduk' data-toggle='modal' data-type='lama' data-id='$baris->id_ktg_produk' data-kategori='$baris->nm_ktg_produk'><i class='fa fa-edit'></i> Ubah </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusKtgProduk' data-id='$baris->id_ktg_produk'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_ktg_produk,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>