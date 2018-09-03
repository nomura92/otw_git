<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlRombel = "select * from otw_jenis_member where hapus=0";

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
                                    <a href='#modalLevel' data-toggle='modal' data-type='lama' data-id='$baris->id_jenis_member' data-nama='$baris->nm_jenis_member' data-biaya='$baris->biaya' data-banyak='$baris->banyak'><i class='fa fa-edit'></i> Ubah </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusLevel' data-id='$baris->id_jenis_member'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_jenis_member,$baris->biaya,$baris->banyak,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>