/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.4.32-MariaDB : Database - kependudukan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kependudukan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `kependudukan`;

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `no_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(25) NOT NULL,
  `headnews` text NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`no_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `berita` */

insert  into `berita`(`no_berita`,`judul_berita`,`headnews`,`isi_berita`,`tanggal_kirim`,`pengirim`,`gambar`) values (1,'Melonjaknya Harga Minyak ','Melonjaknya Harga Minyak Goreng di Berbagai Daerah menimbulkan Keresahan di Desa Ngendrosari','KONTAN.CO.ID - JAKARTA. Menjelang akhir Oktober 2021, harga minyak goreng mengalami kenaikan. Lonjakan harga minyak goreng tersebut terjadi di berbagai daerah.   Pengusaha yang tergabung dalam Gabungan Industri Minyak Nabati Indonesia (GIMNI) mengungkapkan, kenaikan harga minyak goreng disebabkan adanya kekurangan pasokan akan minyak nabati (oils) dan minyak hewani (fats) di pasar global.   \"Pandemi ini membuat suasana lapangan produksi semua serba tak jelas. Produksi minyak nabati dan minyak hewani semua menurun dibandingkan dengan produksi di tahun sebelum adanya pandemi. Intinya, seperti hukum ekonomi, di mana antara supply dan demand terjadi kepincangan maka pasokan dunia sangat berkurang,\" ujar Direktur Eksekutif GIMNI Sahat Sinaga saat dihubungi Kompas.com, Senin (25/10/2021).   Ia mengatakan produksi minyak nabati dan hewani telah menurun sebanyak 266.000 ton pada 2020. Penurunan produksi tersebut juga terjadi pada 2021. ','2021-12-04','Adam Arnap','1182867277p.jpg'),(2,'Panen Padi Sukses saat Mu','Musim Hujan membuat padi tidak mengalami kekurangan air','Musim penghujan adalah musim yang di nantikan oleh ara petani padi untuk menanam padinya. Dengan menanam padi di saat musim penghujan akan mengakibatkan padi yang di tanam tidak akan kekurangan air. Sehingga padi yang akan di panen bisa di panen dengan hasil yang memuaskan.','2021-12-23','Adam Arnap','mengelola-sebuah-tempat.jpg'),(3,'Akses Utama jalan Kajoran','Desa Ngendrosari di jadikannya jalan alternatif penghubung Jalan Kajoran - Salaman - Purworejo','Pembangunan Jembatan Kali Petung menutup akses utama jalan Kajoran Salaman Hal ini berdampak terhadap desa ngendrsari. Hal ini dikarenakan letak Desa Ngendrosari berada di daerah strategis antara Kajoran - Salaman . Sehingga akses jalan yang paling efektif adalah melalui Desa Ngendrosari','2021-11-18','Adam Arnap','5jjem-738x375.jpg'),(4,'Warga Desa Ngendrosari di','Covid-19 belum berakhir , Desa Ngendrosari menghimbau warga agar segera melakukan Vaksinasi','Munculnya covid varian baru membuat kita sebagai individu harus menjaga diri kita masing masing  dengan mematuhi Protokol Keehatan','2021-11-11','Adam Arnap','vaksinasi-696x392.jpg');

/*Table structure for table `dokumen` */

DROP TABLE IF EXISTS `dokumen`;

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `dokumen` */

insert  into `dokumen`(`id_dokumen`,`nama_dokumen`,`dokumen`) values (1,'SKU','21498531M.pdf'),(2,'Akte','21498531M_(1).pdf'),(3,'Sertifikat','20220106-031924-1755628819.pdf'),(4,'Dokumen Legistrasi','Adam_Arnap___Dokumen_UAT_Tokopedia.pdf'),(5,'Tanda tangan legalisir','TUGAS_KELOMPOK_ANALISIS_BISNIS_DIGITAL.pdf'),(6,'Dokumen tanda tangan Legalisir','222-467-1-SM.pdf');

/*Table structure for table `dusun` */

DROP TABLE IF EXISTS `dusun`;

