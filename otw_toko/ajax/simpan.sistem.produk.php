<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$type = $_POST['type'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['tmp_name'];

if($type=="lama"){
	$sqlSimpan = "update otw_produk set nm_produk='$nama',id_ktg_produk='$kategori',harga='$harga',foto='$foto' where id_produk='$id'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data produk berhasil diganti.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data produk gagal diganti.";
	}
}else{
	$sqlSimpan = "insert into otw_produk set nm_produk='$nama',id_ktg_produk='$kategori',harga='$harga',foto='$foto'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data produk berhasil disimpan.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data produk gagal disimpan.";
	}
}

echo json_encode($obj);