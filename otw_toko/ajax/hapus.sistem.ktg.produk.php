<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$sqlHapus = "update otw_ktg_produk set hapus=1 where id_ktg_produk='$_POST[id]'";
$eksekusi = $ms->exe($sqlHapus);

if($eksekusi > 0){
	$obj->status = "success";
	$obj->pesan = "Data kategori produk berhasil disimpan.";
}else{
	$obj->status = "error";
	$obj->pesan = "Data kategori produk gagal disimpan.";
}

echo json_encode($obj);