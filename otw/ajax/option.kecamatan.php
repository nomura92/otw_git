<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOProv = "select * from kecamatan where id_kabkot='$_GET[uid]' order by nm_kecamatan";

$oprov = $minpo->bacaAll($sqlOProv);
$cek = $minpo->cek($sqlOProv);

if($cek>0){
	foreach ($oprov as $baris) {
	   $a['data'][] = array($baris->id_kecamatan,$baris->nm_kecamatan);
	}
}else{
	$a['data'][] = array('','');
}
echo json_encode($a);