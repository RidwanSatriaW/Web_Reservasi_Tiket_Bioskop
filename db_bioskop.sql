-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 02:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sandi` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `nama`, `email`, `sandi`, `level`) VALUES
(3, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'manager', '', '1d0258c2440a8d19e716292b231e3190', 'manager'),
(9, 'alam', '12@gmail.com', '1212', 'manager'),
(10, 'Irfan', 'irfan@gmail.com', '12345678', 'admin'),
(11, 'kuswoyo', '77@gmail.com', 'poor', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dtl_pemesan`
--

CREATE TABLE `dtl_pemesan` (
  `id_dtl_pemesan` int(11) NOT NULL,
  `kursi` int(11) NOT NULL,
  `id_tiket` varchar(11) NOT NULL,
  `id_pemesan` varchar(11) NOT NULL,
  `id_member` int(10) NOT NULL,
  `sesi` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtl_pemesan`
--

INSERT INTO `dtl_pemesan` (`id_dtl_pemesan`, `kursi`, `id_tiket`, `id_pemesan`, `id_member`, `sesi`, `tanggal`) VALUES
(6, 1, '22', 'PMSN00001', 0, '', NULL),
(7, 1, '29', 'PMSN00001', 0, '', NULL),
(8, 2, '30', 'PMSN00002', 0, '', NULL),
(9, 2, '29', 'PMSN00003', 0, '', NULL),
(10, 3, '29', 'PMSN00003', 0, '', NULL),
(11, 33, '24', 'PMSN00004', 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `durasi` time NOT NULL,
  `sinopsis` text NOT NULL,
  `tipe_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `genre`, `durasi`, `sinopsis`, `tipe_image`) VALUES
(1, 'Spiderman No Way Home', 'Action, Comedy', '02:28:00', 'Identitas Spider-Man sekarang sudah terungkap, dan Peter meminta bantuan Doctor Strange. namun sebuah kesalahan terjadi, dan itu justru mengundang musuh berbahaya dari dunia lain, mereka mulai bermunculan. Hal itu memaksa Peter mencari apa makna sebenarnya menjadi Spider-Man.', 'nowayhome.jpg'),
(2, 'A Quiet Place', 'Horor, Action', '01:30:00', 'Sebuah keluarga hidup dalam ketakutan. Mereka berusaha harus hidup dalam keheningan agar terhindar dari mahluk misterius.', 'aquiteplace.jpg'),
(3, 'Encanto', 'Animation, Comedy', '01:49:00', 'Encanto menceritakan kisah keluarga yang bernama Madrigal, yang tinggal di kota ajaib di pegunungan Kolombia. Keajaiban Encanto telah memberkati setiap anak dalam keluarga dengan hadiah unik dari kekuatan super hingga kekuatan untuk menyembuhkan — setiap anak kecuali satu, Mirabel. Tetapi ketika dia menemukan bahwa sihir di sekitar Encanto dalam bahaya, Mirabel memutuskan bahwa dia, satu-satunya Madrigal biasa, mungkin saja menjadi harapan terakhir keluarganya.', 'encanto.jpg'),
(4, 'Comic 8 : Casino Kings part 1', 'Comedy, Action', '01:44:00', 'Dipimpin oleh Indro, delapan agen rahasia menyamar sebagai pelawak demi mencari seorang yang menjadi penghubung mafia besar yang dijuluki The King, pemilik kasino paling spektakuler di Asia.', 'comic8.jpg'),
(5, 'Cinta Pertama, Kedua & Ketiga', 'Romance', '01:45:00', 'Raja dan Asia punya kesamaan tanggung jawab, mengurus kedua orang tua tunggal mereka masing-masing. Bila Raja (Angga Yunanda) ingin hidup mandiri seperti kedua kakaknya, Asia (Putri Marino) sudah memilih untuk berbakti pada ibunya yang ia rasa telah mengorbankan segalanya untuk dirinya.', 'cintapertama.jpg'),
(6, 'Frozen 2', 'Animation, Comedy', '01:43:00', 'Anna, Elsa, Kristoff, Olaf dan Sven pergi meninggalkan Arendelle untuk melakukan perjalanan ke sebuah tempat asing dan penuh keajaiban. Mereka berangkat untuk menemukan asal usul kekuatan Elsa dan juga untuk menyelamatkan kerajaan mereka. Kali ini akan ada teks lirik lagu sehingga penonton bisa ikut bernyanyi bersama karakter Frozen II favorit mereka.', 'frozen2.jpg'),
(7, 'The Matrix', 'Action', '02:16:00', 'Cerita film ini tentang seorang hacker yang bernama Neo dan mengetahui akan keadaan sebenarnya dari realitas dan lalu bergabung dengan sebuah kelompok pemberontak melawan program-program komputer penjaga yang disebut agen-agen. Para pemberontak ini dipimpin oleh Morpheus. Anggota lainnya adalah Trinity, Cypher, Tank, dan lain-lain.', 'thematrix.jpg'),
(8, 'Yowis Ben 3', 'Comedy', '01:35:00', 'Hidup Bayu (Bayu Skak) nyaman selain karena Yowis Ben semakin tenar, Asih (Anya Geraldine), pacarnya, juga selalu mendukung Bayu dalam setiap cita-citanya.', 'yowesben.jpg'),
(9, 'Makmum 2', 'Horor', '01:32:00', 'Baru saja suaminya meninggal, duka Rini bertambah ketika bude yang membesarkannya wafat. Saat pulang kampung untuk melayat, anak Rini satu-satunya, Hafis, hilang dan ditemukan tak sadarkan diri di tengah hutan. Berjuang sendiri menyelamatkan satu-satunya keluarga yang tersisa.', 'makmum2.jpg'),
(14, 'The Mac', 'Action, Horor', '01:38:00', 'Elsa dan lain lain bertarung untuk mendapatkan 7 buah dragon ball', 'frozen2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `id_sesi` varchar(10) NOT NULL,
  `id_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tgl_mulai`, `tgl_berhenti`, `id_sesi`, `id_ruang`) VALUES
