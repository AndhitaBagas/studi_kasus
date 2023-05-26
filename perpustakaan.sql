-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.33 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table elib_new.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_bin NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.anggota: ~20 rows (approximately)
DELETE FROM `anggota`;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` (`id_anggota`, `nama`, `jenis_kelamin`, `alamat`) VALUES
	(1, 'Iman', 'Laki-Laki', 'DS.ROWOSARI RT.III/IV SEMARANG, Jawa Tengah'),
	(2, 'Arif', 'Laki-Laki', 'Jl Pemuda Kav 3-4 Arion Plaza Lt Dasar, Dki Jakarta'),
	(3, 'Nur', 'Laki-Laki', 'Jl Cipinang Cempedak III/4 A, Dki Jakarta'),
	(4, 'Ibrahim', 'Laki-Laki', 'Jl Dharmawangsa Brt 24, Jawa Timur'),
	(5, 'Dian', 'Laki-Laki', 'Jl Dr Muwardi Raya Psr Grogol Lt 3, Dki Jakarta'),
	(6, 'Muhammad', 'Laki-Laki', 'Jl Raya Bogor Km 26 33 RT 001/08, Jakarta'),
	(7, 'Abdul', 'Laki-Laki', 'Jl KH Moch Mansyur 126, Dki Jakarta'),
	(8, 'Sulaiman', 'Laki-Laki', 'Jl Kemang Raya 90 B, Dki Jakarta'),
	(9, 'Ali', 'Laki-Laki', 'Jl Z, Dki Jakarta'),
	(10, 'Abdullah', 'Laki-Laki', 'Jl Suryopranoto 9 D, Dki Jakarta'),
	(11, 'Vina', 'Perempuan', 'Jl Duri 64, Dki Jakarta'),
	(12, 'Nirmala', 'Perempuan', 'Jl By Pass Ngurah Rai 88, Bali'),
	(13, 'Nur', 'Perempuan', 'Jl Raya Pejuangan Kav 8, Dki Jakarta'),
	(14, 'Nurul', 'Perempuan', 'Kompl Tasbi Bl L/2, Sumatera Utara'),
	(15, 'Annisa', 'Perempuan', 'Jl Arteri Pd Indah 32, Dki Jakarta'),
	(16, 'Indah', 'Perempuan', 'Jl Kalibaru Brt VII 11, Dki Jakarta'),
	(17, 'Aminah', 'Perempuan', 'Jl Sisingamangaraja 34 C, Sumatera Utara'),
	(18, 'Dian', 'Perempuan', 'Jl Pintu Air Raya 36 E, Jakarta'),
	(19, 'Sari', 'Perempuan', 'Jl Kramat Raya 130, Dki Jakarta'),
	(20, 'Nirmala', 'Perempuan', 'JL Tebet Dalam 1 No. 30, Tebet, South Jakarta'),
	(21, 'Supri', 'Laki-Laki', 'Perumahan Nirwana Land, Kanung, Sawahan');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;

-- Dumping structure for table elib_new.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int NOT NULL AUTO_INCREMENT,
  `nama_buku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nama_penerbit` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `nama_penulis` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `tahun_terbit` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.buku: ~10 rows (approximately)
DELETE FROM `buku`;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` (`id_buku`, `nama_buku`, `nama_penerbit`, `nama_penulis`, `tahun_terbit`) VALUES
	(1, 'The Lathe of Heaven', 'Avon Books', 'Ursula K. Le Guin', '1971'),
	(2, 'The Way of All Flesh', 'Grant Richards', 'Samuel Butler', '1903'),
	(3, 'Hands-On Machine Learning with Scikit-Learn, Keras, and Tensorflow, 2nd Edition', 'Aurélien Géron', 'O\'Reilly Media, Inc.', '2019'),
	(4, 'Process Mining Sains Data Berorientasi Proses', 'Penerbit Informatika', 'Angelina Prima Kurniati', '2022'),
	(5, 'Computer Graphic Design (Edisi Revisi Ketiga)', 'Penerbit Informatika', 'Hendri Hendratman', '2017'),
	(6, 'Mendesain Objek 2 & 3 Dimensi Dengan CATIA', 'Penerbit Informatika', 'MHD Daud Pinem', '2015'),
	(7, 'Pengantar Akuntansi (Konsep Dasar Akuntansi)', 'Penerbit Informatika', 'Wati Aris Astuti', '2022'),
	(8, 'Cisco CCNP dan Jaringan Komputer', 'Penerbit Informatika', 'Iwan Sofana', '2012'),
	(9, 'Pemrograman Web Berbasis Framework CodeIgniter 4 dan MySQL', 'Penerbit Informatika', 'Ade Rahmat Iskandar', '2022'),
	(10, 'Computer Graphic Design Revisi Kedua', 'Penerbit Informatika', 'Penerbit Informatika', '2015'),
	(11, 'Home Sweet Loan', 'Gramedia Pustaka Utama', 'Almira Bastari', '2022');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

-- Dumping structure for table elib_new.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int NOT NULL AUTO_INCREMENT,
  `id_anggota` int DEFAULT NULL,
  `id_buku` int DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `FK_peminjaman_anggota` (`id_anggota`),
  KEY `FK_peminjaman_buku` (`id_buku`),
  CONSTRAINT `FK_peminjaman_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  CONSTRAINT `FK_peminjaman_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.peminjaman: ~5 rows (approximately)
DELETE FROM `peminjaman`;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
	(1, 5, 7, '2023-05-25', '2023-06-06'),
	(2, 10, 8, '2023-05-19', '2023-05-26'),
	(3, 13, 10, '2023-05-20', '2023-05-27'),
	(4, 8, 2, '2023-05-18', '2023-05-25'),
	(5, 3, 9, '2023-05-17', '2023-05-24'),
	(6, 17, 11, '2023-05-26', '2023-06-02');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;

-- Dumping structure for table elib_new.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` char(10) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `password` varchar(30) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
