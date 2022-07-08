-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2022 pada 10.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaskes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor_rating` double DEFAULT NULL,
  `foto1` varchar(40) DEFAULT NULL,
  `foto2` varchar(40) DEFAULT NULL,
  `foto3` varchar(40) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `jumlah_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `alamat`, `latlong`, `jenis_id`, `deskripsi`, `skor_rating`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `jumlah_dokter`, `jumlah_pegawai`) VALUES
(1, 'RS Grha Permata Ibu', 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.3706925,106.8134163', 1, 'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya', 4.8, 'permataibu01.jpg', 'permataibu02.jpg', 'permataibu03.jpg', 1, 'https://www.grhapermataibu.com', 80, 200),
(2, 'RSUD Kota Depok', 'Jl. Raya Muchtar No.99, Sawangan Lama, Kec. Sawangan, Kota Depok, Jawa Barat', '-6.5240464,106.6734909', 1, 'Mewujudkan Masyarakat yang Sejahtera, Mandiri, dan Berdaya Saing menuju Kota yang Sehat, Aman, Tertib dan Nyaman dengan Kota Depok yang Maju, Berbudaya dan Sejahtera', 4.9, NULL, NULL, NULL, 6, 'https://rsud.depok.go.id/', 55, 75),
(3, 'RS Citra Medika', 'Jl. Raya Kalimulya No.68, Kalimulya, Kec. Cilodong, Kota Depok, Jawa Barat ', '-6.5353371,106.6907648', 1, 'Menyelenggarakan pelayanan kesehatan yang bermutu dan profesional sesuai dengan standar yang mencakup seluruh fungsi dan kegiatan rumah sakit.', 4.5, NULL, NULL, NULL, 3, 'https://citramedikadepok.id', 55, 84),
(4, 'RS Hermina', 'Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat\r\n', '-6.5414356,106.7038868', 1, 'Memiliki layanan unggulan dari Personal Maternity Officer di mana pasien akan mendapat manfaat informasi dan solusi menyeluruh terkait dengan kehamilan dari spesialis terbaik', 4.8, NULL, NULL, NULL, 2, 'https://www.herminahospitals.com', 42, 76),
(5, 'RS Mitra Keluarga', 'Jl. Margonda Raya, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.394475,106.8220974', 1, 'Memilki Metode operasi yang cukup popular di bidang kasus bedah, kebidanan & kandungan dengan sayatan kecil sehingga masa pemulihan lebih cepat (Minimal invasive).', 4.5, NULL, NULL, NULL, 2, 'https://www.mitrakeluarga.com/depok', 50, 65),
(6, 'RS Universitas Indonesia', 'Jl. Prof. DR. Bahder Djohan, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat', '-6.3730182,106.8273234', 1, 'Rumah Sakit Universitas Indonesia menjadi rumah sakit pendidikan berkelas dunia pada tahun 2030. Menyelenggarakan pelayanan kesehatan yang paripurna dan Menyelenggarakan pendidikan interprofesional bidang kesehatan yang komprehensif', 4.7, NULL, NULL, NULL, 1, 'https://rs.ui.ac.id/umum/', 84, 102),
(9, ' Klinik Pinky House 1', 'Jl. Nusantara Raya, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.3971668,106.8117789', 2, 'Saat ini, dokter-dokter yang melakukan praktek di Klinik Pinky House 1 diantaranya adalah drg. O. Rullyanti, drg. Wulan Darmawan, dan drg. Elvina Cendrakasih.', 4.3, NULL, NULL, NULL, 2, 'https://www.sehatq.com/faskes/klinik-gigi-pin', 3, 7),
(10, 'Klinik Dokter Kita', 'Jl. Raya Sawangan No.26D, Mampang, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.3948101,106.7975441', 2, 'Memberikan pelayanan yang berkualitas, terjangkau dan lengkap bagi masyarakat. Klinik kita juga sebagai Perusahaan Jasa Kesehatan dan Keselamatan Kerja ( K3 ) dengan SK penunjukan resmi dari Kemenaker RI', 4.3, NULL, NULL, NULL, 2, 'http://klinikkitadepok.medisite.id', 3, 7),
(11, 'Klinik Rumah Gigi', 'Jl. Kp. Sawah, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat', '-6.4457918,106.8291474', 2, 'Memberikan pelayanan yang berkualitas, terjangkau dan lengkap bagi masyarakat untuk pengobatan dan perawatan gigi.', 4.3, NULL, NULL, NULL, 3, 'www.sehatq.com/rumah-gigi', 5, 15),
(12, 'KLINIK ADELINA', 'Jl. Tanah Baru, Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat ', '-6.387982,106.8115846', 3, 'Klinik yang merupakan perusahaan di bidang medis dengan nomor kontak (021) 29219941', 4, NULL, NULL, NULL, 1, 'www.sehatq.com/klinik-adelina-medika', 5, 12),
(13, 'Klinik Sawangan Medika', 'No., Jl. Raya Sawangan No.3, Mampang, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.3945501,106.7995555', 3, 'Klinik ini merupakan perusahaan yangi bekerja di industri Kesehatan dan medis.', 3.5, NULL, NULL, NULL, 2, 'www.semuabis.com/klinik-sawangan', 4, 10),
(14, 'Bahar Medical Clinic I', 'Jl. Dewi Sartika No.48, Pancoran Mas, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.3995378,106.8135992', 3, 'Klinik Bahar Medika I merupakan sebuah klinik dengan dokter-dokter yang melakukan praktek diantaranya adalah drg. Sri Handayani, drg. Anita Rachmawati, dan dr. Miya Elmira.', 3.7, NULL, NULL, NULL, 2, 'www.halodoc.com/klinik-bahar-medika-i', 3, 12),
(15, 'UPTD Puskesmas Beji', 'Jl. Bambon Raya No.7B, RT.01/RW.01, Beji Tim., Kecamatan Beji, Kota Depok, Jawa Barat', '-6.3761459,106.8194797', 4, ' Meningkatkan tata kelola Pemerintahan dan Pelayanan Publik yang Modern dan Partifipatif serta Mewujudkan Wilayah kerja UPTD Puskesmas Beji yang sehat, aman, tertib dan Nyaman.', 4.3, NULL, NULL, NULL, 1, 'https://pkmbeji.depok.go.id/', 7, 15),
(16, 'UPTD Abadi Jaya', 'Jl. Kerinci Raya No.1, Abadijaya, Kec. Sukmajaya, Kota Depok, Jawa Barat', '-6.3949694,106.8496133', 4, 'Mewujudkan masyarakat yang religius dan berbudaya berbasis kebhinekaan dan ketahanan keluarga. Mewujudkan masyarakat yang sejahtera, mandiri dan berdaya saing', 4.5, NULL, NULL, NULL, 5, 'https://pkmabadijaya.depok.go.id', 15, 25),
(17, 'UPTD Puskesmas Cinere', 'Jl. Cinere Raya No.30, Cinere, Kec. Cinere, Kota Depok, Jawa Barat ', '-6.3408821,106.7755657', 4, ' Mewujudkan Kecamatan Cinere yang Sehat, Tertib, dan Nyaman seta Meningkatkan Tata Kelola Puskesmas menuju Tata Kelola Pemerintahan dan Pelayanan Publik yang Modern dan Partisipatif.', 4.5, NULL, NULL, NULL, 4, 'https://pkmcinere.depok.go.id/', 13, 25),
(18, 'Apotik Juliana', 'Jl. Nusantara Raya No. 33 Jaya Pancoran Mas Depok Jawa Barat', '-6.4357206,106.8712703', 5, 'Untuk menghubungi Juliana Apotik lewat telepon menggunakan nomor (021)7775105.', 4.3, NULL, NULL, NULL, 2, 'www.semuabis.com/juliana-apotik', 3, 5),
(19, 'Apotik Tumbuh Sehat', 'Jl. Tole Iskandar No.12 A, Mekar Jaya, Sukmajaya, Kota Depok', '-6.4357206,106.8712703', 5, 'Untuk menghubungi Apotik Tumbuh Sehat bisa lewat telepon menggunakan nomor (021)7708101', 3.8, NULL, NULL, NULL, 5, 'www.honestdocs.id/apotik-tumbuh-sehat', 3, 7),
(20, 'Apotik Zentrum 2', 'Jl. Kartini No.58-60, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat ', '-6.4085375,106.7981436', 5, 'Untuk menghubungi Apotik Zentrum 2 bisa lewat telepon menggunakan nomor (021) 77802693', 4.2, NULL, NULL, NULL, 2, 'www.honestdocs.id/apotik-zentrum-2', 3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(1, 'Rumah Sakit'),
(2, 'Klinik Gigi'),
(3, 'Klinik Umum'),
(4, 'Puskesmas'),
(5, 'Apotik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(3, 'Cilodong'),
(4, 'Cinere'),
(5, 'Sukmajaya'),
(6, 'Sawangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `faskes_id` int(11) DEFAULT NULL,
  `nilai_rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `faskes_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'layanan nya baik', 2, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_rating`
--

CREATE TABLE `nilai_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:32:05', '2022-06-12 00:32:05', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:32:06', '2022-06-12 00:32:06', 1, 'public');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  ADD KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`);

--
-- Indeks untuk tabel `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`faskes_id`),
  ADD KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`);

--
-- Indeks untuk tabel `nilai_rating`
--
ALTER TABLE `nilai_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`faskes_id`) REFERENCES `faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
