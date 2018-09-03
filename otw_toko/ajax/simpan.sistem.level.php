<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$type = $_POST['type'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$biaya = $_POST['biaya'];
$banyak = $_POST['banyak'];

if($type=="lama"){
	$sqlSimpan = "update otw_jenis_member set nm_jenis_member='$nama',biaya='$biaya',banyak='$banyak' where id_jenis_member='$id'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data jenis member berhasil diganti.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data jenis member gagal diganti.";
	}
}else{
	$sqlSimpan = "insert into otw_jenis_member set nm_jenis_member='$nama',biaya='$biaya',banyak='$banyak'";
	$eksekusi = $ms->exe($sqlSimpan);

	if($eksekusi > 0){
		$obj->status = "success";
		$obj->pesan = "Data jenis member berhasil disimpan.";
	}else{
		$obj->status = "error";
		$obj->pesan = "Data jenis member gagal disimpan.";
	}
}

echo json_encode($obj);