CREATE TABLE `dusun` (
  `dusun` varchar(15) NOT NULL,
  PRIMARY KEY (`dusun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `dusun` */

insert  into `dusun`(`dusun`) values ('Bantengan'),('Pencar'),('Pranan'),('Saragan'),('Taleman'),('Tambakan');

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `no_event` int(11) NOT NULL AUTO_INCREMENT,
  `judul_event` varchar(50) NOT NULL,
  `isi_event` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`no_event`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `event` */

insert  into `event`(`no_event`,`judul_event`,`isi_event`,`gambar`) values (1,'Lomba Membaca Puisii','Lomba membaca puisi untuk kalangan SD, SMP. Di selenggarakan pada tanggal, 17 Agustus 2021. Lomba ini di selenggarakan guna memperingati hari Kemerdekaan Republik Indonesia','download_(2)1.jpeg'),(2,'Lomba Panjat Pinang','Lomba Panjat Pinang dalam rangka memperingat 17 Agustus Hari Kemerdekaan akan di selenggarakan di Balai Desa Ngendrosari, Pada Tanggal 17, Agustus 2021. Mulai pukul 13.00 WIB','panjat-pinang-ilustrasi-antara-hendra-nurdiyansyah.jpg');

/*Table structure for table `kedatangan` */

DROP TABLE IF EXISTS `kedatangan`;

CREATE TABLE `kedatangan` (
  `no_datang` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_datang` date NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL,
  PRIMARY KEY (`no_datang`),
  KEY `NIK` (`NIK`),
  CONSTRAINT `kedatangan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kedatangan` */

/*Table structure for table `kelahiran` */

DROP TABLE IF EXISTS `kelahiran`;

CREATE TABLE `kelahiran` (
  `no_lahir` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bayi` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(13) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`no_lahir`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kelahiran` */

insert  into `kelahiran`(`no_lahir`,`nama_bayi`,`tempat_lahir`,`tanggal_lahir`,`gender`,`nama_ayah`,`nama_ibu`,`alamat`) values (7,'Riesha Lestari','Magelang','2021-12-21','Wanita','Ikhsan','Devi','Kali salak ,Salaman, Magelang, Jawa tengah'),(8,'Elda Qotul','Madiun','2022-01-03','Wanita','Aryok','Karmila','Tulung Agung Selatan, Kota Tulung Agung,  Jawa Tim');

/*Table structure for table `kematian` */

DROP TABLE IF EXISTS `kematian`;

CREATE TABLE `kematian` (
  `no_kematian` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(25) NOT NULL,
  `tempat_meninggal` varchar(50) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `usia` varchar(3) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `makam` varchar(50) NOT NULL,
  PRIMARY KEY (`no_kematian`),
  KEY `NIK` (`NIK`),
  CONSTRAINT `kematian_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kematian` */

/*Table structure for table `keuangan_kategori` */

DROP TABLE IF EXISTS `keuangan_kategori`;

CREATE TABLE `keuangan_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `jenis` enum('Pendapatan','Pengeluaran') NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `keuangan_kategori` */

insert  into `keuangan_kategori`(`id_kategori`,`nama_kategori`,`jenis`) values (1,'Uang Jimpitan','Pendapatan'),(2,'Iuran Warga','Pendapatan'),(3,'Sumbangan Donatur','Pendapatan'),(4,'Dana Desa','Pendapatan'),(5,'Lain-lain (Pendapatan)','Pendapatan'),(6,'Konsumsi Rapat','Pengeluaran'),(7,'Perbaikan Fasilitas','Pengeluaran'),(8,'Kegiatan Sosial','Pengeluaran'),(9,'Kebersihan & Keamanan','Pengeluaran'),(10,'Lain-lain (Pengeluaran)','Pengeluaran');

/*Table structure for table `keuangan_transaksi` */

DROP TABLE IF EXISTS `keuangan_transaksi`;

CREATE TABLE `keuangan_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_transaksi`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `keuangan_transaksi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `keuangan_kategori` (`id_kategori`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `keuangan_transaksi` */

insert  into `keuangan_transaksi`(`id_transaksi`,`id_kategori`,`tanggal`,`keterangan`,`jumlah`,`petugas`,`created_at`) values (1,2,'2026-09-23','Pak Jarwo',100000.00,'Diki Setiawan','2026-09-23 17:17:15');

/*Table structure for table `kritiksaran` */

DROP TABLE IF EXISTS `kritiksaran`;

CREATE TABLE `kritiksaran` (
  `no_kritik` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(25) NOT NULL,
  `isi_kritik` varchar(500) NOT NULL,
  PRIMARY KEY (`no_kritik`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kritiksaran` */

insert  into `kritiksaran`(`no_kritik`,`NIK`,`isi_kritik`) values (1,'3308123443215876','Jalan Sebelum pertigaan ada yang berlubang, saya harap jala agar dapat bisa di perbaiki . Terimakasih'),(2,'3308123443215876','Mohon Lampu Jalan di betulkan'),(3,'3308123443215876','Desa nya jalannya rusak, mogon di perbaiki'),(4,'0987789065433456','Mohon untuk jalan di kampung A di betulkan.'),(5,'0987789065433456','Mohon untuk jalan berlubang dapat diperbaiki.');

/*Table structure for table `penduduk` */

DROP TABLE IF EXISTS `penduduk`;

CREATE TABLE `penduduk` (
  `NIK` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(13) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Perangkat','Masyarakat','Kades','Bendahara','') NOT NULL,
  `status_akun` enum('AKTIF','NONAKTIF','','') NOT NULL,
  PRIMARY KEY (`NIK`),
  KEY `NIK` (`NIK`),
  KEY `rt` (`rt`) USING BTREE,
  KEY `dusun` (`dusun`) USING BTREE,
  KEY `rw` (`rw`) USING BTREE,
  CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`rt`) REFERENCES `rt` (`rt`),
  CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`dusun`) REFERENCES `dusun` (`dusun`),
  CONSTRAINT `penduduk_ibfk_3` FOREIGN KEY (`rw`) REFERENCES `rw` (`rw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `penduduk` */

insert  into `penduduk`(`NIK`,`nama`,`tempat_lahir`,`tanggal_lahir`,`gender`,`agama`,`pendidikan`,`pekerjaan`,`status`,`nama_ayah`,`nama_ibu`,`kewarganegaraan`,`golongan_darah`,`no_tlp`,`rt`,`rw`,`dusun`,`password`,`level`,`status_akun`) values ('00000000','dika','NTT','2022-01-07','Pria','Islam','SMA','Belum Bekerja','Belum Kawin','suyanto','jamilah','WNI','A','4234234233','001','001','Bantengan','123','Masyarakat','AKTIF'),('0334666768965','Dhika','Tangerang','2008-06-10','Pria','Islam','SMA','Pelajar','Belum Kawin','Dewanto','Sunarsih','WNI','-','08234567654','003','003','Pranan','123','Masyarakat','AKTIF'),('0987789065433456','dika','Tulungagung','2021-12-24','Pria','Islam','SMA','Mahhasiswa','Kawin','Suyatno','Romiyah','WNI','A','085000000000','004','003','Bantengan','123','Masyarakat','AKTIF'),('1234123412341234','Waldii','NTT','2021-12-07','Pria','Islam','SMA','Mahhasiswa','Belum Kawin','Agus Maulana','Larasati','WNI','A','1234567890','002','006','Saragan','123','Masyarakat','AKTIF'),('2208123456788765','Endriono F','Yogyakarta','2021-12-07','Pria','Islam','SMA','Mahasiswa','Belum Kawin','Tiyok','Marsini','WNI','-','081234567890','010','005','Pranan','123','Kades','AKTIF'),('3302123487651243','Adam','Magelang','2001-09-01','Pria','Islam','SMA','Mahasiswa','Belum Kawin','Mustar','Napsiyah','WNI','-','081234432567','008','004','Pencar','1234','Perangkat','AKTIF'),('3308123443215876','Diki Setiawan','Magelang','2021-12-02','Pria','Islam','SMA','Mahhasiswa','Belum Kawin','Maryoto','Siti Jamilah','WNI','A','085000000000','004','003','Bantengan','123','Masyarakat','AKTIF'),('3308123456780001','Bendahara RT','Magelang','1990-01-01','Pria','Islam','S1','Bendahara','Kawin','Bapak Bendahara','Ibu Bendahara','WNI','O','081234567890','001','001','Bantengan','123','Bendahara','AKTIF');

/*Table structure for table `pengaturan_desa` */

DROP TABLE IF EXISTS `pengaturan_desa`;

CREATE TABLE `pengaturan_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pengaturan_desa` */

insert  into `pengaturan_desa`(`id`,`nama_desa`,`kecamatan`,`kabupaten`,`provinsi`,`kode_pos`,`logo`,`updated_at`) values (1,'RT 2/8 Pbg Wetan','Purbalingga','Purbalingga','Jawa Tengah','53173','logo_desa.png','2026-09-24 15:41:36');

/*Table structure for table `permohonan` */

DROP TABLE IF EXISTS `permohonan`;

CREATE TABLE `permohonan` (
  `no_permohonan` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(25) NOT NULL,
  `jenis_dokumen` varchar(25) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `tanggal_dokumen` date DEFAULT NULL,
  PRIMARY KEY (`no_permohonan`),
  KEY `NIK` (`NIK`) USING BTREE,
  CONSTRAINT `permohonan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permohonan` */

insert  into `permohonan`(`no_permohonan`,`NIK`,`jenis_dokumen`,`fungsi`,`tanggal_dokumen`) values (1,'0987789065433456','SKU','Usaha',NULL),(2,'3308123443215876','AKTE','Membuat Akte',NULL),(8,'3308123443215876','SKU','MEngganti ktp yang hilang',NULL),(10,'3308123443215876','Setrifikat','Untuk kebutuhan pribadi',NULL),(11,'3308123443215876','Sertifikat ','Digunakan untuk kebutuhan Pribadi',NULL),(14,'3308123443215876','Dokumen Legistrasi','Untuk Kepentingan Administrasi Sekolah','2022-09-23'),(15,'0987789065433456','Tanda Tangan Legalisir','Pelengkap administrtasi Masuk SMA','2022-10-26'),(16,'3308123443215876','Tanda Tangan dan Legalisi','Untuk surat pindah sekolah','2023-01-11');

/*Table structure for table `pindahan` */

DROP TABLE IF EXISTS `pindahan`;

CREATE TABLE `pindahan` (
  `no_kepergian` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kepergian` date NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL,
  PRIMARY KEY (`no_kepergian`),
  KEY `NIK` (`NIK`),
  CONSTRAINT `pindahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pindahan` */

/*Table structure for table `ronda_anggota` */

DROP TABLE IF EXISTS `ronda_anggota`;

CREATE TABLE `ronda_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(11) NOT NULL,
  `NIK` varchar(25) DEFAULT NULL,
  `nama_warga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `id_jadwal` (`id_jadwal`),
  CONSTRAINT `ronda_anggota_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `ronda_jadwal` (`id_jadwal`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `ronda_anggota` */

/*Table structure for table `ronda_jadwal` */

DROP TABLE IF EXISTS `ronda_jadwal`;

CREATE TABLE `ronda_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_jadwal`),
  UNIQUE KEY `hari` (`hari`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `ronda_jadwal` */

insert  into `ronda_jadwal`(`id_jadwal`,`hari`,`keterangan`,`created_at`) values (1,'Senin','','2026-09-24 17:22:37');

/*Table structure for table `rt` */

DROP TABLE IF EXISTS `rt`;

CREATE TABLE `rt` (
  `rt` varchar(3) NOT NULL,
  PRIMARY KEY (`rt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `rt` */

insert  into `rt`(`rt`) values ('001'),('002'),('003'),('004'),('005'),('006'),('007'),('008'),('009'),('010');

/*Table structure for table `rw` */

DROP TABLE IF EXISTS `rw`;

CREATE TABLE `rw` (
  `rw` varchar(3) NOT NULL,
  PRIMARY KEY (`rw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `rw` */

insert  into `rw`(`rw`) values ('001'),('002'),('003'),('004'),('005'),('006');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
