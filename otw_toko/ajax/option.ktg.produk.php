<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$minpo = new internal;
$sqlOKtgProduk = "select * from otw_ktg_produk where id_toko='$_SESSION[id_toko]' and hapus=0 order by nm_ktg_produk";

$ktgProduk = $minpo->bacaAll($sqlOKtgProduk);
$cek = $minpo->cek($sqlOKtgProduk);

if($cek>0){
	foreach ($ktgProduk as $baris) {
	   $a['data'][] = array($baris->id_ktg_produk,$baris->nm_ktg_produk);
	}
}else{
	$a['data'][] = array('','');
}
echo json_encode($a);