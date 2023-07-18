-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2023 pada 07.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `middleware`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `display`
--

CREATE TABLE `display` (
  `id_display` int(11) NOT NULL,
  `display` varchar(50) NOT NULL,
  `devicename` varchar(254) NOT NULL,
  `timezone` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layout`
--

CREATE TABLE `layout` (
  `id_layout` int(11) NOT NULL,
  `layout` varchar(254) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `width` decimal(10,0) NOT NULL DEFAULT '1080',
  `height` decimal(10,0) NOT NULL DEFAULT '1920',
  `statusMessage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `linkregionplaylist`
--

CREATE TABLE `linkregionplaylist` (
  `id_lkregionplaylist` int(11) NOT NULL,
  `regionId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `displayOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `linkwidgetmedia`
--

CREATE TABLE `linkwidgetmedia` (
  `id_lkwidgetmedia` int(11) NOT NULL,
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `duration` int(11) NOT NULL,
  `originalFileName` varchar(254) NOT NULL,
  `filesize` bigint(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `retired` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `ownerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `top` decimal(10,0) NOT NULL,
  `left` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `region_option`
--

CREATE TABLE `region_option` (
  `id_regionoption` int(11) NOT NULL,
  `regionId` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resolution`
--

CREATE TABLE `resolution` (
  `id_resolution` int(11) NOT NULL,
  `resolution` varchar(254) NOT NULL,
  `width` smallint(6) NOT NULL,
  `heigh` smallint(6) NOT NULL,
  `intended_width` smallint(6) NOT NULL,
  `intended_height` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resolution`
--

INSERT INTO `resolution` (`id_resolution`, `resolution`, `width`, `heigh`, `intended_width`, `intended_height`) VALUES
(1, '1080p HD Landscape', 800, 450, 1920, 1080),
(2, '720p HD Landscape', 800, 450, 1280, 720),
(3, '1080p HD Portrait', 450, 800, 1080, 1920),
(4, '720p HD Portrait', 450, 800, 720, 1280),
(5, '4k cinema', 800, 450, 4096, 2304),
(6, 'Common PC Monitor 4:3', 800, 600, 1024, 768),
(7, '4k UHD Landscape', 450, 800, 3840, 2160),
(8, '4k UHD Portrait', 800, 450, 2160, 3840);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `eventTypeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fromDt` bigint(20) NOT NULL,
  `toDt` bigint(20) NOT NULL,
  `is_priority` tinyint(4) NOT NULL,
  `displayOrder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userTypeId` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `userTypeId`, `email`) VALUES
(1, 'clara', 'clara', 0, 'clara@gmail.com'),
(2, 'ara', 'ara', 0, 'ara@gmial.com'),
(3, 'lala', 'lala', 0, 'lala@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertype`
--

CREATE TABLE `usertype` (
  `userTypeId` int(11) NOT NULL,
  `userType` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id_display`);

--
-- Indeks untuk tabel `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id_layout`);

--
-- Indeks untuk tabel `linkregionplaylist`
--
ALTER TABLE `linkregionplaylist`
  ADD PRIMARY KEY (`id_lkregionplaylist`);

--
-- Indeks untuk tabel `linkwidgetmedia`
--
ALTER TABLE `linkwidgetmedia`
  ADD PRIMARY KEY (`id_lkwidgetmedia`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indeks untuk tabel `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indeks untuk tabel `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indeks untuk tabel `region_option`
--
ALTER TABLE `region_option`
  ADD PRIMARY KEY (`id_regionoption`);

--
-- Indeks untuk tabel `resolution`
--
ALTER TABLE `resolution`
  ADD PRIMARY KEY (`id_resolution`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indeks untuk tabel `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `display`
--
ALTER TABLE `display`
  MODIFY `id_display` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `linkregionplaylist`
--
ALTER TABLE `linkregionplaylist`
  MODIFY `id_lkregionplaylist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `linkwidgetmedia`
--
ALTER TABLE `linkwidgetmedia`
  MODIFY `id_lkwidgetmedia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `region_option`
--
ALTER TABLE `region_option`
  MODIFY `id_regionoption` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `resolution`
--
ALTER TABLE `resolution`
  MODIFY `id_resolution` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
