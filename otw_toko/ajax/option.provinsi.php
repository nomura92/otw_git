<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOProv = "select * from provinsi order by nm_provinsi";

$oprov = $minpo->bacaAll($sqlOProv);
$cek = $minpo->cek($sqlOProv);

foreach ($oprov as $baris) {
   $a['data'][] = array($baris->id_provinsi,$baris->nm_provinsi);
}

echo json_encode($a);