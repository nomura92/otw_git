<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlKtgToko = "select * from otw_ktg_toko where hapus=0";

$ktgToko = $ms->bacaAll($sqlKtgToko);
$cek = $ms->cek($sqlKtgToko);

if($cek > 0){
	foreach ($ktgToko as $baris) {
		$btnGroup = "<div class='btn-group'>
                            <button class='btn btn-xs green dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'> Actions
                                <i class='fa fa-angle-down'></i>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                                <li>
                                    <a href='#modalKtgToko' data-toggle='modal' data-type='lama' data-id='$baris->id_ktg_toko' data-kategori='$baris->nm_ktg_toko'><i class='fa fa-edit'></i> Ubah </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusKtgToko' data-id='$baris->id_ktg_toko'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_ktg_toko,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>