<?php

date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
	
class internal{
	private $server = "localhost";
	private $userdb = "root";
	private $passdb = "";
	private $nmdb 	= "db_otw";
	
	public $koneksi;
	
	public function __construct(){
		$this->koneksi = new PDO("mysql:host=".$this->server.";dbname=".$this->nmdb,$this->userdb,$this->passdb);
	}

	public function tgl_indo($tgl){
		$tgl=explode(" ", $tgl);
		$tgl=explode("-", $tgl[0]);
		return $tgl[2].' '.$this->getBulan($tgl[1]).' '.$tgl[0];		 
	}

	public function tgl_jam_indo($tgl){
		$tgl=explode(" ", $tgl);
		$tgal=explode("-", $tgl[0]);

		return $tgal[2].' '.$this->getBulan($tgal[1]).' '.$tgal[0].' '.$tgl[1].' WIB';		 
	}

	function jam_indo($jam){

	}

	function getBulan($bln){
		switch ($bln){
			case 1: 
				return "Januari";
			break;
			case 2:
				return "Februari";
			break;
			case 3:
				return "Maret";
			break;
			case 4:
				return "April";
			break;
			case 5:
				return "Mei";
			break;
			case 6:
				return "Juni";
			break;
			case 7:
				return "Juli";
			break;
			case 8:
				return "Agustus";
			break;
			case 9:
				return "September";
			break;
			case 10:
				return "Oktober";
			break;
			case 11:
				return "November";
			break;
			case 12:
				return "Desember";
			break;
		}
	}

	public function cek($sql){
		$executeSql = $this->koneksi->query($sql) or die("failed!");
        $jumlah = $executeSql->rowCount();
        return $jumlah;
	}

	public function baca($sql){
		$executeSql = $this->koneksi->query($sql) or die("failed!");
        $baris = $executeSql->fetch(PDO::FETCH_OBJ);
        return $baris;
	}

	public function exe($sql){
		$exe = $this->koneksi->query($sql) or die("failed!");
		if($exe){
			return 1;
		}else{
			return 0;
		}
	}

	public function bacaAll($sql){
		$executeSql = $this->koneksi->query($sql) or die("failed!");
        while($baris = $executeSql->fetch(PDO::FETCH_OBJ)){
        	$data[] = $baris;
        }
        return $data;
	}

	public function rupiah($pitih){
		$pitih = "Rp ".number_format($pitih,2,',','.');
		return $pitih;
	}

}