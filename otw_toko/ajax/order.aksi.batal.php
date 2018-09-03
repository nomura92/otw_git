<?php
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$sqlHapus = "update otw_order set proses=1,batal=1 where id_order='$_POST[id]'";
$eksekusi = $ms->exe($sqlHapus);

if($eksekusi > 0){
	$obj->status = "success";
	$obj->pesan = "Order dibatalkan.";
}else{
	$obj->status = "error";
	$obj->pesan = "Order gagal diproses.";
}

echo json_encode($obj);