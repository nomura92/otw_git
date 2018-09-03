<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOProv = "select * from kabkot where id_provinsi='$_GET[uid]' order by nm_kabkot";

$oprov = $minpo->bacaAll($sqlOProv);
$cek = $minpo->cek($sqlOProv);

if($cek>0){
	foreach ($oprov as $baris) {
	   $a['data'][] = array($baris->id_kabkot,$baris->nm_kabkot);
	}
}else{
	$a['data'][] = array('','');
}
echo json_encode($a);