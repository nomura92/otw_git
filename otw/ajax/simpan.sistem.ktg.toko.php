<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$type = $_POST['type'];
$id = $_POST['id'];
$kategori = $_POST['kategori'];

if($type=="lama"){
	$sqlSimpan = "update otw_ktg_toko set nm_ktg_toko='$kategori' where id_ktg_toko='$id'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data kategori toko berhasil diganti.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data kategori toko gagal diganti.";
	}
}else{
	$sqlSimpan = "insert into otw_ktg_toko set nm_ktg_toko='$kategori'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data kategori toko berhasil disimpan.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data kategori toko gagal disimpan.";
	}
}

echo json_encode($obj);