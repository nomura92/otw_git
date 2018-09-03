<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlRombel = "select a.nm_toko,a.saldo,b.nominal,tipe,bank,atas_nama,bukti from otw_toko a,otw_topup b where a.id_toko=b.id_toko and b.verifikasi=0 and b.tolak=0 and b.hapus=0";

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
                                    <a href='javascript:;' class='verifyTopUP' data-id='$baris->id_topup'><i class='fa fa-check'></i> Verifikasi </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='tolakTopUP' data-id='$baris->id_topup'><i class='fa fa-times'></i> Tolak </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusTopUP' data-id='$baris->id_topup'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_toko,$baris->saldo,$baris->nominal,$baris->tipe,$baris->bank,$baris->atas_nama,$baris->bukti,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>