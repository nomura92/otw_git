<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$type = $_POST['type'];
$id = $_POST['id'];
$kategori = $_POST['kategori'];

if($type=="lama"){
	$sqlSimpan = "update otw_ktg_produk set nm_ktg_produk='$kategori' where id_ktg_produk='$id' and id_toko='$_SESSION[id_toko]'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data kategori produk berhasil diganti.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data kategori produk gagal diganti.";
	}
}else{
	$sqlSimpan = "insert into otw_ktg_produk set nm_ktg_produk='$kategori',id_toko='$_SESSION[id_toko]'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data kategori produk berhasil disimpan.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data kategori produk gagal disimpan.";
	}
}

echo json_encode($obj);