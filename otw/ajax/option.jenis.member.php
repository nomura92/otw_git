<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOProv = "select * from otw_jenis_member order by nm_jenis_member";

$oprov = $minpo->bacaAll($sqlOProv);
$cek = $minpo->cek($sqlOProv);

if($cek>0){
	foreach ($oprov as $baris) {
	   $a['data'][] = array($baris->id_jenis_member,$baris->nm_jenis_member." | ".$minpo->rupiah($baris->biaya)." | ".$baris->banyak." item");
	}
}else{
	$a['data'][] = array('','');
}
echo json_encode($a);