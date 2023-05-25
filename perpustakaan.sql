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
  `id_anggota` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.anggota: ~0 rows (approximately)
DELETE FROM `anggota`;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;

-- Dumping structure for table elib_new.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `nama_buku` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `nama_penerbit` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `nama_penulis` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `tahun_terbit` int DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.buku: ~0 rows (approximately)
DELETE FROM `buku`;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

-- Dumping structure for table elib_new.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `id_anggota` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_buku` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `FK_peminjaman_anggota` (`id_anggota`),
  KEY `FK_peminjaman_buku` (`id_buku`),
  CONSTRAINT `FK_peminjaman_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  CONSTRAINT `FK_peminjaman_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table elib_new.peminjaman: ~0 rows (approximately)
DELETE FROM `peminjaman`;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
