<?php
error_reporting(0);
session_start();
include_once "../lib/config.php";

$obj = new StdClass;

$ms = new internal;

$nama = $_POST['nama'];
$kecamatan = $_POST['kecamatan'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$kategori = $_POST['kategori'];
$jenis_member = $_POST['jenis_member'];
$password = $_POST['password'];
$call_center = $_POST['call_center'];
$hari_buka = $_POST['hari_buka'];
for($i=0;$i<count($hari_buka);$i++){
	if($i==count($hari_buka)-2){
		$nhari.=$hari_buka[$i];
	}else{
		$nhari.=$hari_buka[$i].",";
	}
}
$jam_buka = $_POST['jam_buka'];
for($j=0;$j<count($jam_buka);$j++){
	if($i==count($jam_buka)-2){
		$njam.=$jam_buka[$j];
	}else{
		$njam.=$jam_buka[$j].",";
	}
}
$saldo = $_POST['saldo'];
$lama = $_POST['lama'];
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];

$foto = $_FILES['foto'];


$sqlSimpan = "insert into otw_toko set id_ktg_toko='$kategori',id_kecamatan='$kecamatan',alamat='$alamat',no_telp_pengelola='$no_telp',nm_toko='$nama',foto_toko='$foto[tmp_name]',password='',password_text='$password',call_center='$call_center',jam_buka='$njam',hari_buka='$nhari',saldo='$saldo',id_jenis_member='$jenis_member',lama='$lama',mulai='$mulai',sampai='$sampai'";
$eksekusi = $ms->exe($sqlSimpan);

if($eksekusi > 0){
	$obj->status = "success";
	$obj->pesan = "Data toko baru berhasil disimpan.";
}else{
	$obj->status = "error";
	$obj->pesan = "Data toko baru gagal disimpan.";
}

echo json_encode($obj);