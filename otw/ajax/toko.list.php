<?php
error_reporting(0);
session_start();
include_once"../lib/config.php";
$ms = new internal;
$sqlRombel = "select a.nm_toko,b.nm_ktg_toko,d.nm_provinsi,e.nm_kabkot,f.nm_kecamatan,a.no_telp_pengelola,a.alamat,a.call_center,a.saldo,a.lama,a.mulai,a.sampai,a.blokir,c.nm_jenis_member,c.banyak from otw_toko a,otw_ktg_toko b,otw_jenis_member c,provinsi d,kabkot e,kecamatan f where a.id_ktg_toko=b.id_ktg_toko and a.id_jenis_member=c.id_jenis_member and a.id_kecamatan=f.id_kecamatan and f.id_kabkot=e.id_kabkot and e.id_provinsi=d.id_provinsi and a.hapus=0";

$rombel = $ms->bacaAll($sqlRombel);
$cek = $ms->cek($sqlRombel);

if($cek > 0){
	foreach ($rombel as $baris) {
        if($baris->blokir>0){
            $blokir='times';
        }else{
            $blokir='check';
        }
        $alamat = $baris->nm_provinsi."<br>".$baris->nm_kabkot."<br>".$baris->nm_kecamatan."<br>".$baris->alamat;
        $member = $baris->nm_jenis_member."<br>".$baris->banyak." item";
		$btnGroup = "<div class='btn-group'>
                            <button class='btn btn-xs green dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'> Actions
                                <i class='fa fa-angle-down'></i>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                            <li>
                                    <a href='#modalTokoUpdate' data-toggle='modal' data-id='$baris->id_toko'><i class='fa fa-arrow-up'></i> Update </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='blokirToko' data-id='$baris->id_toko' data-blokir='$baris->blokir'><i class='fa fa-$blokir'></i> Blokir </a>
                                </li>
                                <li>
                                    <a href='#modalTokoPerpanjangan' data-toggle='modal' data-id='$baris->id_toko'><i class='fa fa-calendar'></i> Perpanjang </a>
                                </li>
                                <li>
                                    <a href='#modalTokoTopUP' data-toggle='modal' data-id='$baris->id_toko'><i class='fa fa-dollar'></i> Top Up Saldo </a>
                                </li>
                                <li>
                                    <a href='#modalToko' data-toggle='modal' data-type='lama' data-id='$baris->id_toko'><i class='fa fa-edit'></i> Ubah </a>
                                </li>
                                <li>
                                    <a href='javascript:;' class='hapusLevel' data-id='$baris->id_toko'><i class='icon-trash'></i> Hapus </a>
                                </li>
                            </ul>
                        </div>";

	   $a['data'][] = array($baris->nm_toko,$baris->nm_ktg_toko,$alamat,$baris->no_telp_pengelola,$baris->call_center,$baris->saldo,$member,$baris->lama,$baris->mulai,$baris->sampai,$btnGroup);
	}

	echo json_encode($a);
}else{ ?>
	{
	    "data": []
	}
<?php } ?>