<?php
session_start();
error_reporting(0);
include_once "../lib/config.php";

$ms = new internal;
$bulan = date('m');
$tahun = date('Y');

$obj = new StdClass;

$sqlKeluarBulan = "select sum(jumlah) total from uang_keluar where username='$_SESSION[username]' and month(tgl_keluar)='$bulan' and year(tgl_keluar)='$tahun' and hapus=0";
$sqlKeluarTahun = "select sum(jumlah) total from uang_keluar where username='$_SESSION[username]' and year(tgl_keluar)='$tahun' and hapus=0";
$sqlMasukBulan = "select sum(jumlah) total from uang_masuk where username='$_SESSION[username]' and month(tgl_masuk)='$bulan' and year(tgl_masuk)='$tahun' and hapus=0";
$sqlMasukTahun = "select sum(jumlah) total from uang_masuk where username='$_SESSION[username]' and year(tgl_masuk)='$tahun' and hapus=0";
$sqlChart = "SELECT month(tgl_keluar) AS bulan, SUM(jumlah) total FROM uang_keluar WHERE hapus=0 and year(tgl_keluar)='$tahun' GROUP BY month(tgl_keluar)";
$sqlChart2 = "SELECT SUM(jumlah) total FROM uang_masuk WHERE hapus=0 and year(tgl_masuk)='$tahun' GROUP BY month(tgl_masuk)";

$kb = $ms->baca($sqlKeluarBulan);
$kt = $ms->baca($sqlKeluarTahun);
$mb = $ms->baca($sqlMasukBulan);
$mt = $ms->baca($sqlMasukTahun);
$ctKeluar = $ms->bacaAll($sqlChart);

$bln = [];
$jml = [];
$jml2 = [];

foreach ($ctKeluar as $row){
	$bln[] = '"'.$ms->getBulan($row->bulan).'"';
	$jml[] = $row->total;
	$sqlChart2 = "SELECT COALESCE(SUM(jumlah),0) total FROM uang_masuk WHERE hapus=0 and year(tgl_masuk)='$tahun' and month(tgl_masuk)='$row->bulan' GROUP BY month(tgl_masuk)";
	$masuk = $ms->baca($sqlChart2);
	$cek = $ms->cek($sqlChart2);
	if($cek > 0) $jml2[] = $masuk->total; else $jml2[] = 0;
}

$obj->keluar_bulan = $ms->rupiah($kb->total);
$obj->keluar_tahun = $ms->rupiah($kt->total);
$obj->masuk_bulan = $ms->rupiah($mb->total);
$obj->masuk_tahun = $ms->rupiah($mt->total);
$obj->bulan = '['.implode($bln,',').']';
$obj->keluar = '['.implode($jml, ",").']';
$obj->masuk = '['.implode($jml2, ",").']';

echo json_encode($obj);
