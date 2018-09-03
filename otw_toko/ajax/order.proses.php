<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlOrderBaru = "select * from otw_order where id_toko='$_SESSION[id_toko]' and proses=1 and sukses=0 order by tgl_order desc";

$orderBaru = $ms->bacaAll($sqlOrderBaru);
$cek = $ms->cek($sqlOrderBaru);

if($cek > 0){
	foreach ($orderBaru as $baris) {
		$btnGroup = "<div class='btn-group'>
                            <button class='btn btn-xs green dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'> Actions
                                <i class='fa fa-angle-down'></i>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                                <li>
                                    <a href='#modalDetailOrder' data-toggle='modal' data-id='$baris->id_order'><i class='fa fa-list'></i> Detail </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='suksesOrder' data-id='$baris->id_order'><i class='fa fa-check'></i> Sukses </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='batalOrder' data-id='$baris->id_order'><i class='fa fa-times'></i> Batal </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='blokirOrder' data-id='$baris->id_order'><i class='fa fa-block'></i> Blacklist </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->notelp_pemesan,$baris->nm_pemesan,$baris->tgl_order,$baris->alamat,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>