<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$sqlHapus = "update otw_ktg_toko set hapus=1 where id_ktg_toko='$_POST[id]'";
$eksekusi = $ms->exe($sqlHapus);

if($eksekusi > 0){
	$obj->status = "success";
	$obj->pesan = "Data kategori toko berhasil disimpan.";
}else{
	$obj->status = "error";
	$obj->pesan = "Data kategori toko gagal disimpan.";
}

echo json_encode($obj);