(3, '2017-05-02', '2017-05-05', '1', '2'),
(5, '2017-05-03', '2017-05-03', '2', '2'),
(6, '2017-05-03', '2017-05-03', '1', '2'),
(7, '2017-05-03', '2017-05-03', '3', '2'),
(8, '2017-05-04', '2017-05-04', '1', '1'),
(9, '2017-05-04', '2017-05-04', '2', '1'),
(10, '2017-05-04', '2017-05-04', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sandi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `sandi`) VALUES
(7, 'riski', 'riski@gmail.com', '6e24184c9f8092a67bcd413cbcf598da'),
(8, 'gondo', 'gondo@gmail.com', '694b905e1db64bd6f2a0c0bbd7ef68cb'),
(9, 'njo', 'njo@gmail.com', '38cdd14e4d6e4df3062688b02ec0b1a7'),
(12, 'Ridwan Satria Wicaksana', 'wicaksana.rs@gmail.com', '835319d7d08a450dc4a5466421eb015b'),
(26, 'Ridwan', 'ridwansatria288@gmail.com', '12345'),
(32, '', '', ''),
(33, '', '', ''),
(34, 'Law', 'wicaksana.rs@gmail.com', 'qwerty'),
(35, 'Irfan', 'wicaksana.rs@gmail.com', 'qwerty'),
(37, 'Irfan', '13@gmail.com', 'zxcvb'),
(38, 'Irfan', 'wicaksana.rs@gmail.com', 'zxcvb');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` varchar(11) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `jml_tiket_pesan` int(11) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `sesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `id_member`, `jml_tiket_pesan`, `total_harga`, `tgl_pesan`, `status`, `tanggal`, `sesi`) VALUES
('', '', 2, '60000', '2022-02-18', 0, '2022-03-05', '13.00 - 15.00'),
('1', '', 3, '90000', '2022-02-18', 0, '2022-03-05', '13.00 - 15.00'),
('PMSN00001', '8', 2, '90000', '2017-05-22', 1, NULL, ''),
('PMSN00002', '7', 1, '45000', '2017-05-22', 0, NULL, ''),
('PMSN00003', '9', 2, '112000', '2017-05-22', 0, NULL, ''),
('PMSN00004', '11', 1, '28000', '2017-05-22', 0, NULL, ''),
('PMSN015956', '', 4, '120000', '2022-02-18', 0, '2022-03-06', '10.00 - 12.00'),
('PMSN01:58:3', '', 3, '90000', '2022-02-18', 0, '2022-03-05', '13.00 - 15.00'),
('PMSN021107', '', 6, '180000', '2022-02-18', 0, '2022-03-10', '16.00 - 18.00');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jm_kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama`, `jm_kursi`) VALUES
(1, 'A-1', 35),
(2, 'A-2', 33),
(3, 'A-3', 60),
(4, 'B-5', 44),
(5, 'B-1', 36),
(6, 'B-2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `sesi`, `mulai`, `selesai`) VALUES
(1, 1, '08:00:00', '10:00:00'),
(2, 2, '10:15:00', '12:15:00'),
(3, 3, '13:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_film` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `harga`, `stok`, `id_film`) VALUES
(22, '34000', 125, '1'),
(24, '28000', 90, '2'),
(29, '56000', 50, '3'),
(30, '45000', 80, '4'),
(31, '43000', 60, '5'),
(32, '30000', 30, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dtl_pemesan`
--
ALTER TABLE `dtl_pemesan`
  ADD PRIMARY KEY (`id_dtl_pemesan`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dtl_pemesan`
--
ALTER TABLE `dtl_pemesan`
  MODIFY `id_dtl_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
