-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Sep 2018 pada 09.51
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_otw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabkot`
--

CREATE TABLE `kabkot` (
  `id_kabkot` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nm_kabkot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabkot`
--

INSERT INTO `kabkot` (`id_kabkot`, `id_provinsi`, `nm_kabkot`) VALUES
(1273, 12, 'KOTA PEMATANG SIANTAR'),
(1274, 12, 'KOTA TEBING TINGGI'),
(1275, 12, 'KOTA MEDAN'),
(1276, 12, 'KOTA BINJAI'),
(1277, 12, 'KOTA PADANGSIDIMPUAN'),
(1278, 12, 'KOTA GUNUNGSITOLI'),
(1301, 13, 'KABUPATEN KEPULAUAN MENTAWAI'),
(1302, 13, 'KABUPATEN PESISIR SELATAN'),
(1303, 13, 'KABUPATEN SOLOK'),
(1304, 13, 'KABUPATEN SIJUNJUNG'),
(1305, 13, 'KABUPATEN TANAH DATAR'),
(1306, 13, 'KABUPATEN PADANG PARIAMAN'),
(1307, 13, 'KABUPATEN AGAM'),
(1308, 13, 'KABUPATEN LIMA PULUH KOTA'),
(1309, 13, 'KABUPATEN PASAMAN'),
(1310, 13, 'KABUPATEN SOLOK SELATAN'),
(1311, 13, 'KABUPATEN DHARMASRAYA'),
(1312, 13, 'KABUPATEN PASAMAN BARAT'),
(1371, 13, 'KOTA PADANG'),
(1372, 13, 'KOTA SOLOK'),
(1373, 13, 'KOTA SAWAH LUNTO'),
(1374, 13, 'KOTA PADANG PANJANG'),
(1375, 13, 'KOTA BUKITTINGGI'),
(1376, 13, 'KOTA PAYAKUMBUH'),
(1377, 13, 'KOTA PARIAMAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kabkot` int(11) NOT NULL,
  `nm_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kabkot`, `nm_kecamatan`) VALUES
