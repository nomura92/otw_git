<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlRombel = "select * from otw_produk a,otw_ktg_produk b where a.id_ktg_produk=b.id_ktg_produk and a.hapus=0";

$rombel = $ms->bacaAll($sqlRombel);
$cek = $ms->cek($sqlRombel);

if($cek > 0){
	foreach ($rombel as $baris) {
		$btnGroup = "<div class='btn-group'>
                            <button class='btn btn-xs green dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'> Actions
                                <i class='fa fa-angle-down'></i>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                                <li>
                                    <a href='#modalProduk' data-toggle='modal' data-type='lama' data-id='$baris->id_produk' data-nama='$baris->nm_produk' data-harga='$baris->harga' data-kategori='$baris->id_ktg_produk'><i class='fa fa-edit'></i> Ubah </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusProduk' data-id='$baris->id_produk'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_produk,$baris->nm_ktg_produk,$baris->harga,$baris->foto,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>