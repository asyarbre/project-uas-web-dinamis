-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk` mediumtext NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `posisi_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `desk`, `gambar`, `posisi_gambar`) VALUES
(1, 'Tantangan menjadi negara kepulauan terbesar', 'Indonesia merupakan negara kepulauan terbesar di dunia; dengan 17 ribu pulau, sulit untuk melakukan pengembangan infrastruktur secara merata. Para penjual pindah ke kota-kota besar demi pasar yang lebih baik, sementara konsumen memiliki akses yang terbatas untuk mendapatkan kebutuhan.\r\n\r\nHal ini menyebabkan tingginya urbanisasi yang menggiring barang-barang kebutuhan terkumpul di kota-kota besar.', 'about-1.jpg', 'md:order-2'),
(3, '13 Tahun Pertama Kami', 'Dalam 13 tahun terakhir, kami mendorong pemerataan ekonomi digital dengan memotivasi masyarakat Indonesia untuk mulai berjualan secara online. Inisiatif ini dilakukan dengan membangun platform yang memungkinkan setiap orang dapat memulai dan menemukan apa pun, di mana pun.', 'about-2.jpg', ''),
(4, 'Perjalanan Untuk Dekade Selanjutnya', 'Setelah 1 dekade berkomitmen untuk menciptakan ekosistem super, kini kami berupaya untuk menciptakan ekosistem menyeluruh yang dapat menjadi andalan dalam menjalani keseharian.  Dengan misi untuk mendorong kemajuan, Tokopedia dan Gojek menyatukan kekuatan melalui GoTo dengan menggabungkan layanan e-commerce, on-demand, serta layanan keuangan dan pembayaran.', 'about-3.jpg', 'md:order-2'),
(5, 'Lebih dari 12 juta penjual membuktikan bahwa tidak ada kata terlambat untuk memulai', 'Satu-satunya cara bagi kami untuk mengukur kesuksesan adalah ketika para penjual kami memiliki kehidupan yang lebih baik dengan menjual produk dan menjangkau lebih banyak pelanggan dengan teknologi yang kami sediakan. Kami bekerja keras untuk memastikan bahwa penjual kami dapat memperluas usaha mereka di mana pun mereka berada.', 'about-4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `bisnis`
--

CREATE TABLE `bisnis` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk` mediumtext NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `posisi_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bisnis`
--

INSERT INTO `bisnis` (`id`, `title`, `desk`, `gambar`, `posisi_gambar`) VALUES
(1, 'Layanan E-commerce melalui aplikasi seluler dan desktop', 'Layanan E-commerce Tokopedia menyediakan berbagai pilihan produk melalui Marketplace, Official Stores, Instant Commerce, Interactive Commerce, dan Rural Commerce.', 'bisnis-1.jpg', 'md:order-2'),
(4, 'Logistik &amp; Fulfillment', 'Tokopedia bekerjasama dengan 13 partner logistik dan fulfillment yang dilengkapi dengan layanan pengiriman di hari yang sama dengan sistem yang terintegrasi. Penjual juga dapat menyimpan produk di gudang pintar kami yang berlokasi di seluruh Indonesia.', 'bisnis-2.jpg', ''),
(5, 'Teknologi Periklanan &amp; Pemasaran', 'Tokopedia menyediakan platform teknologi periklanan untuk membantu penjual mempromosikan bisnis mereka, menarik lebih banyak konsumen, dan meningkatkan penjualan lewat layanan Pay for Performance “P4P” Advertising, Display Advertising, dan Customised Marketing Packages.', 'bisnis-3.jpg', 'md:order-2');

-- --------------------------------------------------------

--
-- Table structure for table `gabung`
--

CREATE TABLE `gabung` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk` varchar(500) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `posisi_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`id`, `title`, `desk`, `gambar`, `posisi_gambar`) VALUES
(1, 'Tackle Every Hurdle', 'Much like Noah\'s Ark, the entirety of Tokopedia can be described as several different ships combined into one. In the ocean of opportunities, it\'s not uncommon for ships to run into obstacles like storms and icebergs, just ask Titanic. At Tokopedia, we believe that inspiration means different things to different people, but the crew\'s hard work will always keep the ship moving.', 'gabung-1.png', ''),
(2, 'Three Pointers, Same Direction', 'Focus on consumer, growth mindset, and the idea of make-it-happen-and-make-it-better serve as the three directions that our rhetorical compass points towards. We set our sights and keep our eyes on the prize.', 'gabung-2.png', 'md:flex-row-reverse'),
(3, 'Where We&#039;re Heading', 'Having the courage to sail through uncharted waters is no good without a map. We use our mission to democratize commerce through technology to navigate our way around until we reach that goal.', 'gabung-3.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_sec_one`
--

CREATE TABLE `home_sec_one` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_sec_one`
--

INSERT INTO `home_sec_one` (`id`, `title`, `desk`) VALUES
(1, '99%', 'Kota terjangkau'),
(2, '40+', 'Produk digital'),
(3, '865 jt', 'Produk terdaftar di platform'),
(4, '86.5%', 'Penjual adalah pebisnis baru'),
(5, '12± jt', 'Penjual terdaftar'),
(6, '&gt;60%', 'Pesanan terkirim paling lambat di keesokan harinya'),
(7, '2.5x', 'Peningkatan UMKM dipimpin oleh perempuan selama pandemi');

-- --------------------------------------------------------

--
-- Table structure for table `home_sec_two`
--

CREATE TABLE `home_sec_two` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_sec_two`
--

INSERT INTO `home_sec_two` (`id`, `title`, `desk`, `gambar`) VALUES
(1, 'Memberdayakan 90% penjual berskala mikro', 'Saat pandemi, Tokopedia mendorong para pelaku UMKM untuk dapat bertahan, bangkit, dan mengembangkan bisnisnya melalui adopsi digital.', 'dampak-1.png'),
(3, 'Jumlah penjualan meningkat 133%', '7 dari 10 pelaku usaha mengalami lonjakan volume penjualan seiring dengan beralihnya pergeseran penjualan secara daring melalui kanal Tokopedia.', 'dampak-2.png'),
(4, '76,4% penjual merasakan kemudahan mengelola bisnis di Tokopedia', 'Kemudahan dalam mengelola bisnis merupakan alasan utama bagi sebagian besar penjual yang bergabung bersama Tokopedia.', 'dampak-3.png'),
(5, 'Mendorong inklusi keuangan di Indonesia', 'Tokopedia turut mendorong adopsi metode pembayaran digital. E-wallet dan mobile/internet banking adalah dua produk keuangan yang paling banyak dipilih selama pandemi.', 'dampak-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk` varchar(200) NOT NULL,
  `contact_to` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `title`, `desk`, `contact_to`, `link`) VALUES
(1, 'Pertanyaan Pers', 'Untuk keperluan pers dan media, kunjungi', 'Ruang berita', 'mailto:pr@tokopedia.com'),
(2, 'Permintaan Pembicara', 'Permintaan pembicara untuk mengisi acara Anda. Mohon sertakan proposal serta detail acara dan kirim melalui email ke', 'speakers@tokopedia.com', 'mailto:speakers@tokopedia.com'),
(3, 'Tokopedia Care', 'Jika Anda memiliki pertanyaan seputar transaksi atau membutuhkan bantuan lainnya, kunjungi', 'Tokopedia Care', 'https://www.tokopedia.com/help'),
(4, 'Karir', 'Ingin ikut andil dalam pemerataan ekonomi secara digital? Kunjungi situs', 'Karir Kami', 'https://www.tokopedia.com/careers/');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `preview_map` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `alamat`, `preview_map`) VALUES
(1, 'Tokopedia Care', 'TOKOPEDIA CARE TOWER - Ground Floor Ciputra International, Jl. Lkr. Luar Barat No.101, RT.13, Rw. Buaya, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11740', 'maps-1.jpg'),
(2, 'Tokopedia Tower', 'Tokopedia Tower Ciputra World 2, Jl. Prof. DR. Satrio No.Kav. 11, RT.3/RW.3, Karet Semanggi, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950', 'maps-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsroom`
--

CREATE TABLE `newsroom` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsroom`
--

INSERT INTO `newsroom` (`id`, `title`, `isi`, `author`, `gambar`, `tanggal`) VALUES
(1, 'Hari Kesehatan Nasional Tokopedia dan Dokter Anak Ungkap Lima Mitos dan Fakta Kesehatan Anak', 'Apakah benar susu formula dapat menurunkan kecerdasan anak? Temukan mitos dan fakta kesehatan anak bersama Tokopedia Parents!\n\nJakarta, 11 November 2022 - Bertepatan dengan Hari Kesehatan Nasional 12 November 2022, Tokopedia melalui Head of Category Development Tokopedia, Ramadhan Niendraputra bersama Dokter Anak, dr. I Gusti Ayu Nyoman Partiwi SpA, MARS atau akrab disapa dr. Tiwi, mengupas tuntas lima mitos dan fakta seputar kesehatan keluarga dan anak.\n\nMenurut dr. Tiwi, orang tua sebaiknya lebih bijak dalam menyikapi informasi terkait kesehatan anak yang beredar di media sosial.\n\n“Faktanya, kecerdasan anak ditentukan oleh tiga faktor utama, yakni kebutuhan asuh (makanan dan minuman bernutrisi), kebutuhan asih (pemenuhan kasih sayang) dan kebutuhan asah (stimulasi yang tepat). Susu formula di sisi lain, bisa menjadi solusi yang bisa membantu anak di atas satu tahun menaikkan berat badan,” ungkap dr. Tiwi.\n\n“Penjualan susu formula di Tokopedia, di sisi lain, naik lebih dari 21 kali lipat selama kuartal III 2022 dibandingkan periode yang sama di 2021,” jelas Ramadhan.\n\nDr. Tiwi pun menyarankan orang tua untuk mengeksplorasi berbagai jenis olahan susu, misalnya es krim atau gelato, agar lebih menarik bagi anak. Salah satunya susu olahan yang bisa dijadikan pilihan adalah gelato Grofato yang diformulasikan dr. Tiwi dan bisa didapatkan di Tokopedia.\n\nBayi ‘bau tangan’ adalah istilah untuk bayi yang selalu ingin digendong. “Pada dasarnya bayi perlu digendong karena bayi perlu merasakan keamanan serta sentuhan yang hangat. Menggendong bayi juga dapat menumbuhkan rasa percaya bayi terhadap orang tua,” jelas dr. Tiwi.\n\nTokopedia melihat produk gendongan merupakan salah satu produk yang paling laris di sub kategori Ibu dan Bayi selama kuartal III 2022 dibandingkan periode yang sama di 2021.', 'asyari', 'news-1.jpg', '2022-12-04'),
(3, 'Tren Kategori Elektronik HP dan Gadget di Tokopedia Kuartal III 2022', 'Jakarta, 7 November 2022 - “Rumah Tangga, Elektronik, HP dan Gadget, Fesyen dan Kecantikan menjadi beberapa kategori yang paling banyak diburu masyarakat selama kuartal III 2022 di Tokopedia,” jelas Head of External Communications Tokopedia, Ekhel Chandra Wijaya.\r\n\r\nTokopedia mencatat beberapa wilayah dengan peningkatan transaksi produk elektronik paling tinggi, antara lain Barru (Sulawesi Selatan), Palopo (Sumatra Barat), dan Lombok Utara (Nusa Tenggara Barat). Di sisi lain, TV Box (Set Top Box), receiver TV, earphone, televisi dan bohlam menjadi beberapa produk elektronik yang paling banyak dibeli di Tokopedia.\r\n\r\n“Kami juga melihat jumlah transaksi produk TV Digital meningkat lebih dari 2,5 kali lipat selama satu tahun terakhir, dibanding tahun sebelumnya,” tambah Ekhel.\r\n\r\nUntuk mempermudah masyarakat bermigrasi dari TV Analog ke TV Digital sesuai aturan pemerintah, Tokopedia menawarkan berbagai promo spesial untuk pembelian TV Digital dan perangkatnya, seperti cashback hingga Rp300.000 dan bebas ongkir, serta Mega Electrodeals yang menyediakan deretan produk elektronik pilihan dengan diskon hingga 80% dan cashback hingga Rp600.000.\r\n\r\nSama halnya dengan Elektronik, HP dan Gadget juga menjadi salah satu kategori favorit di Tokopedia pada kuartal III 2022. “Berbagai produk iPhone, produk handphone Android dari berbagai brand, kabel data, charger handphone dan pelindung layar HP menjadi beberapa produk yang paling sering dibeli masyarakat di Tokopedia sepanjang kuartal III 2022,” jelas Ekhel.\r\n\r\nSepanjang periode kuartal III 2022, peningkatan transaksi produk HP dan Gadget paling tinggi di Tokopedia terjadi di beberapa wilayah, seperti Kebumen (Jawa Tengah), Tanah Datar (Sumatra Barat) dan Rote Ndao (Nusa Tenggara Timur).\r\n\r\nTokopedia pun terus berupaya mempermudah masyarakat mendapatkan berbagai produk HP dan Gadget, seperti lewat kampanye Super Gadget Day yang menyediakan berbagai pilihan gadget dengan diskon hingga 80%, serta Tokopedia Tekno yang menghadirkan berbagai produk teknologi terkurasi dengan jaminan harga murah dan diskon hingga Rp1.000.000.\r\n\r\nKhusus untuk para penggemar iPhone di Indonesia, sekaligus bertepatan dengan peluncuran iPhone 14, Tokopedia juga menghadirkan promo menarik produk Apple khususnya iPhone 14 selama bulan November 2022, seperti flash sale iPhone 14 seharga Rp14 hingga cashback sampai dengan Rp1.000.000 menggunakan kode promo IPHONEORI.\r\n\r\n“Untuk menjamin keamanan dan kenyamanan berbelanja produk elektronik hingga HP dan gadget di Tokopedia, kami juga menyediakan berbagai produk asuransi dengan premi yang sangat terjangkau mulai dari Rp500 dan bisa dimanfaatkan masyarakat untuk memberikan perlindungan lebih terhadap produk yang dibeli melalui platform kami,” tutup Ekhel.', 'asyari', 'news-2.jpg', '2022-12-04'),
(4, 'Tokopedia Bagi 5 Tips Make Up Natural dan Profesional ke Kantor', 'Bekerja dari kantor atau work from office (WFO) kembali menjadi rutinitas sebagian besar masyarakat. Tokopedia melalui Category Development (Beauty and Personal Care) Senior Lead Tokopedia, Sherine Pranata, pun membagikan lima tips make up natural nan profesional untuk WFO.\r\n\r\n1. Jaga Kelembapan Wajah dengan Moisturizer - Sherine mengungkapkan, “Krim pelembab atau moisturizer menjadi salah satu produk yang paling laris di kampanye Tokopedia Beauty Dealight 2022.” Selain menjaga kelembapan serta elastisitas kulit, moisturizer juga dapat menjadi pelindung kulit wajah sebelum pengaplikasian make up.\r\n\r\n2. Gunakan Make Up yang Transferproof - “Hindari memakai foundation tebal, gunakan bedak agar riasan awet, pilih lip tint yang tidak mudah melekat di masker,” saran Beauty Influencer, Kiara Leswara \r\n\r\n3. Pilih Bedak Berdasarkan Jenis Kulit - Pemilihan bedak harus disesuaikan dengan jenis kulit. Pengaplikasian bedak yang sesuai dengan jenis kulit dapat membuat make up menjadi lebih tahan lama. “Pakai primer dan foundation dengan hasil akhir dewy bagi kulit kering, sedangkan untuk kulit kombinasi atau berminyak, gunakan produk dengan hasil akhir matte,” \r\n\r\n4. Andalkan Eyeliner dan Eyeshadow - Karena pemakaian masker menutupi sebagian besar wajah, jangan lupa untuk menggunakan eyeliner serta eyeshadow. “Agar terlihat lebih natural, pilih eyeliner warna cokelat. Untuk eyeshadow, sebaiknya pakai warna netral, seperti cokelat tua atau taupe, agar tetap memberikan aksen profesional pada mata,” \r\n\r\n5. Jangan Lupa Setting Spray - Setting spray dapat membantu riasan tidak mudah luntur dan memudar, terutama ketika melakukan berbagai kegiatan di kantor.', 'asyari', 'news-3.jpg', '2022-12-04'),
(5, 'Tokopedia bersama Unilever Indonesia Dukung Pemberdayaan UMKM Perempuan Jawa Barat', 'Dalam semangat kolaborasi dengan para mitra strategis demi memberikan panggung seluas-luasnya bagi pegiat usaha di Indonesia, khususnya UMKM lokal, Tokopedia bersama Unilever Indonesia dan Pemerintah Provinsi Jawa Barat mengadakan Kelas Perempuan Maju Digital bertajuk “UMKM Perempuan Berdaya dan Maju Digital: Inspirasi Perempuan Berani Membawa Perubahan” yang dihadiri ratusan UMKM lokal wilayah Jawa Barat dan sekitarnya.\r\n\r\nAcara ini merupakan kelanjutan dari penandatangan kerja sama Tokopedia dan Unilever Indonesia dalam rangkaian program B20 Indonesia Women in Business Action Council yang didedikasikan untuk memberdayakan pengusaha perempuan. Hadir sebagai hasil dari presidensi B20 Indonesia, program ini juga menghadirkan inisiatif One Global Women Empowerment (OGWE) platform yang berfokus pada perluasan akses informasi, pendampingan bisnis di era digital, dan pelatihan teknis kewirausahaan sebagai bekal untuk menghadapi tantangan ke depan.\r\n\r\nKepala Divisi Kebijakan Publik dan Pemerintah Daerah Tokopedia, Emmiryzan mengatakan, “Ini merupakan keempat kalinya Tokopedia mengadakan KPMD setelah sukses diselenggarakan di Bali dan Surabaya. Kami berharap lewat KPMD, Tokopedia dapat turut membantu meningkatkan daya saing pelaku UMKM lokal, khususnya UMKM perempuan agar mampu menjadi tuan rumah di negeri sendiri serta semakin menjadi pilihan utama masyarakat Indonesia.”\r\n\r\nKetua Umum Sekoper Cinta, Atalia Praratya mengungkapkan, “Kami menyambut baik kolaborasi Tokopedia dan Unilever Indonesia dalam menghadirkan kegiatan KPMD di wilayah Jawa Barat. Hal ini pun sejalan dengan salah satu program kami di Sekoper Cinta yang memberikan pelatihan dalam membuka peluang usaha sehingga perempuan bisa mandiri dan berkontribusi pada perekonomian keluarga. Kami harap melalui kegiatan ini semakin banyak UMKM dari Jawa Barat yang berkualitas.”\r\n\r\n“Sejalan dengan strategi ‘The Unilever Compass’, Unilever berkomitmen untuk terus berkontribusi dalam menciptakan masyarakat yang lebih adil dan inklusif yang diwujudkan melalui upaya kami dalam mengembangkan keterampilan kewirausahaan dan menyediakan akses ke mentoring serta pendampingan bagi perempuan dan UMKM. Melalui kolaborasi dengan Tokopedia, kami berharap UMKM perempuan, khususnya di Jawa Barat, dapat terus bertumbuh dan berdaya saing,” terang Equity, Diversity and Inclusion Lead Unilever Indonesia Foundation, Marini Fabiano.', 'asyari', 'news-4.jpg', '2022-12-04'),
(6, 'Hari Pahlawan, Inisiatif Hyperlocal Tokopedia Dukung UMKM Lokal Jadi Pahlawan Ekonomi Digital', 'Menyambut Hari Pahlawan 10 November 2022, Tokopedia melalui inisiatif Hyperlocal berupaya membantu sekitar 12 juta pegiat usaha di Indonesia, yang hampir 100%nya UMKM lokal, menjadi pahlawan ekonomi.\r\n\r\nHyperlocal merupakan inisiatif Tokopedia untuk mendekatkan penjual dengan pembeli di mana pun mereka berada, agar UMKM di seluruh penjuru Indonesia punya kesempatan yang sama untuk bertumbuh dan berkembang (tanpa harus pindah ke kota besar), dan pembeli bisa mendapatkan produk kebutuhan yang lebih beragam dengan lebih cepat dan efisien.\r\n\r\n“Inisiatif Hyperlocal memiliki berbagai contoh manifestasi, seperti layanan pemenuhan pesanan (fulfillment) Dilayani Tokopedia, Kumpulan Toko Pilihan (KTP), kampanye PASTI (Paket Sehari Tiba) dan masih banyak lagi yang dapat dimanfaatkan oleh para pegiat lokal,” kata Kepala Divisi Hubungan Masyarakat (Regional) Tokopedia, Rizky Juanita Azuz.\r\n\r\nInisiatif Hyperlocal Tokopedia juga telah mendukung tumbuh kembang UMKM lokal. Terbukti dari jumlah penjual yang memanfaatkan layanan Dilayani Tokopedia naik lebih dari 1,5x lipat selama kuartal III 2022 dibanding kuartal III 2021. Peningkatan ini juga mendorong jumlah pembeli yang bertransaksi dengan penjual yang menggunakan layanan Dilayani Tokopedia naik lebih dari 2x lipat.\r\n\r\n“Selain di Dilayani Tokopedia, kami juga melihat jumlah transaksi dan penjual yang mengikuti kampanye PASTI dan KTP masing-masing melonjak lebih dari 1,5x lipat,” ungkap Head of Regional Growth Expansion (RGX) Central Tokopedia, Nafisah Wulandari.\r\n\r\n“Di sisi lain, kecamatan dengan pertumbuhan transaksi tertinggi melalui Tokopedia selama kuartal III 2022 dibanding kuartal III 2021, antara lain Kutowinangun di Jawa Tengah, Eremerasa, Sanrobone, Arungkeke di Sulawesi Selatan dan Indrapuri di D.I Aceh,” tambah Nafisah.', 'asyari', 'news-5.jpg', '2022-12-04'),
(7, 'Inilah Produk Kebutuhan Anak Paling Laris di Tokopedia Selama Kuartal III 2022', 'Tokopedia mencatat kategori Ibu dan Anak masih menjadi salah satu kategori yang paling laris di Tokopedia pada 2022. &quot;Transaksi pada kategori ini terus meningkat. Bahkan pada Semester I 2022, tercatat jumlah transaksi sub kategori Ibu dan Anak naik lebih dari 1,5x lipat dibandingkan dengan periode yang sama di 2021,” terang Head of Category Development Tokopedia, Ramadhan Niendraputra.Ia menambahkan, “Di kuartal III 2022, produk seperti Makanan &amp; Susu Bayi, Popok, Perlengkapan Mandi Bayi Perawatan Bayi, dan Perlengkapan Makan Bayi merupakan beberapa produk yang paling banyak diburu pada sub kategori Ibu dan Anak. Sementara di sub kategori Fesyen Anak, Tas Ransel Anak, Kaos Anak Laki-Laki, Sneakers Anak Laki-Laki, Setelan Anak Laki-Laki, dan Dress Anak Perempuan menjadi yang paling laris di kuartal III ini.”Jumlah pembeli untuk kategori ini pun semakin meningkat. Tokopedia mencatat ada kenaikan sekitar 1,5x lipat pada Semester I 2022 dibandingkan dengan Semester I 2021. Di sisi lain, Kota Medan, Palembang, Bandung, Semarang, Surabaya, dan Kabupaten Sidoarjo menjadi Kota/Kabupaten dengan transaksi tertinggi di kategori Ibu dan Anak Tokopedia.Tren ini turut didorong oleh sederet inisiatif dari Tokopedia untuk memenuhi kebutuhan orang tua akan produk yang berkaitan dengan anak. Seperti Tokopedia Parents, sebuah ekosistem khusus di Tokopedia untuk mempermudah masyarakat, terutama komunitas orang tua, mendapatkan produk kebutuhan serta informasi relevan berkaitan dengan anak, keluarga dan rumah tangga.“Data internal kami mencatat bahwa jumlah penjual yang ikut dalam Tokopedia Parents pun naik lebih dari 3x lipat pada kuartal III 2022 dibandingkan kuartal III 2021,” terang Ramadhan.Berangkat dari kesulitannya dalam mencari pakaian bayi yang nyaman dan multifungsi dengan harga terjangkau, Febrina Oktaviani, akhirnya mendirikan Kalale. “Setiap produk yang kami buat, tidak hanya nyaman dan praktis bagi anak, tapi juga memiliki cerita sendiri. Inilah yang membedakan produk kami dengan yang lainnya,” jelasnya.', 'asyari', 'news-6.jpg', '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'asyari', 'asyari@gmail.com', '5180e6fd91b7013f4f8acf677b5f1c2b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gabung`
--
ALTER TABLE `gabung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sec_one`
--
ALTER TABLE `home_sec_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sec_two`
--
ALTER TABLE `home_sec_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsroom`
--
ALTER TABLE `newsroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bisnis`
--
ALTER TABLE `bisnis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gabung`
--
ALTER TABLE `gabung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_sec_one`
--
ALTER TABLE `home_sec_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_sec_two`
--
ALTER TABLE `home_sec_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsroom`
--
ALTER TABLE `newsroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
