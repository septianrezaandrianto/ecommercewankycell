-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 05:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wankycell_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `telepon_admin` varchar(13) NOT NULL,
  `foto_admin` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `pass_admin`, `nama_admin`, `telepon_admin`, `foto_admin`) VALUES
(8, 'adminwanky', '12345', 'Reza Andri', '08978699574', '16992343_1562622737100599_3579153231774299939_o.jpg'),
(9, 'adminwanky2', '54321', 'Pandu Ario Boko', '089696325185', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`id_bank` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`) VALUES
(1, 'Bank Indonesia (BI)'),
(2, 'Bank Mandiri'),
(3, 'Bank Negara Indonesia (BNI)'),
(4, 'Bank Rakyat Indonesia (BRI)'),
(5, 'Bank Tabungan Negara (BTN)'),
(6, 'Bank Bukopin'),
(7, 'Bank Central Asia (BCA)'),
(8, 'Bank CIMB Niaga'),
(9, 'Bank Permata');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE IF NOT EXISTS `detail_pembelian` (
`id_detail_pembelian` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `sub_berat` int(11) NOT NULL,
  `sub_harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_detail_pembelian`, `id_pembelian`, `id_produk`, `jumlah`, `nama_produk`, `harga_produk`, `berat_produk`, `sub_berat`, `sub_harga`) VALUES
(127, 255, 9, 1, 'Solar Power Bank Tenaga Surya 5000mAh', 90000, 200, 200, 90000),
(128, 256, 11, 2, 'V-GeN Power Bank PB-V451 Slight 4500mAh Batik Premium Design', 160000, 200, 400, 320000),
(129, 257, 10, 1, 'Veger V90 Series Power Bank 13000mAh', 140000, 200, 200, 140000),
(130, 258, 11, 2, 'V-GeN Power Bank PB-V451 Slight 4500mAh Batik Premium Design', 140000, 200, 400, 280000),
(131, 259, 12, 4, 'V-GeN Power Bank PB-V502 Ultra Slim Light 5000mAh', 160000, 200, 800, 640000),
(132, 260, 16, 1, 'Speaker Active Multimedia Speaker Portable Mini', 35000, 400, 400, 35000),
(133, 261, 13, 1, 'Robot Power Bank RT7100 6600mAh By Vivan Dual Output', 150000, 300, 300, 150000),
(134, 262, 9, 1, 'Solar Power Bank Tenaga Surya 5000mAh', 70000, 200, 200, 70000),
(135, 262, 19, 1, 'VPS Speaker Bluetooth Ibox Portable Mini', 75000, 200, 200, 75000),
(136, 262, 21, 2, 'Splitter Audio 2in1 Male to Dual Female 3.5mm For Smarphone / Tablet / Laptop', 25000, 100, 200, 50000),
(137, 263, 9, 1, 'Solar Power Bank Tenaga Surya 5000mAh', 70000, 200, 200, 70000),
(138, 264, 13, 2, 'Robot Power Bank RT7100 6600mAh By Vivan Dual Output', 150000, 300, 600, 300000),
(139, 265, 16, 1, 'Speaker Active Multimedia Speaker Portable Mini', 35000, 400, 400, 35000),
(140, 266, 20, 2, 'Kabel Audio Aux Jack 3.5mm Smartphones / Laptop / Tablet to Speaker', 15000, 100, 200, 30000),
(141, 267, 21, 1, 'Splitter Audio 2in1 Male to Dual Female 3.5mm For Smarphone / Tablet / Laptop', 25000, 100, 100, 25000),
(142, 268, 24, 1, 'Bracket Phone Holder Universal Holder Spion Untuk Motor', 50000, 300, 300, 50000),
(143, 269, 32, 2, 'Folding Tripod For DSLR Free Holder U', 45000, 100, 200, 90000),
(144, 270, 27, 2, 'Holder HP Jepit Ventilasi AC Mobil', 35000, 100, 200, 70000),
(145, 271, 14, 1, 'Xiaomi MiFa M1 Speaker Bluetooth Portabel with Slot Micro SD', 300000, 350, 350, 300000),
(146, 271, 21, 1, 'Splitter Audio 2in1 Male to Dual Female 3.5mm For Smarphone / Tablet / Laptop', 25000, 100, 100, 25000),
(147, 271, 22, 1, 'Kabel Audio Aux 2in1 3.5mm Smartphones / Laptop / Tablet to Speaker', 20000, 100, 100, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Power Bank'),
(2, 'Speaker Portable'),
(3, 'Kabel Audio'),
(4, 'Holder'),
(5, 'Aksesoris Narsis');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
`id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `tarif_ongkir` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif_ongkir`) VALUES
(1, 'Ambon', 52000),
(2, 'Ampana Kota', 58000),
(3, 'Balikpapan', 36000),
(4, 'Banda Aceh', 33000),
(5, 'Bandar Lampung', 30000),
(6, 'Bandung	', 10000),
(7, 'Banjarmasin', 30000),
(8, 'Batam', 25000),
(9, 'Bengkulu', 22000),
(10, 'Bontang', 49000),
(11, 'Cilacap', 15000),
(12, 'Cilegon', 9000),
(13, 'Cirebon', 10000),
(14, 'Denpasar', 20000),
(15, 'Gorontalo', 45000),
(16, 'Jabodetabek', 8000),
(17, 'Jambi', 25000),
(18, 'Karawang', 9000),
(19, 'Kediri', 20000),
(20, 'Magelang', 18000),
(21, 'Medan', 27000),
(22, 'Palangkaraya', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `pass_pelanggan` varchar(32) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `telepon_pelanggan` varchar(13) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `pass_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(8, 'faisalfachri@gmail.com', '12345', 'Faisal Fachri', '089696758796', 'Kp. Bogor Real Estate'),
(9, 'faisalhadi@gmail.com', '12345', 'RIyadzhul Faisal Hadi', '0857987721111', 'Pulo Gebang Indah Permah'),
(10, 'ahmadfadlli@yahoo.com', '12345', 'Ahmad Fadlli', '081264759825', 'Kp. Babelan Permai Pesona'),
(11, 'asep.mail@yahoo.com', '12345', 'Asep Saefudin', '089768647658', 'Cakung Penggilingan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti_foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama_pelanggan`, `nama_bank`, `jumlah`, `tanggal_pembayaran`, `bukti_foto`) VALUES
(27, 247, 'Asep Saefudin', 'Bank Bukopin', 188000, '2018-07-19', '20180719190853unnamed.png'),
(28, 252, 'Faisal Fachri', 'Bank Indonesia (BI)', 200000, '2018-07-20', '20180720084214backgroundes.png'),
(29, 251, 'Faisal Fachri', 'Bank Indonesia (BI)', 329000, '2018-07-23', '201807232002251012450_665696490126566_421271159_n.jpg'),
(30, 255, 'Faisal Fachri', 'Bank Indonesia (BI)', 98000, '2018-07-23', '201807232005151012450_665696490126566_421271159_n.jpg'),
(31, 256, 'Faisal Fachri', 'Bank Indonesia (BI)', 329000, '2018-07-23', '20180723201103ig.png'),
(32, 257, 'Faisal Fachri', 'Bank Negara Indonesia (BNI)', 185000, '2018-07-24', '20180724095353ig.png'),
(33, 258, 'Faisal Fachri', 'Bank Indonesia (BI)', 288000, '2018-07-24', '20180724095840ig.png'),
(34, 261, 'Dwi Purnomo', 'Bank Indonesia (BI)', 158000, '2018-07-26', '20180726011830Black-Background-Designs.jpg'),
(35, 259, 'Faisal Fachri', 'Bank Central Asia (BCA)', 665000, '2018-07-30', '20180730190409bukti.jpeg'),
(36, 263, 'RIyadzhul Faisal Hadi', 'Bank Indonesia (BI)', 78000, '2018-07-30', '20180730192053logo BSI.png'),
(37, 264, 'RIyadzhul Faisal Hadi', 'Bank Mandiri', 309000, '2018-07-30', '20180730192130prosedur ujian sidang.png'),
(38, 265, 'RIyadzhul Faisal Hadi', 'Bank Permata', 43000, '2018-07-30', '20180730192424albarkah.png'),
(39, 266, 'RIyadzhul Faisal Hadi', 'Bank Mandiri', 39000, '2018-07-30', '20180730192548bukti trf bca.png'),
(40, 267, 'RIyadzhul Faisal Hadi', 'Bank Negara Indonesia (BNI)', 45000, '2018-07-30', '20180730192654bukti trf.jpeg'),
(41, 268, 'RIyadzhul Faisal Hadi', 'Bank Negara Indonesia (BNI)', 95000, '2018-07-30', '20180730192821pa kyai.png'),
(42, 269, 'RIyadzhul Faisal Hadi', 'Bank Mandiri', 142000, '2018-07-30', '20180730193412bukti trf bca.png'),
(43, 270, 'RIyadzhul Faisal Hadi', 'Bank Mandiri', 78000, '2018-07-30', '20180730193501bukti trf bca.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
`id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `tarif_ongkir` int(11) NOT NULL,
  `total_belanja` int(11) NOT NULL,
  `status_pembelian` varchar(50) NOT NULL DEFAULT 'Pending',
  `resi_pengiriman` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif_ongkir`, `total_belanja`, `status_pembelian`, `resi_pengiriman`) VALUES
(255, 8, 16, '2018-07-23', 98000, 'Jabodetabek', 8000, 90000, 'Barang Dikirim', 'CKG123564895322'),
(256, 8, 12, '2018-07-23', 329000, 'Cilegon', 9000, 320000, 'Barang Dikirim', 'SMK0912392392345'),
(257, 8, 15, '2018-07-24', 185000, 'Gorontalo', 45000, 140000, 'Sudah Bayar', ''),
(258, 8, 16, '2018-07-24', 288000, 'Jabodetabek', 8000, 280000, 'Sudah Bayar', ''),
(259, 8, 17, '2018-07-24', 665000, 'Jambi', 25000, 640000, 'Barang Dikirim', 'CKG098648972893'),
(260, 13, 12, '2018-07-25', 44000, 'Cilegon', 9000, 35000, 'Pending', ''),
(261, 12, 16, '2018-07-26', 158000, 'Jabodetabek', 8000, 150000, 'Barang Dikirim', 'CKG128344955'),
(262, 8, 16, '2018-07-30', 203000, 'Jabodetabek', 8000, 195000, 'Pending', ''),
(263, 9, 16, '2018-07-30', 78000, 'Jabodetabek', 8000, 70000, 'Barang Dikirim', 'CKG083938493477'),
(264, 9, 12, '2018-07-30', 309000, 'Cilegon', 9000, 300000, 'Lunas', ''),
(265, 9, 16, '2018-07-30', 43000, 'Jabodetabek', 8000, 35000, 'Sudah Bayar', ''),
(266, 9, 18, '2018-07-30', 39000, 'Karawang', 9000, 30000, 'Sudah Bayar', ''),
(267, 9, 19, '2018-07-30', 45000, 'Kediri', 20000, 25000, 'Sudah Bayar', ''),
(268, 9, 15, '2018-07-30', 95000, 'Gorontalo', 45000, 50000, 'Sudah Bayar', ''),
(269, 9, 1, '2018-07-30', 142000, 'Ambon', 52000, 90000, 'Sudah Bayar', ''),
(270, 9, 16, '2018-07-30', 78000, 'Jabodetabek', 8000, 70000, 'Sudah Bayar', ''),
(271, 9, 16, '2018-08-01', 353000, 'Jabodetabek', 8000, 345000, 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `stok_produk`, `id_kategori`, `foto_produk`, `deskripsi_produk`) VALUES
(9, 'Solar Power Bank Tenaga Surya 5000mAh', 70000, 200, 3, 1, 'solar.jpg', 'Sekarang anda tidak perlu bingung lagi untuk mengisi daya batre handphone ketika lampu rumah padam atau anda lupa mengisi power bank. Sekarang ada solusi bagus untuk anda yang mengalami hal terhadap baterai handphone dengan solar powerbank.\r\n<br><br>\r\nWaterproof Solar Power Bank adalah baterai portabel yang dicharge melalui port USB atau sel surya . Hal ini kemudian dapat mentransfer kekuatan untuk ponsel atau perangkat mobile lainnya dengan Powerbank tenaga surya terisi penuh dalam tas anda.\r\n<br><br>\r\nAnda dapat memastikan bahwa Anda akan selalu dapat mengisi daya perangkat Anda di mana saja kapan saja - tanpa harus bergantung pada soket listrik. Berharap untuk masa depan tanpa baterai mati!\r\n<br><br>\r\nPowerbank design baru. 5000mah. bisa charge dengan cahaya matahari cocok bagi teman yang kerja outdoor. cocok untuk smartphone iPhone, Samsung, blackberry, Nokia yg micro USB.\r\n<br><br>\r\nSpesifikasi Power Bank Solar Charger:<br>\r\nEmergency LED torch<br>\r\nSuper waterproof and dustproof<br>\r\nStrong shockproof and drop resistance<br>\r\nDual micro USB charging ports<br>\r\nBattery Capacity: 5000mAh Li-polymer battery<br>\r\nSolar Panel:5V, 200mA<br>\r\nInput: DC 5V/ 1A<br>\r\nOutput: DC 5V/ 2 x 1A<br>\r\nProduct size: 142* 75*13.6mm<br>\r\nOperation Temperature: 0-45 degree<br>\r\nCompatible: for all Mobilephone ,iPad, Android phone, GPS device, camera (most devices that use a USB cable to charge)<br><br>\r\n\r\nPackage Included : <br>\r\n- 1x Solar Panel Charger<br>\r\n- 1x Micro USB charging cable<br>\r\n- 1x Carabiner<br><br>\r\n\r\nPowerbank ini juga bisa dicharge dengan kabel seperti powerbank biasa.'),
(10, 'Veger V90 Series Power Bank 13000mAh', 140000, 200, 0, 1, 'veger.jpg', 'Powerbank Veger Platinum Merupakan Power Bank :<br>\r\nREAL CAPACITY,<br>\r\nDistributor Resmi Veger,<br>\r\nKabel tidak bergaransi<br><br>\r\nDengan Spesifikasi :<br>\r\ncapacity real,<br>\r\nBattery Li-Polymer,<br>\r\nSerta Included,<br>\r\nLed indicator,<br>\r\n1 unit powerbank,<br>\r\n1 kabel,<br>\r\n1 connector,<br>\r\n1 kartu garansi Resmi Veger,<br>\r\n1 buku panduan,<br>\r\nGood Quality minim retur cuma 0.1%.\r\n<br><br>\r\n \r\n\r\nCapacity 13000mAh<br>\r\nBattery Li-Polymer<br>\r\nInput 5V 1.0 A<br>\r\n3 output 5V 1.0 A<br>\r\nCompatible With All SmartPhone<br>\r\nFast Charging<br>'),
(11, 'V-GeN Power Bank PB-V451 Slight 4500mAh Batik Premium Design', 140000, 200, 0, 1, 'vgen.jpg', 'Kapasitas 4500mAh<br>\r\nBerat: 120g<br>\r\nInput: DC 5V/2000mA (max)<br>\r\nOutput: DC 5V/2100mA (max)<br>\r\nPower Status: LED Indicator<br>\r\nDimension: 144mm x 61mm x 9.5mm<br>\r\nChargeable by data cable<br>\r\nREAL CAPACITY<br><br>\r\n\r\nKelengkapan:<br>\r\nData Cable Fast Charging 20cm<br>\r\nManual Book<br>\r\nWarranty Card<br><br>\r\n\r\nFull Protection:<br>\r\nShort Circuit Protection<br>\r\nOver Current Protection<br>\r\nOver Heat Protection<br>\r\nOver Charge Protection<br>'),
(12, 'V-GeN Power Bank PB-V502 Ultra Slim Light 5000mAh', 160000, 200, 0, 1, 'light.jpg', 'Kapasitas 5000mAh<br>\r\nBerat: 130g<br>\r\nInput: DC 5V/1000mA<br>\r\nOutput: DC 5V/2100mA<br>\r\nPower Status: LED Indicator<br>\r\nDimension : 138mm x 63mm x 9.5mm<br>\r\nChargeable by data cable<br>\r\nREAL CAPACITY<br><br>\r\n\r\nKelengkapan:<br>\r\nData Cable Fast Charging 20cm<br>\r\nManual Book<br>\r\nWarranty Card<br><br>\r\n\r\nFull Protection:<br>\r\nShort Circuit Protection<br>\r\nOver Current Protection<br>\r\nOver Heat Protection<br>\r\nOver Charge Protection<br>'),
(13, 'Robot Power Bank RT7100 6600mAh By Vivan Dual Output', 150000, 300, 2, 1, 'robot.jpg', 'Spesifikasi<br>\r\nModel : RT7100<br>\r\nKapasitas : 6.600mAh<br>\r\nKompatibilitas : Smartphone & Tablet<br>\r\nPerlindungan Sirkuit : Ya<br>\r\nEfisiensi konversi : 85%<br>\r\nInput : 2A<br>\r\nDual Output : 2.1A / 1A<br>\r\nDimensi : 107 x 61 x 21<br>\r\nBerat : 180g<br>\r\nWaktu Charging : sekitar 4 jam<br><br>\r\n\r\nIsi dalam kemasan:<br>\r\n- 1x Powerbank Robot RT7100 6.600mAh<br>\r\n- 1x Kabel Micro USB panjang 60cm<br>\r\n- 1x Warranty Card<br>\r\n- 1x Manual Card<br>'),
(14, 'Xiaomi MiFa M1 Speaker Bluetooth Portabel with Slot Micro SD', 300000, 350, 4, 2, 'mifa.jpg', '1. Micro SD Slot<br>\r\nXiaomi MiFa M1 terbaru saat ini dilengkapi dengan Micro SD Slot sehingga dapat memudahkan anda mendegarkan lagu kesukaan anda tanpa harus boros battery Smartphone anda<br><br>\r\n\r\n2. Super Powerful Bass System<br>\r\nJika anda melakukan perbandingan dengan Xiaomi Cube Speaker yang versi lama Bass yang dihasilkan dari Speaker M1 MiFa ini jauh lebih powerful dan sangat nyaman untuk di dengar dalam waktu yang cukup lama<br><br>\r\n\r\n3. Delicate Appearance.<br>\r\nBodi dari Xiaomi MiFa M1 Cube Speaker Versi terbaru ini dilengkapi dengan Bodi Full Aluminium dan di campuran ABS Material sehingga membuat Xiaomi Cube Speaker ini terlihat sangat elegant dan menarik<br><br>\r\n\r\nFeatures:<br>\r\nBluetooth wireless music playing,<br>\r\nHands-free function<br>\r\nOne button Bluetooth reconnection,<br>\r\nMicro SD card music playing<br>\r\nUSB sound card and card reader function<br>\r\nBuilt-in 1000mAh Li-ion Battery<br>\r\nOutput power 3W x 2<br>'),
(15, 'Fleco Speaker PC Mini USB 2.0 Wooden F-016', 110000, 950, 5, 2, 'fleco.jpg', 'Speaker 2.0 Multimedia PC Mini Fleco F-016 Dengan Desain futuristik penampilan yang bergaya dengan menonjolkan unsur elegan minimalis dan denan 3.5 input audio, saluran 2.0 speaker.<br>\r\n Compatible dengan Perangkat USB standar, seperti ponsel , Tablet , Komputer , Laptop dll.<br>\r\nBahan Bagus dan berkualitas memastikan kualitas suara murni dan indah.<br>\r\nSpeaker karet magnet kuat berteknologi terkini juga bass berdaya kejut dan trable jangkauan tinggi.<br><br>\r\n\r\nSpeaker Fleco F016<br>\r\nUSB 2.0 port jack 3.5mm<br>\r\n2.0 Speakers<br>\r\nSuara keras dan Jernih<br>\r\nFrequency Response : 20Hz-20KHz<br>'),
(16, 'Speaker Active Multimedia Speaker Portable Mini', 35000, 400, 3, 2, 'mini.jpg', 'Speaker Active Multimedia Speaker Portable Mini<br><br>\r\n\r\nSpeaker portable mini yang sangat praktis dan mudah digunakan. Menggunakan Jack Connector Micro USB . Tanpa colok listrik. Praktis dibawa kemana-mana. Kualitas suara yang bagus cocok menemani waktu anda dimanapun dan kapan pun.<br><br>\r\n\r\ndapat diaplikasikan pada Notebook,PC,MP3 atau berbagai macam perangkat audio lain nya.'),
(17, 'YX-X66 Wireless Bluetooth Mini Speaker Kapsul Premium Sound', 85000, 300, 5, 2, 'kapsul.jpg', 'YX-X66 Wireless Bluetooth Mini Speaker Kapsul Premium Sound yang bermodel keren dan stylis, <br>\r\nSpeaker Portable ini sangat cocok dan praktis untuk dibawa kemana-mana, <br>\r\nDengan teknologi Nirkabel / Wireless serta model yang sangat Unik namun memiliki Kualitas suara yang sangat bagus,<br>\r\nAnda dapat menikmati Musik / Video dari Gadget anda cukup via koneksi Bluetooth.'),
(19, 'VPS Speaker Bluetooth Ibox Portable Mini', 75000, 200, 4, 2, 'ibox.jpg', 'VPS Speaker Bluetooth Ibox Portable Mini merupakan speaker portable yang konektivitas tidak hanya mengandalkan bluetooth saja, bisa menggunakan micro sd, bisa juga plug and play ke slot earphone/3.5mm jack. <br>\r\nDengan adanya feature ini speaker tidak hanya untuk handphone saja tetapi juga bisa untuk laptop, notebook, tablet pc, pc dll.<br>\r\nKualitas suara yang telah ditingkatkan, suara treble dan bass dipisah dengan baik, tidak saling timpa, sehingga menghasilkan audio yang cukup baik.<br>\r\nPilihan warna yang unik dan menarik, design casing menggunakan metal, membuat produk ini awet dan unik. '),
(20, 'Kabel Audio Aux Jack 3.5mm Smartphones / Laptop / Tablet to Speaker', 15000, 100, 3, 3, 'aux01.jpg', 'Kabel Aux ini cocok digunakan di tape mobil atau speaker PC untuk mendengarkan lagu dari player lagu mp3 yang ada di iPod / iPad / iPhone / handphone / mp3 / mp4 player dengan cara menyambungkan kabel ini ke lubang aux di tape mobil atau Speaker PC.'),
(21, 'Splitter Audio 2in1 Male to Dual Female 3.5mm For Smarphone / Tablet / Laptop', 25000, 100, 1, 3, 'spliter.jpg', 'Splitter Jack 3.5mm Male ke Dual Female Headphone dan Microphone. Dengan ini Anda dapat menghubungkan headset yang memiliki Microphone ke laptop / PC / gadget Anda.\r\n<br><br>\r\nFeatures : <br>\r\nDengan ini Anda dapat menghubungkan headset yang memiliki Microphone ke laptop / PC / gadget Anda<br>\r\nDapat digunakan untuk smartphone, tablet, mp3 player dan media lain yang memiliki 3.5mm headphone jack<br>\r\nDapat digunakan untuk audio output dan microphone<br>\r\n<br>\r\nAudio Splitter 2in1<br>\r\nMale to Dual Female<br>\r\nSupport Jack 3.5mm<br>\r\nCompatible for Headset & Microphone'),
(22, 'Kabel Audio Aux 2in1 3.5mm Smartphones / Laptop / Tablet to Speaker', 20000, 100, 4, 3, 'audio aux01.jpg', 'Kabel Aux ini cocok digunakan di tape mobil atau speaker PC untuk mendengarkan lagu dari player lagu mp3 yang ada di iPod / iPad / iPhone / handphone / mp3 / mp4 player dengan cara menyambungkan kabel ini ke lubang aux di tape mobil atau Speaker.'),
(23, 'Splitter Dual Audio 3.5mm for Smartphone / Tablet / mp3 player', 25000, 10, 5, 3, 'dual01.jpg', 'Splitter Jack 3.5mm Male ke Female Headphone dan Microphone. Dengan ini Anda dapat menghubungkan headphone / earphone dan microphone dalam 1 buah port 3.5mm pada laptop / PC / gadget Anda.<br>\r\n<br>\r\nDapat menghubungkan headphone dan microphone pada 1 port audio 3.5 mm.<br>\r\nKompatibel untuk smartphone, tablet, mp3 player dan media lain yang memiliki 3.5 mm headphone jack. <br>\r\nDapat digunakan untuk audio output dan microphone.'),
(24, 'Bracket Phone Holder Universal Holder Spion Untuk Motor', 50000, 300, 4, 4, 'bracket.jpg', 'Holder ini sangat mudah digunakan dan aman digunakan di handphone anda, karena pada setiap sisi penjepitnya dilengkapi dengan busa halus yang tebal dan kuat. Dan Mount Holder Motor Universal ini sangat mudah digunakan anda tinggal pasang holder ini di bagian mur spion anda.<br>\r\n<br>\r\nPemasangan yang sangat mudah dan Gampang. <br>\r\nCukup Dipasang di Kaca Spion Motor dan Dibaut Sehingga Aman dan Kuat.<br>\r\nTahan terhadap guncangan dan Goyangan saat berkendara<br>\r\nKepala Holder Bisa putar sampai 360% <br>\r\nPosisi Handphone bisa Tegak (Portait) dan Tidur (Landscape)<br>\r\nTerdapat kunci agar kepala holder tidak diputer<br>\r\nPengikat tiangan dan holder ada 4 gigi sehingga lebih kuat tidak goyang-goyang<br>\r\nCocok dibawa pergi keluar kota / Mudik / Traveling.'),
(25, 'Holder AC Mobil Universal Phone Holder', 35000, 100, 5, 4, 'molbil.jpg', 'Cocok bagi anda yang peduli dengan keselamatan anda saat mengemudi. Mempermudah kamu menggunakan gadget saat mengendarai mobil. Dipasang di AC mobil tanpa merusak AC mobil. <br>\r\nHandphone holder di gunakan di ventilasi ac mobil anda. dapat digunakan di hampir semua jenis ventilasi ac mobil penjepit ada 2 macam untuk yg bilah ventilasi tebal dan tipis.Simple, ringkas, tidak banyak makan tempat di mobil seperti handphone holder lainnya,dapat dibawa kemana2.<br>\r\nUkuran produk ini yang sangat kecil dan ringan membuat anda sangat mudah menempatkan hp anda ditempat yang tidak menghalangi pemandangan anda(bukan dikaca mobil).'),
(26, 'Holder Universal Tab / Tablet', 70000, 200, 5, 4, 'universal.jpg', 'Universal car holder for Tab cocok digunakan untuk mobil anda, penggunaanya juga tidak ribet sangat mudah. Holder bisa di rotasikan hingga 360 derajat, pelepasan tombolnya juga cepat . <br>\r\nUniversal Car Holder ini digunakan untuk menaruh Tablet PC dan perangkat besar Anda di dalam mobil. <br>\r\nBagian kaki terbuat dari vacuum cup besar, 2x lebih besar dari vacum cup buat hp, sehingga Anda dapat menaruh produk ini dikaca mobil dengan sangat kuat dan mudah tanpa takut terjatuh. Car Holder ini memiliki bagian kaki terbuat dari vacuum cup.<br>\r\nUniversal car holder Tab cocok digunakan untuk mobil anda, penggunaanya juga tidak ribet sangat mudah. Holder bisa di rotasikan hingga 360 derajat, pelepasan tombolnya juga cepat.'),
(27, 'Holder HP Jepit Ventilasi AC Mobil', 35000, 100, 3, 4, 'jepit1.jpg', 'Cocok bagi anda yang peduli dengan keselamatan anda saat mengemudi. Mempermudah kamu menggunakan gadget saat mengendarai mobil.<br>\r\nDipasang di AC mobil tanpa merusak AC mobil. Handphone holder di gunakan di ventilasi ac mobil anda. <br>\r\nDapat digunakan di hampir semua jenis ventilasi ac mobil penjepit ada 2 macam untuk yg bilah ventilasi tebal dan tipis.Simple, ringkas, tidak banyak makan tempat di mobil seperti handphone holder lainnya,dapat dibawa kemana2.<br>\r\nUkuran produk ini yang sangat kecil dan ringan membuat anda sangat mudah menempatkan hp anda ditempat yang tidak menghalangi pemandangan anda(bukan dikaca mobil).'),
(28, 'Holder Charger Dinding / Hanger', 15000, 100, 5, 4, 'dinding1.jpg', 'Hanger Hp yang sangat praktis dan memudahkan anda saat mengisi baterai atau Saat pada isi ulang baterai HP Anda.\r\n<br><br>\r\nKadang pada saat recharge HP, kita meletakkannya di sembarang tempat yang rawan terinjak atau jatuh. Dengan menggunakan Hanger HP ini memungkinkan kita untuk mengisi baterai HP dengan lebih aman dan sangat praktis.\r\n<br><br>\r\nBahan Plastik & kuat.'),
(29, 'Lampu Selfie Ring Lighting For Smartphone', 80000, 50, 5, 5, 'selfi.jpg', 'Klip Pada Selfie Cincin Cahaya Dengan 36 Lampu Led Untuk Ponsel Pintar Kamera Putaran Bentuk Putih.<br>\r\n36 Lampu LED Yang Terang, Sangat Sempurna Untuk Mengambil Gambar Foto Maupun Video dalam kondisi Gelap atau Minim Cahaya.<br>\r\nMudah Pemasangan Hanya Tinggal Klip Tanpa Merusak Body Smartphone'),
(30, 'Sports Camera Gopro 1.5 Inch Screen 1080p', 300000, 400, 5, 5, 'kogan.jpg', 'Abadikan aksi terbaik Anda dengan  Sport Cam dengan mudah! Kali ini menghadirkan sebuah perangkat digital dengan definisi tinggi untuk merekam video dan foto yang akan menemani petualangan Anda.\r\n<br><br>\r\nModel yang lebih kecil dan lebih ringan  tetapi lebih kuat menjadikan kamera tahan air ini cocok untuk mengabadikan momen-momen penuh aksi.'),
(31, 'Gorilapod Tripod Gorilla Pod With Holder For Smartphone Up To 5,5', 45000, 20, 5, 5, 'tripod.jpg', 'Wanky Tripod Gorilla Pod With Holder For Smartphone Up To 5,5" - Putih\r\n<br><br>\r\nFlexible Tripod memiliki 3 kaki yang masing-masing kakinya fleksibel / GorillaPod. Anda dapat meletakkan di tempat-tempat lain yang tidak mungkin dilakukan tripod pada umumnya, misalnya di cabang batang pohon, tiang dan tempat lainnya yang memungkinkan.\r\n<br><br>\r\nAnda dapat leluasa menentukan posisi kamera dan dapat di kunci posisinya jika telah menemukan posisi yang sesuai. Socketnya menggunakan universal 1/4 screw, sehingga semua kamera pocket dan mirrorless camera yang memiliki jenis socket ini dapat menggunakan tripod ini.'),
(32, 'Folding Tripod For DSLR Free Holder U', 45000, 100, 3, 5, 'folding.jpg', 'Tripod Monopod for DSLR free Holder U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
 ADD PRIMARY KEY (`id_detail_pembelian`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
 ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`), ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
MODIFY `id_detail_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=272;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
