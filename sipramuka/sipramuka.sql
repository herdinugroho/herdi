-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Okt 2020 pada 18.29
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipramuka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_user`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Herdi Nugroho', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Sipa Amaliah', '1f32aa4c9a1d2ea010adcf2348166a04'),
(7, 'herdi', '27946274a201346f0322e3861909b5ff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cluster`
--

CREATE TABLE IF NOT EXISTS `tb_cluster` (
  `id_cluster` int(8) NOT NULL,
  `namarumah` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` text NOT NULL,
  `alamat` text NOT NULL,
  `peta` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cluster`
--

INSERT INTO `tb_cluster` (`id_cluster`, `namarumah`, `desc`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `detail`, `harga`, `alamat`, `peta`, `id_user`) VALUES
(1, 'Royal Residence', '              Harga Jual  : Rp. 556.000.000\r\n              All In           : Rp. 10.000.000\r\n              Type            : 36/70\r\n              Alamat        : Karawang\r\n', '20180310_160227-01.jpeg', 'IMG-20180312-WA0013-01.jpeg', 'IMG-20180312-WA0014-01.jpeg', 'WhatsApp_Image_2018-01-28_at_19_28_06.jpeg', 'WhatsApp_Image_2018-01-28_at_19_28_04.jpeg', 'WhatsApp_Image_2018-01-28_at_19_28_05.jpeg', '\r\n-> Tipe 38/72 Komersil\r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap ?? Baja ringan\r\nDinding ?? Double Dinding\r\nLantai ?? Granit\r\nGenteng ?? beton\r\nKusen ?? Alumunium\r\nSanitair ?? Closet duduk\r\nDapur ?? Meja dapur & zink\r\nDapur ?? Tertutup dinding 2 meter\r\nAir bersih ?? Sumur bor & mesin pompa\r\nListrik ?? 1300 VA\r\n       \r\n\r\n\r\n', '-> Harga jual\r\n\r\nHj : Rp 297.000.000\r\nDp : Rp 22.000.000\r\nKPR : Rp 275.000.000\r\nBooking : Rp 1000.000\r\nTotal biaya : 23.000.000 sampai terima kunci ??\r\n\r\n\r\n\r\n->  Angsuran BTN\r\n\r\n15th Rp 2.700.000\r\n20th Rp 2.400.000\r\n', 'Karawang Tanjungpura', 'https://goo.gl/maps/5znxFBhu3wEbU2xC7', 0),
(2, 'Asteria', '               Harga Jual  : Rp. 755.000.000\r\n              All In           : Rp. 10.000.000\r\n              Type            : 36 / 60\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'Asteria.jpg', 'A30_60_dalam.jpg', 'A30_60_depan_c.jpg', 'A30_60_depan_b.jpg', 'A30_60_denah.jpg', 'A_pricelist_jpg.jpg', '-> Tipe 36/60 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj : Rp 755.000.000\r\nDp : Rp 9.000.000\r\nBooking : Rp 1000.000\r\nTotal biaya : 10.000.000 sampai terima kunci \r\n\r\n\r\n\r\n->  Angsuran BTN\r\n\r\n15th Rp 2.700.000\r\n20th Rp 2.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/teat4zGJjPQjV88D7', 0),
(3, 'Coutyard ', '               Harga Jual  : Rp. 1.000.000.000 \r\n              All In           : Rp. 30.000.000\r\n              Type            : 68 / 105\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'C68_72_depan.jpg', 'coutyard1.jpg', 'Coutyard.jpg', 'C68_105_denah.jpg', 'coutyard2.jpg', 'C_pricelist.jpg', '-> Tipe 68/105 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj : Rp 1.000.000.000\r\nDp : Rp 7.000.000\r\nKPR : Rp 20.000.000\r\nBooking : Rp 3000.000\r\nTotal biaya : 30.000.000 sampai terima kunci \r\n\r\n\r\n->  Angsuran \r\n\r\n15th Rp 9.700.000\r\n20th Rp 6.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/M1khMpVefMztXGRF7', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kavling`
--

CREATE TABLE IF NOT EXISTS `tb_kavling` (
  `id_kavling` int(3) NOT NULL,
  `namarumah` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` text NOT NULL,
  `alamat` text NOT NULL,
  `peta` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_komentar` (
  `id_komen` int(11) NOT NULL,
  `komen_status` int(11) NOT NULL,
  `komen_nama` varchar(100) NOT NULL,
  `komen_email` varchar(100) NOT NULL,
  `komen_isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komen`, `komen_status`, `komen_nama`, `komen_email`, `komen_isi`) VALUES
(28, 0, 'Herdi Nugroho', 'herdi.nugroho1912@gmail.com', 'Komentar ini'),
(30, 28, 'admin', '', 'dsassad'),
(31, 0, 'herdi', '', 'jsabdasbdk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE IF NOT EXISTS `tb_kontak` (
  `id_kontak` int(3) NOT NULL,
  `no_kantor` varchar(14) NOT NULL,
  `email_kantor` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `maps` text NOT NULL,
  `id_user` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `no_kantor`, `email_kantor`, `website`, `alamat_kantor`, `maps`, `id_user`) VALUES
(1, '0812 8306 1501', 'hp_property@gmail.com', 'www.hanggaraputraproperti.com', 'Jl.Margasari Maja Karawang', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.617934047991!2d107.3280857148618!3d-6.313816895430556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977a8f5e915b1%3A0x9c807b1f079ce7a8!2sJl.%20Margasari%2C%20Margasari%2C%20Kec.%20Karawang%20Tim.%2C%20Kabupaten%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1591952837182!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE IF NOT EXISTS `tb_news` (
  `id_news` int(3) NOT NULL,
  `judul` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `singkat` text NOT NULL,
  `detail` text NOT NULL,
  `detail1` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `judul`, `foto`, `singkat`, `detail`, `detail1`, `tanggal`, `id_user`) VALUES
(1, 'Peraturan Perumahan Baru', 'newsfoto12.jpg', 'Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) memperbaharui regulasi untuk subsidi perumahan bagi masyarakat berpenghasilan rendah (MBR),.....', '', '', '0000-00-00', 0),
(3, ' 4 Jenis Bahan Bangunan Yang Tahan Lama Untuk Rumah Anda', 'newsfoto121.jpg', 'Pernahkah Anda melihat spanduk yang menjual sebuah rumah dengan harga yang cukup murah? Namun, yakinkah Anda bahwa rumah tersebut masih dalam kondisi yang baik dan kokoh?', '', '', '2020-06-29', 0),
(4, '', 'newsfoto122.jpg', '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE IF NOT EXISTS `tb_profil` (
  `id_profil` int(3) NOT NULL,
  `nama_marketing` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `wa` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_marketing`, `jabatan`, `foto`, `wa`, `nohp`, `id_user`) VALUES
(3, 'Riza Hanggara', 'Direktur Utama', 'profil1.jpg', 'https://wa.me/6281283061501', '081283061501', 0),
(4, 'Risno Purnomo', 'Wakil Dirut', 'profil22.jpg', 'https://wa.me/6281283061501', '081283061501', 0),
(6, 'Jepi Kusnandar', 'Admin', 'profil3.jpg', 'https://wa.me/6281283061501', '081283061501', 0),
(7, 'Herdi Nugroho', 'Kordinator Marketing', 'WhatsApp_Image_2020-06-13_at_14_57_116.jpeg', 'https://wa.me/6281283061501', '081283061501', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruko`
--

CREATE TABLE IF NOT EXISTS `tb_ruko` (
  `id_ruko` int(3) NOT NULL,
  `namarumah` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` text NOT NULL,
  `alamat` text NOT NULL,
  `peta` text NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ruko`
--

INSERT INTO `tb_ruko` (`id_ruko`, `namarumah`, `desc`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `detail`, `harga`, `alamat`, `peta`, `id_user`) VALUES
(1, 'Neu River Garden', '               Harga Jual  : Rp. 2.000.000.000\r\n              All In           : Rp. 40.000.0000\r\n              Type            : 80 / 48\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'Ruko_neu.jpg', 'ruko_neu1.jpg', 'ruko_neu2.jpeg', 'ruko_neu3.jpeg', 'ruko_neu4.jpg', 'ruko_neu5.jpg', '-> Tipe 80/48 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj          : Rp 2.000.000.000\r\nDp          : Rp 30.000.000\r\nBooking     : Rp 10.000.000\r\nTotal biaya : Rp 40.000.000 sampai terima kunci \r\n\r\n\r\n\r\n->  Angsuran \r\n\r\n15th Rp 8.200.000\r\n20th Rp 6.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/95AegzZwJLViKeKi8', 0),
(2, 'Arcadia', '               Harga Jual  : Rp. 2.000.000.000\r\n              All In           : Rp. 40.000.000\r\n              Type            : 40 / 50\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'ruko_ar3.jpg', 'ruko_ar12.jpg', 'ruko_ar5.jpg', 'ruko_ar4.jpg', 'ruko_ar41.jpg', 'ruko_ar51.jpg', '-> Tipe 40/50 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '\r\n-> Harga jual\r\n\r\nHj               : Rp 2.000.000.000\r\nDp              : Rp 30.000.000\r\nBooking     : Rp 10.000.000\r\nTotal biaya : Rp 40.000.000 sampai terima kunci \r\n\r\n\r\n\r\n->  Angsuran \r\n\r\n15th Rp 6.700.000\r\n20th Rp 4.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/KriMqzY8nqrAFPLZ7', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rukost`
--

CREATE TABLE IF NOT EXISTS `tb_rukost` (
  `id_rukost` int(3) NOT NULL,
  `namarumah` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` text NOT NULL,
  `alamat` text NOT NULL,
  `peta` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rukost`
--

INSERT INTO `tb_rukost` (`id_rukost`, `namarumah`, `desc`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `detail`, `harga`, `alamat`, `peta`, `id_user`) VALUES
(1, 'Colombus', '               Harga Jual  : Rp. 3.000.000.000 \r\n              All In           : Rp.50.000.000\r\n              Type            : 10Kamar/14Kamar\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'Rukost_depan1.jpg', 'Rukost_depan.jpg', 'Rukost_a.jpg', 'Rukost.jpg', 'Rukost_depan_a.jpg', 'Rukost_pricelist.jpg', '-> Tipe 38/72 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj           : Rp 3.000.000.000\r\nDp          : Rp 40.000.000\r\nBooking : Rp 10.000.000\r\nTotal       : Rp 50.000.000 sampai terima kunci \r\n\r\n\r\n\r\n->  Angsuran\r\n\r\n15th Rp 10.700.000\r\n20th Rp 8.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/Pe4UVaDmr3L8rqh28', 0),
(2, 'Thalassa Residence', '               Harga Jual  : Rp. 2.000.000.000\r\n              All In           : Rp. 30.000.000\r\n              Type            : 50 / 45\r\n              Alamat        : Galuh Mas Karawang\r\n            ', 'T50_45_gerbang.jpg', 'T_a.jpg', 'T50_45_flayer.jpeg', 'T_c.jpg', 'T_e.jpg', 'T_pricelist.jpg', '-> Tipe 50/45 \r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n       \r\n', '-> Harga jual\r\n\r\nHj          : Rp 2.000.000.000\r\nDp          : Rp 20.000.000\r\nBooking     : Rp 10.000.000\r\nTotal biaya : Rp 30.000.000 sampai terima kunci \r\n\r\n\r\n\r\n->  Angsuran \r\n\r\n15th Rp 7.700.000\r\n20th Rp 5.400.000\r\n', 'Galuh Mas Karawang', 'https://goo.gl/maps/1sLGW7scBq6SmPpX7', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subsidi`
--

CREATE TABLE IF NOT EXISTS `tb_subsidi` (
  `id_subsidi` int(3) NOT NULL,
  `namarumah` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` text NOT NULL,
  `alamat` text NOT NULL,
  `peta` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subsidi`
--

INSERT INTO `tb_subsidi` (`id_subsidi`, `namarumah`, `desc`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `detail`, `harga`, `alamat`, `peta`, `id_user`) VALUES
(19, 'Permana  Adimix', '              Harga Jual  : Rp. 556.000.000\r\n              All In           : Rp. 10.000.000\r\n              Type            : 36/70\r\n              Alamat        : Karawang\r\n', '20180310_145703-01.jpeg', '20180310_150101-01.jpeg', '20180310_143715-01.jpeg', 'IMG-20171116-WA0067-01.jpeg', 'FB_IMG_1515038295533-01.jpeg', 'IMG-20180312-WA0022-01.jpeg', '-> Tipe 38/72 Komersil\r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap ?? Baja ringan\r\nDinding ?? Double Dinding\r\nLantai ?? Granit\r\nGenteng ?? beton\r\nKusen ?? Alumunium\r\nSanitair ?? Closet duduk\r\nDapur ?? Meja dapur & zink\r\nDapur ?? Tertutup dinding 2 meter\r\nAir bersih ?? Sumur bor & mesin pompa\r\nListrik ?? 1300 VA\r\n', '-> Harga jual\r\n\r\nHj : Rp 297.000.000\r\nDp : Rp 22.000.000\r\nKPR : Rp 275.000.000\r\nBooking : Rp 1000.000\r\nTotal biaya : 23.000.000 sampai terima kunci ??\r\n\r\n\r\n\r\n->  Angsuran BTN\r\n\r\n15th Rp 2.700.000\r\n20th Rp 2.400.000\r\n\r\n', 'Rengasdengklok', 'https://goo.gl/maps/6i2kkdWHEqh34Evk8', 0),
(21, 'Permata Harmoni', '              Harga Jual  : Rp. 130.000.000 \r\n              All In           : Rp. 4.000.000\r\n              Type            : 30 / 60\r\n              Alamat        : Kosambi\r\n            ', 'WhatsApp_Image_2018-01-16_at_12_55_08_(3)6.jpeg', 'WhatsApp_Image_2018-01-16_at_12_55_08_(4)6.jpeg', 'WhatsApp_Image_2018-01-16_at_12_55_08_(6)1.jpeg', 'WhatsApp_Image_2018-01-16_at_12_55_08_(5)1.jpeg', 'WhatsApp_Image_2018-01-16_at_12_55_08_(10)1.jpeg', 'WhatsApp_Image_2018-01-16_at_12_55_08_(11)6.jpeg', ' -> Tipe 30/60 Komersil\r\n\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n Bonus KANOPI\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj : Rp 130.000.000\r\nDp : Rp 2.000.000\r\nBooking : Rp 2000.000\r\nTotal biaya : 4.000.000 sampai terima kunci ??\r\n\r\n\r\n\r\n->  Angsuran BTN\r\n\r\n15th Rp 1.100.000\r\n20th Rp 900.000\r\n', 'kosambi cengkong', 'https://goo.gl/maps/Xc5kmo3bYe5XjARa6', 0),
(22, 'Bumi Sukasari Indah', '               Harga Jual  : Rp. 130.000.000\r\n              All In           : Rp. 3.000.000\r\n              Type            : 30 / 60\r\n              Alamat        : Sukasari,Cengkong kosambi\r\n            ', 'FB_IMG_1515038227560.jpg', 'FB_IMG_1515038219934.jpg', 'FB_IMG_1515038295533.jpg', 'FB_IMG_1515038443984.jpg', 'IMG-20171116-WA0038.jpg', 'IMG-20171116-WA0071.jpg', '-> Tipe 30/60\r\n Biaya proses GRATIS\r\n BPHTB GRATIS\r\n Sertifikat SHM\r\n \r\n->  SPESIFIKASI\r\n\r\nRangka atap = Baja ringan\r\nDinding = Double Dinding\r\nLantai = Granit\r\nGenteng = beton\r\nKusen = Alumunium\r\nSanitair = Closet duduk\r\nDapur = Meja dapur & zink\r\nDapur = Tertutup dinding 2 meter\r\nAir bersih = Sumur bor & mesin pompa\r\nListrik = 1300 VA\r\n', '-> Harga jual\r\n\r\nHj : Rp 130.000.000\r\nDp : Rp 2.000.000\r\nBooking : Rp 1000.000\r\nTotal biaya : 3.000.000 sampai terima kunci \r\n\r\n->  Angsuran BTN\r\n\r\n15th Rp 1.100.000\r\n20th Rp 900.000\r\n', 'Jl. Sukasari, Sukasari, Kec. Purwasari, Kabupaten Karawang, Jawa Barat', 'https://goo.gl/maps/eXYQGEtdh2ZSmFpJ9', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_cluster`
--
ALTER TABLE `tb_cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  ADD PRIMARY KEY (`id_kavling`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_ruko`
--
ALTER TABLE `tb_ruko`
  ADD PRIMARY KEY (`id_ruko`);

--
-- Indexes for table `tb_rukost`
--
ALTER TABLE `tb_rukost`
  ADD PRIMARY KEY (`id_rukost`);

--
-- Indexes for table `tb_subsidi`
--
ALTER TABLE `tb_subsidi`
  ADD PRIMARY KEY (`id_subsidi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_cluster`
--
ALTER TABLE `tb_cluster`
  MODIFY `id_cluster` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  MODIFY `id_kavling` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_ruko`
--
ALTER TABLE `tb_ruko`
  MODIFY `id_ruko` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_rukost`
--
ALTER TABLE `tb_rukost`
  MODIFY `id_rukost` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_subsidi`
--
ALTER TABLE `tb_subsidi`
  MODIFY `id_subsidi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
