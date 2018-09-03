<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$sqlHapus = "update otw_jenis_member set hapus=1 where id_jenis_member='$_POST[id]'";
$eksekusi = $ms->exe($sqlHapus);

if($eksekusi > 0){
	$obj->status = "success";
	$obj->pesan = "Data jenis member berhasil disimpan.";
}else{
	$obj->status = "error";
	$obj->pesan = "Data jenis member gagal disimpan.";
}

echo json_encode($obj);