(1302021, 1302, 'RANAH AMPEK HULU TAPAN'),
(1302030, 1302, 'PANCUNG SOAL'),
(1302031, 1302, 'AIRPURA'),
(1302040, 1302, 'LINGGO SARI BAGANTI'),
(1302050, 1302, 'RANAH PESISIR'),
(1302060, 1302, 'LENGAYANG'),
(1302070, 1302, 'SUTERA'),
(1302080, 1302, 'BATANG KAPAS'),
(1302090, 1302, 'IV JURAI'),
(1302100, 1302, 'BAYANG'),
(1302101, 1302, 'IV  NAGARI BAYANG UTARA'),
(1302110, 1302, 'KOTO XI TARUSAN'),
(1303040, 1303, 'PANTAI CERMIN'),
(1303050, 1303, 'LEMBAH GUMANTI'),
(1303051, 1303, 'HILIRAN GUMANTI'),
(1303060, 1303, 'PAYUNG SEKAKI'),
(1303061, 1303, 'TIGO LURAH'),
(1303070, 1303, 'LEMBANG JAYA'),
(1303071, 1303, 'DANAU KEMBAR'),
(1303080, 1303, 'GUNUNG TALANG'),
(1303090, 1303, 'BUKIT SUNDI'),
(1303100, 1303, 'IX KOTO SUNGAI LASI'),
(1303110, 1303, 'KUBUNG'),
(1303120, 1303, 'X KOTO DIATAS'),
(1303130, 1303, 'X KOTO SINGKARAK'),
(1303140, 1303, 'JUNJUNG SIRIH'),
(1304050, 1304, 'KAMANG BARU'),
(1304060, 1304, 'TANJUNG GADANG'),
(1304070, 1304, 'SIJUNJUNG'),
(1304071, 1304, 'LUBUK TAROK'),
(1304080, 1304, 'IV NAGARI'),
(1304090, 1304, 'KUPITAN'),
(1304100, 1304, 'KOTO TUJUH'),
(1304110, 1304, 'SUMPUR KUDUS'),
(1305010, 1305, 'SEPULUH KOTO'),
(1305020, 1305, 'BATIPUH'),
(1305021, 1305, 'BATIPUH SELATAN'),
(1305030, 1305, 'PARIANGAN'),
(1305040, 1305, 'RAMBATAN'),
(1305050, 1305, 'LIMA KAUM'),
(1305060, 1305, 'TANJUNG EMAS'),
(1305070, 1305, 'PADANG GANTING'),
(1305080, 1305, 'LINTAU BUO'),
(1305081, 1305, 'LINTAU BUO UTARA'),
(1305090, 1305, 'SUNGAYANG'),
(1305100, 1305, 'SUNGAI TARAB'),
(1305110, 1305, 'SALIMPAUNG'),
(1305111, 1305, 'TANJUNG BARU'),
(1306010, 1306, 'BATANG ANAI'),
(1306020, 1306, 'LUBUK ALUNG'),
(1306021, 1306, 'SINTUK TOBOH GADANG'),
(1306030, 1306, 'ULAKAN TAPAKIS'),
(1306040, 1306, 'NAN SABARIS'),
(1306050, 1306, '2 X 11 ENAM LINGKUNG'),
(1306051, 1306, 'ENAM LINGKUNG'),
(1306052, 1306, '2 X 11 KAYU TANAM'),
(1306060, 1306, 'VII KOTO SUNGAI SARIAK'),
(1306061, 1306, 'PATAMUAN'),
(1306062, 1306, 'PADANG SAGO'),
(1306070, 1306, 'V KOTO KP DALAM'),
(1306071, 1306, 'V KOTO TIMUR'),
(1306080, 1306, 'SUNGAI LIMAU'),
(1306081, 1306, 'BATANG GASAN'),
(1306090, 1306, 'SUNGAI GERINGGING'),
(1306100, 1306, 'IV KOTO AUR MALINTANG'),
(1307010, 1307, 'TANJUNG MUTIARA'),
(1307020, 1307, 'LUBUK BASUNG'),
(1307021, 1307, 'AMPEK NAGARI'),
(1307030, 1307, 'TANJUNG RAYA'),
(1307040, 1307, 'MATUR'),
(1307050, 1307, 'IV KOTO'),
(1307051, 1307, 'MALALAK'),
(1307061, 1307, 'BANUHAMPU'),
(1307062, 1307, 'SUNGAI PUA'),
(1307070, 1307, 'AMPEK ANGKEK'),
(1307071, 1307, 'CANDUANG'),
(1307080, 1307, 'BASO'),
(1307090, 1307, 'TILATANG KAMANG'),
(1307091, 1307, 'KAMANG MAGEK'),
(1307100, 1307, 'PALEMBAYAN'),
(1307110, 1307, 'PALUPUH'),
(1308010, 1308, 'PAYAKUMBUH'),
(1308011, 1308, 'AKABILURU'),
(1308020, 1308, 'LUAK'),
(1308021, 1308, 'LAREH SAGO HALABAN'),
(1308022, 1308, 'SITUJUAH LIMO NAGARI'),
(1308030, 1308, 'HARAU'),
(1308040, 1308, 'GUGUAK'),
(1308041, 1308, 'MUNGKA'),
(1308050, 1308, 'SULIKI'),
(1308051, 1308, 'BUKIK BARISAN'),
(1308060, 1308, 'GUNUANG OMEH'),
(1308070, 1308, 'KAPUR IX'),
(1308080, 1308, 'PANGKALAN KOTO BARU'),
(1309070, 1309, 'BONJOL'),
(1309071, 1309, 'TIGO NAGARI'),
(1309072, 1309, 'SIMPANG ALAHAN MATI'),
(1309080, 1309, 'LUBUK SIKAPING'),
(1309100, 1309, 'DUA KOTO'),
(1309110, 1309, 'PANTI'),
(1309111, 1309, 'PADANG GELUGUR'),
(1309121, 1309, 'RAO'),
(1309122, 1309, 'MAPAT TUNGGUL'),
(1309123, 1309, 'MAPAT TUNGGUL SELATAN'),
(1309124, 1309, 'RAO SELATAN'),
(1309125, 1309, 'RAO UTARA'),
(1310010, 1310, 'SANGIR'),
(1310020, 1310, 'SANGIR JUJUAN'),
(1310021, 1310, 'SANGIR BALAI JANGGO'),
(1310030, 1310, 'SANGIR BATANG HARI'),
(1310040, 1310, 'SUNGAI PAGU'),
(1310041, 1310, 'PAUAH DUO'),
(1310050, 1310, 'KOTO PARIK GADANG DIATEH'),
(1311010, 1311, 'SUNGAI RUMBAI'),
(1311011, 1311, 'KOTO BESAR'),
(1311012, 1311, 'ASAM JUJUHAN'),
(1311020, 1311, 'KOTO BARU'),
(1311021, 1311, 'KOTO SALAK'),
(1311022, 1311, 'TIUMANG'),
(1311023, 1311, 'PADANG LAWEH'),
(1311030, 1311, 'SITIUNG'),
(1311031, 1311, 'TIMPEH'),
(1311040, 1311, 'PULAU PUNJUNG'),
(1311041, 1311, 'IX KOTO'),
(1312010, 1312, 'SUNGAI BEREMAS'),
(1312020, 1312, 'RANAH BATAHAN'),
(1312030, 1312, 'KOTO BALINGKA'),
(1312040, 1312, 'SUNGAI AUR'),
(1312050, 1312, 'LEMBAH MALINTANG'),
(1312060, 1312, 'GUNUNG TULEH'),
(1312070, 1312, 'TALAMAU'),
(1312080, 1312, 'PASAMAN'),
(1312090, 1312, 'LUHAK NAN DUO'),
(1312100, 1312, 'SASAK RANAH PASISIE'),
(1312110, 1312, 'KINALI'),
(1371010, 1371, 'BUNGUS TELUK KABUNG'),
(1371020, 1371, 'LUBUK KILANGAN'),
(1371030, 1371, 'LUBUK BEGALUNG'),
(1371040, 1371, 'PADANG SELATAN'),
(1371050, 1371, 'PADANG TIMUR'),
(1371060, 1371, 'PADANG BARAT'),
(1371070, 1371, 'PADANG UTARA'),
(1371080, 1371, 'NANGGALO'),
(1371090, 1371, 'KURANJI'),
(1371100, 1371, 'PAUH'),
(1371110, 1371, 'KOTO TANGAH'),
(1372010, 1372, 'LUBUK SIKARAH'),
(1372020, 1372, 'TANJUNG HARAPAN'),
(1373010, 1373, 'SILUNGKANG'),
(1373020, 1373, 'LEMBAH SEGAR'),
(1373030, 1373, 'BARANGIN'),
(1373040, 1373, 'TALAWI'),
(1374010, 1374, 'PADANG PANJANG BARAT'),
(1374020, 1374, 'PADANG PANJANG TIMUR'),
(1375010, 1375, 'GUGUK PANJANG'),
(1375020, 1375, 'MANDIANGIN KOTO SELAYAN'),
(1375030, 1375, 'AUR BIRUGO TIGO BALEH'),
(1376010, 1376, 'PAYAKUMBUH BARAT'),
(1376011, 1376, 'PAYAKUMBUH SELATAN'),
(1376020, 1376, 'PAYAKUMBUH TIMUR'),
(1376030, 1376, 'PAYAKUMBUH UTARA'),
(1376031, 1376, 'LAMPOSI TIGO NAGORI'),
(1377010, 1377, 'PARIAMAN SELATAN'),
(1377020, 1377, 'PARIAMAN TENGAH'),
(1377021, 1377, 'PARIAMAN TIMUR'),
(1377030, 1377, 'PARIAMAN UTARA'),
(1301011, 1301, 'PAGAI SELATAN'),
(1301012, 1301, 'SIKAKAP'),
(1301013, 1301, 'PAGAI UTARA'),
(1301021, 1301, 'SIPORA SELATAN'),
(1301022, 1301, 'SIPORA UTARA'),
(1301030, 1301, 'SIBERUT SELATAN'),
(1301031, 1301, 'SEBERUT BARAT DAYA'),
(1301032, 1301, 'SIBERUT TENGAH'),
(1301040, 1301, 'SIBERUT UTARA'),
(1301041, 1301, 'SIBERUT BARAT'),
(1302011, 1302, 'SILAUT'),
(1302012, 1302, 'LUNANG'),
(1302020, 1302, 'BASA AMPEK BALAI TAPAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_admin`
--

CREATE TABLE `otw_admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_text` varchar(32) NOT NULL,
  `blokir` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_bank`
--

CREATE TABLE `otw_bank` (
  `id_bank` int(11) NOT NULL,
  `nm_bank` varchar(30) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_bank`
--

INSERT INTO `otw_bank` (`id_bank`, `nm_bank`, `no_rekening`, `atas_nama`, `hapus`) VALUES
(1, 'Mandiri', '12345', 'Cinta', 1),
(2, 'BRI', '123123', 'Asss', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_jenis_member`
--

CREATE TABLE `otw_jenis_member` (
  `id_jenis_member` int(11) NOT NULL,
  `nm_jenis_member` varchar(32) NOT NULL,
  `biaya` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_jenis_member`
--

INSERT INTO `otw_jenis_member` (`id_jenis_member`, `nm_jenis_member`, `biaya`, `banyak`, `hapus`) VALUES
(1, 'Level 1', 25000, 100, 1),
(2, 'Level 2', 50000, 300, 1),
(3, 'Level 3', 100000, 500, 0),
(4, 'Level 1', 50000, 150, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_ktg_produk`
--

CREATE TABLE `otw_ktg_produk` (
  `id_ktg_produk` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `nm_ktg_produk` varchar(30) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_ktg_produk`
--

INSERT INTO `otw_ktg_produk` (`id_ktg_produk`, `id_toko`, `nm_ktg_produk`, `hapus`) VALUES
(1, 0, 'Mie Instan 2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_ktg_toko`
--

CREATE TABLE `otw_ktg_toko` (
  `id_ktg_toko` int(11) NOT NULL,
  `nm_ktg_toko` varchar(80) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_ktg_toko`
--

INSERT INTO `otw_ktg_toko` (`id_ktg_toko`, `nm_ktg_toko`, `hapus`) VALUES
(1, 'Kelontong', 1),
(2, 'Listrik & Listrik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_log`
--

CREATE TABLE `otw_log` (
  `id_log` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `isi_log` text NOT NULL,
  `tgl_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dibaca` tinyint(1) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_order`
--

CREATE TABLE `otw_order` (
  `id_order` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `tgl_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nm_pemesan` varchar(50) NOT NULL,
  `notelp_pemesan` varchar(18) NOT NULL,
  `alamat` text NOT NULL,
  `proses` tinyint(1) NOT NULL,
  `batal` tinyint(1) NOT NULL,
  `sukses` tinyint(1) NOT NULL,
  `blokir` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_order`
--

INSERT INTO `otw_order` (`id_order`, `id_toko`, `tgl_order`, `nm_pemesan`, `notelp_pemesan`, `alamat`, `proses`, `batal`, `sukses`, `blokir`) VALUES
(1, 0, '2018-08-30 07:21:49', 'SiANU', '08123456789', 'Di jalanan', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_order_detail`
--

CREATE TABLE `otw_order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_produk`
--

CREATE TABLE `otw_produk` (
  `id_produk` int(11) NOT NULL,
  `id_ktg_produk` int(11) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_toko`
--

CREATE TABLE `otw_toko` (
  `id_toko` int(11) NOT NULL,
  `id_ktg_toko` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp_pengelola` varchar(16) NOT NULL,
  `nm_toko` varchar(100) NOT NULL,
  `foto_toko` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_text` varchar(32) NOT NULL,
  `call_center` varchar(16) NOT NULL,
  `jam_buka` text NOT NULL,
  `hari_buka` text NOT NULL,
  `saldo` int(11) NOT NULL,
  `id_jenis_member` int(11) NOT NULL,
  `lama` int(11) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `blokir` tinyint(1) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_toko`
--

INSERT INTO `otw_toko` (`id_toko`, `id_ktg_toko`, `id_kecamatan`, `alamat`, `no_telp_pengelola`, `nm_toko`, `foto_toko`, `password`, `password_text`, `call_center`, `jam_buka`, `hari_buka`, `saldo`, `id_jenis_member`, `lama`, `mulai`, `sampai`, `blokir`, `hapus`) VALUES
(1, 1, 1371090, 'Kampung Kalawi', 'no1234', 'Toko1', 'D:softwarexampp7	mpphp4AF.tmp', '', 'p12345', 'cc1234', '7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,', 'Senin,Selasa,Rabu,Kamis,Jumat,SabtuMinggu,', 100000, 1, 2, '2018-09-01', '2018-11-01', 1, 0),
(2, 1, 1371090, 'Kampung Kalawi', 'no1234', 'Toko 1', 'D:softwarexampp7	mpphpB56C.tmp', '', 'p12345', 'cc1234', '7,8,9,10,11,12,13,14,15,16,17,', 'Senin,Selasa,Rabu,Kamis,Jumat,SabtuMinggu,', 100000, 4, 2, '2018-09-01', '2018-11-01', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `otw_topup`
--

CREATE TABLE `otw_topup` (
  `id_topup` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `bank` varchar(15) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `verifikasi` tinyint(1) NOT NULL,
  `tolak` tinyint(1) NOT NULL,
  `alasan` text NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `otw_topup`
--

INSERT INTO `otw_topup` (`id_topup`, `id_toko`, `nominal`, `tipe`, `id_bank`, `bank`, `atas_nama`, `verifikasi`, `tolak`, `alasan`, `hapus`) VALUES
(1, 1, 100000, 'transfer', 0, 'mandiri', 'toko1', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nm_provinsi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nm_provinsi`) VALUES
(11, 'ACEH'),
(12, 'SUMATERA UTARA'),
(13, 'SUMATERA BARAT'),
(14, 'RIAU'),
(15, 'JAMBI'),
(16, 'SUMATERA SELATAN'),
(17, 'BENGKULU'),
(18, 'LAMPUNG'),
(19, 'KEPULAUAN BANGKA BELITUNG'),
(21, 'KEPULAUAN RIAU'),
(31, 'DKI JAKARTA'),
(32, 'JAWA BARAT'),
(33, 'JAWA TENGAH'),
(34, 'DI YOGYAKARTA'),
(35, 'JAWA TIMUR'),
(36, 'BANTEN'),
(51, 'BALI'),
(52, 'NUSA TENGGARA BARAT'),
(53, 'NUSA TENGGARA TIMUR'),
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA'),
(71, 'SULAWESI UTARA'),
(72, 'SULAWESI TENGAH'),
(73, 'SULAWESI SELATAN'),
(74, 'SULAWESI TENGGARA'),
(75, 'GORONTALO'),
(76, 'SULAWESI BARAT'),
(81, 'MALUKU'),
(82, 'MALUKU UTARA'),
(91, 'PAPUA BARAT'),
(94, 'PAPUA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabkot`
--
ALTER TABLE `kabkot`
  ADD PRIMARY KEY (`id_kabkot`);

--
-- Indexes for table `otw_bank`
--
ALTER TABLE `otw_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `otw_jenis_member`
--
ALTER TABLE `otw_jenis_member`
  ADD PRIMARY KEY (`id_jenis_member`);

--
-- Indexes for table `otw_ktg_produk`
--
ALTER TABLE `otw_ktg_produk`
  ADD PRIMARY KEY (`id_ktg_produk`);

--
-- Indexes for table `otw_ktg_toko`
--
ALTER TABLE `otw_ktg_toko`
  ADD PRIMARY KEY (`id_ktg_toko`);

--
-- Indexes for table `otw_log`
--
ALTER TABLE `otw_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `otw_order`
--
ALTER TABLE `otw_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `otw_order_detail`
--
ALTER TABLE `otw_order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Indexes for table `otw_produk`
--
ALTER TABLE `otw_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `otw_toko`
--
ALTER TABLE `otw_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `otw_topup`
--
ALTER TABLE `otw_topup`
  ADD PRIMARY KEY (`id_topup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabkot`
--
ALTER TABLE `kabkot`
  MODIFY `id_kabkot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1378;
--
-- AUTO_INCREMENT for table `otw_bank`
--
ALTER TABLE `otw_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `otw_jenis_member`
--
ALTER TABLE `otw_jenis_member`
  MODIFY `id_jenis_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `otw_ktg_produk`
--
ALTER TABLE `otw_ktg_produk`
  MODIFY `id_ktg_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `otw_ktg_toko`
--
ALTER TABLE `otw_ktg_toko`
  MODIFY `id_ktg_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `otw_log`
--
ALTER TABLE `otw_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otw_order`
--
ALTER TABLE `otw_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `otw_order_detail`
--
ALTER TABLE `otw_order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otw_produk`
--
ALTER TABLE `otw_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otw_toko`
--
ALTER TABLE `otw_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `otw_topup`
--
ALTER TABLE `otw_topup`
  MODIFY `id_topup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
