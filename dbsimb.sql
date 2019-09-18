-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2018 pada 04.43
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsimb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(10) NOT NULL,
  `judul` varchar(20) DEFAULT NULL,
  `isi` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(28, 'UNDA GONTOR', 'Mahasiswa adalah komunitas akademik yang identik dengan pemikiran kritis dan ilmiah. Mahasiswa Fakultas Ushuluddin bukan merupakan pengecualian, dia senantiasa berusaha menggali ilmu-ilmu agama secara', '2018-04-24', 'unida-gontor_20170321_081720.jpg'),
(29, 'UNDA GONTOR', 'Terletak di tengah hamparan tanah persawahan di sebuah desa di Ponorogo, Jawa Timur Indonesia, Universitas Darussalam Gontor, atau disingkat UNIDA Gontor, merupakan universitas yang unik dibanding uni', '2018-04-24', 'ba.jpg'),
(30, 'UNDA GONTOR', 'Universitas Darussalam Gontor kembali mendapat kehormatan atas kunjungan Dr Mehmet Fatih Pehlivan, International program coordinator of Istanbul Sabahattin Zaim University (IZU),  pada Sabtu, 31 Maret', '2018-04-24', 'Campus-Rabithah-1024x680.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(24, 'excellent-islamic-wallpapers-for-desktop-background-29.jpg', 313229, 'image/jpeg'),
(25, 'ba.jpg', 287649, 'image/jpeg'),
(30, 'unida-gontor_20170321_081720.jpg', 50781, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `pil_prodi` varchar(50) NOT NULL,
  `pil_prodi2` varchar(50) NOT NULL,
  `pil_prodi3` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pendidikan_pesantren` varchar(10) NOT NULL,
  `nama_pesantren` varchar(100) NOT NULL,
  `lulus` int(11) NOT NULL,
  `lama_pendidikan` varchar(20) NOT NULL,
  `sd` text NOT NULL,
  `smp` text NOT NULL,
  `sma` text NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `pelatihan` text NOT NULL,
  `skill` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_siswa`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pil_prodi`, `pil_prodi2`, `pil_prodi3`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `propinsi`, `kodepos`, `no_telp`, `no_hp`, `email`, `pendidikan_pesantren`, `nama_pesantren`, `lulus`, `lama_pendidikan`, `sd`, `smp`, `sma`, `ayah`, `pendidikan_terakhir`, `penghasilan`, `pelatihan`, `skill`, `username`, `password`, `level`) VALUES
(40, 'admin', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', 'admin', 'admin', 1),
(46, 'RIZQI DINO ', 'BANDUNG', '2018-04-19', 'LAKI - LAKI', 'Pendidikan Bahasa Arab', 'Studi Agama - Agama', 'Studi Agama - Agama', 'Jalan Pegangsaan TImur Tengah', 'Wonoharjo', 'Timur Tengah', 'Sukoharjo', 'Jawa Tengah', 4732984, 8318931, 2147483647, 'rizqidino08@gmail.com', 'Ya', 'Gontor', 2016, '2 Tahun', 'Muhammadiyah', 'Sukomakmur', 'Sukorajo', 'Satino', 'SMA', '1000000', 'Renang', 'Bernyanyi', 'khan', 'khan', 0),
(53, 'riqi dino triatmoko', 'india', '2018-04-09', 'Laki - Laki', 'Teknik Informatika', 'Teknik Sipil', 'Ekonomi', 'bombai bombai india', 'bombai', 'bombai', 'bombai', 'khanazi', 4321, 2147483647, 2147483647, 'dinokhan@gmail.com', 'Ya', 'darrusalam gontor', 2016, '4', 'mi india', 'smp india', 'kmi gontor', 'abi khan', 'SMA', '1.000.000', 'saka bayangkara', 'bongkar pc', 'dino', 'dino', 0),
(54, 'taufiq sukma aji ', 'swedia', '2018-04-24', 'laki-laki', 'Teknik Informatika', 'Perbandingan Madhab dan Hukum', 'Perikanan', 'siman ponorogo\r\n', 'siman', 'siman', 'ponorogo', 'jawa timur', 42132, 87645555, 98777777, '', 'Ya', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0),
(55, 'taufiq sukma aji ', 'swedia', '2018-04-24', 'laki-laki', 'Teknik Informatika', 'Perbandingan Madhab dan Hukum', 'Perikanan', 'siman ponorogo\r\n', 'siman', 'siman', 'ponorogo', 'jawa timur', 42132, 87645555, 98777777, 'taufiq@gmail.com', 'Ya', 'wali songo', 2016, '4', 'mi demangan', 'smp ponorogo', 'kmi gontor', 'fathery', 'SMA', '2.000.000', 'kmd', 'membaca cepat', 'taufiq', 'taufiq', 0),
(56, 'salsabila airi', 'magelang', '2018-04-16', 'perempuan', 'Teknik Sipil', 'Pendidikan Bahasa Arab', 'Ilmu Hubungan Internasional', 'magelang jateng', 'pakis', 'muntilan', 'magelang', 'Jawa Tengah', 34123, 82333432, 85213113, 'airi@gmail.com', 'Ya', 'darul qiyam', 2016, '4', 'mi at taqwa', 'smp at taqwa', 'ma maarif', 'waskito', 's3', '5.000.000', 'kursus masak', 'memasak nasi', 'airi', 'airi', 0),
(57, 'ami muhammad', 'jogja', '2018-04-06', 'Laki - Laki', 'Ekonomi', 'Perikanan', 'Pendidikan Bahasa Inggris', 'keraton jogja', 'keraton', 'jogja kembali', 'jogja', 'diy', 1231, 9686588, 8661111, 'ami@gmail.com', 'Tidak', '', 0, '', 'mi keraton', 'smp keraton', 'sma keraton', 'sultan jogja', 's3', '10.000.000', 'penataran pangeran jogaj', 'pangeran jogja', 'ami', 'ami', 0),
(58, 'siti nilhiliah', 'madiun', '2018-04-09', 'perempuan', 'Hukum Ekonomi Syariah', 'Ekonomi', 'Perbandingan Madhab dan Hukum', 'madiun kota', 'suksukan', 'klewer', 'madiun', 'jawa timur', 2345, 8645435, 9843554, 'siti@gmail.com', 'Tidak', '', 0, '', 'mi madiun', 'smp madiun', 'sma madiun', 'ghoib an', 'SMA', '1.000.000', 'kursus html', 'programming mobile', 'siti', 'siti', 0),
(59, 'cung mahmud', 'new zealand', '2018-04-24', 'Laki - Laki', 'Teknik Sipil', 'Ilmu Aqidah', 'Ilmu Hubungan Internasional', 'new zealand sedney', 'sedney', 'sedney', 'new zealand', 'australia', 7, 98888, 85555, 'cung23@gmail.com', 'Tidak', '', 0, '', 'sd sedney', 'smp sedney', 'sms sedney', 'santinel prime', 'doktor', '10.000.000', 'kursus bahasa indonesia', 'bahasa indonesia', 'cung', 'cung', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id_upload` int(3) NOT NULL,
  `nama_siswa` varchar(56) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `hits` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `nama_siswa`, `nama_file`, `deskripsi`, `tgl_upload`, `hits`) VALUES
(33, 'ami muhammad', 'NEM SD.jpg', 'sttb', '2018-04-24', 1),
(31, 'RIZQI DINO', 'RIZQI DINO .rar', 'Kelengkapan Pendaftaran', '2018-04-24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
