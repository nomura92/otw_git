<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOProv = "select * from otw_ktg_toko order by nm_ktg_toko";

$oprov = $minpo->bacaAll($sqlOProv);
$cek = $minpo->cek($sqlOProv);

if($cek>0){
	foreach ($oprov as $baris) {
	   $a['data'][] = array($baris->id_ktg_toko,$baris->nm_ktg_toko);
	}
}else{
	$a['data'][] = array('','');
}
echo json_encode($a);