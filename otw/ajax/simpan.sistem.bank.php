<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$type = $_POST['type'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$norek = $_POST['norek'];
$atas_nama = $_POST['atas_nama'];

if($type=="lama"){
	$sqlSimpan = "update otw_bank set nm_bank='$nama',no_rekening='$norek',atas_nama='$atas_nama' where id_bank='$id'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data bank berhasil diganti.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data bank gagal diganti.";
	}
}else{
	$sqlSimpan = "insert into otw_bank set nm_bank='$nama',no_rekening='$norek',atas_nama='$atas_nama'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data bank berhasil disimpan.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data bank gagal disimpan.";
	}
}

echo json_encode($obj);