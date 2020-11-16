-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 09.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pameran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya`
--

CREATE TABLE `karya` (
  `id_karya` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_karya` varchar(255) NOT NULL,
  `nama_seniman` varchar(255) DEFAULT NULL,
  `tahun_karya` varchar(11) NOT NULL,
  `media` varchar(255) NOT NULL,
  `dimensi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `visitors` int(22) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karya`
--

INSERT INTO `karya` (`id_karya`, `id_user`, `nama_karya`, `nama_seniman`, `tahun_karya`, `media`, `dimensi`, `deskripsi`, `gambar`, `status`, `visitors`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem Ipsum', 'Rendi Putra Pradana', '2020', 'qwe', 'asd', '<p>asdsad<strong>sadsadsad<em>sadsadsad</em></strong></p>', '1604328612.JPG', 3, 0, '2020-10-31 14:25:04', '2020-10-31 14:25:04'),
(2, 1, 'Dolor Almet', 'Rendi Putra Pradana', '2018', 'Media', 'Dimensi', '<p>asdqwe12324234</p>', '1604693787.JPG', 3, 2, '2020-11-02 07:50:12', '2020-11-02 07:50:12'),
(3, 2, 'Kapal Karam Dilanda Badai', 'Raden Saleh', '1840', 'Cat minyak pada kanvas.', '74 x 98 cm.', '<p>Layaknya karya-karya bercorak Romantisisme, Raden Saleh mengungkapkan gejolak jiwanya yang terombang-ambing antara keinginan menghayati dunia imajinasi dan menyatakan dunia nyata. Perpaduan keduanya terwujud dalam ekspresi visual yang dramatis, emosional, sekaligus misterius. Meski demikian, para seniman romantisis sering juga berkarya berdasarkan pada kenyataan aktual. Dalam lukisan Kapal Dilanda Badai, dapat dilihat bagaimana Raden Saleh mengungkapkan perjuangan dramatis dua buah kapal dalam hempasan badai dahsyat di tengah lautan. Suasana mencekam diekspresikan lewat awan tebal yang gelap dan ombak-ombak tinggi yang menghancurkan salah satu kapal. Dari sudut atas, secercah sinar matahari tampak memantul ke gulungan ombak&mdash;menambah kesan dramatis.</p>', '1604389850.jpg', 1, 2, '2020-11-03 00:50:50', '2020-11-03 00:50:50'),
(4, 4, 'Kapal Karam Dilanda Badai', 'Raden Saleh', '1840', 'Cat minyak pada kanvas.', '74 x 98 cm.', '<p>Layaknya karya-karya bercorak Romantisisme, Raden Saleh mengungkapkan gejolak jiwanya yang terombang-ambing antara keinginan menghayati dunia imajinasi dan menyatakan dunia nyata. Perpaduan keduanya terwujud dalam ekspresi visual yang dramatis, emosional, sekaligus misterius. Meski demikian, para seniman romantisis sering juga berkarya berdasarkan pada kenyataan aktual. Dalam lukisan Kapal Dilanda Badai, dapat dilihat bagaimana Raden Saleh mengungkapkan perjuangan dramatis dua buah kapal dalam hempasan badai dahsyat di tengah lautan. Suasana mencekam diekspresikan lewat awan tebal yang gelap dan ombak-ombak tinggi yang menghancurkan salah satu kapal. Dari sudut atas, secercah sinar matahari tampak memantul ke gulungan ombak&mdash;menambah kesan dramatis.</p>', '1604389881.jpg', 3, 0, '2020-11-03 00:51:21', '2020-11-03 00:51:21'),
(5, 4, 'Insterr Arqopollo', 'Putra Angkasa Pura', '1999', 'Kanvas', '400 x 732', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1604695650.png', 3, 0, '2020-11-06 13:47:30', '2020-11-06 13:47:30'),
(6, 4, '123', '123', '132', '123', '3213', '<p>123wqewe</p>', '1604695849.png', 3, 0, '2020-11-06 13:50:49', '2020-11-06 13:50:49'),
(7, 4, 'Pasangan', 'Wiyoso Yudoseputro', '1974', 'Kayu Besi.', '74 cm', '<p>Karya yang berjudul &ldquo;Pasangan&rdquo; (1974), adalah salah satu di antara puluhan karya 3 dimensi<br />\r\nWiyoso Yudoseputro lainnya. Karya tersebut mewakili periode penciptaan era 70-an, di mana<br />\r\npendekatan akademik menjadi domain landasan berkarya bagi para perupa patung di sebagian kota-kota besar Indonesia. Nilai universal dan kebaruan dari pendekatan Barat, yang hadir lewat akademi atau perguruan tinggi seni tetap membuka celah bagi berkembangnya keunikan ekspresi dari setiap diri perupa, tidak terkecuali sosok Wiyoso dalam hal berkarya sangat terpengaruh oleh nilai-nilai tersebut. Wiyoso senantiasa memadukan pendekatan lain, secara inovatif dengan bersumber dari khasanah seni rupa timur secara umum dan lokal tradisional secara khusus.</p>\r\n\r\n<p>&ldquo;Pasangan&rdquo; memperlihatkan upaya Wiyoso untuk memanifestasikan gagasan universal yang membentuk dan menandai kehidupan. Femininmaskulin, yin-yang. Penghadiran<br />\r\nbentuk dilakukan dengan pendekatan abstrak figuratif terhadap 2 sosok tubuh yang disatukan. Gagasan penyatuan ini bisa mencakup tatanan biologis, kosmik maupun spiritual. Karya ini memperlihatkan karakter organik dan soliditas yang kuat yang dibentuk oleh komposisi 2 sosok yang berdekapan secara asimetris namun seimbang. Ditambah oleh ekspresi kekuatan dan kekerasan kayu besi sebagai media berkaryanya. Karakter yang kemudian muncul adalah citra keabadian dari penyatuan entitas yang saling berlawanan, namun senantiasa berupaya mencapai ekuilibrium ini. Karya &ldquo;pasangan&rdquo; ini sebagaimana halnya beberapa karya Wiyoso lain merupakan hasil perenungannya yang intens akan nilai kehidupan yang paling azali dan hakiki. Entitas yang tersirat di dalam karya &ldquo;Pasangan&rdquo; tampaknya dipengaruhi juga oleh pola pandang ketimuran yang sarat memuati bidang keilmuan sejarah seni rupa tradisi yang ditekuni Wiyoso selama berkarir sebagai dosen. Sosok &ldquo;Pasangan&rdquo; terlihat berasosiasi dengan gagasan menhir atau lingga-yoni.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sumber gambar: galeri-nasional.or.id</p>', '1605455844.jpg', 3, 1, '2020-11-15 08:57:24', '2020-11-15 08:57:24'),
(8, 4, 'Hariadi Selobinangun', 'Potret Diri', '1962', 'Cat minyak pada kanvas.', '120 x 90 cm.', '<p>Karya&nbsp; &ldquo;Potret Diri&rdquo; (1962) ini memperlihatkan penampilan unik dari pelukis Indonesia, yaitu dengan topi laken, over coat, dan syal hijau. Potret ini menampilkan penanda dan makna percaya diri seniman yang hidup pada masa sekitar revolusi kemerdekaan. Mereka mencari Indonesia baru dengan mensintesiskan tradisi dan modernitas, tetapi juga sering mengaktualisasikan dirinya dengan idiom modern. Hariadi juga dikenal dengan lukisannya yang monumental, yaitu &ldquo;Jalan Berarak, Awan Bersimpang&rdquo;.</p>', '1605455982.jpg', 3, 1, '2020-11-15 08:59:42', '2020-11-15 08:59:42'),
(9, 4, 'Yang Berusaha Tumbuh', 'Dede Eri Supria', '1992', 'Cat minyak pada kanvas.', '140 x 140 cm.', '<p>Secara visual karya &ldquo;Yang Berusaha Tumbuh&rdquo; (1992) ini melukiskan persemaian yang tumbuh di<br />\r\nantara reruntuhan beton gedung, namun dibalik itu menyiratkan pergolakan antara kekuatan dengan kelemahan, harapan sekaligus keputusasaan. Dengan bahasa visualnya yang khas, Dede berharap&nbsp; tumbuhnya modernisasi jangan sampai merugikan pihak lain. Halal untuk mengejar kemajuan, akan tetapi tanpa mengabaikan yang lemah atau bahkan marjinal. Karenanya, karya ini ringan, namun mengandung pesan moral yang kuat.</p>', '1605456296.jpg', 1, 4, '2020-11-15 09:04:56', '2020-11-15 09:04:56'),
(10, 4, 'Pencarian Tempat', 'I Gusti Nengah Nurata', '1989', 'Cat minyak pada kanvas.', '97 x 153 cm.', '<p>Dalam lukisan &ldquo;Pencarian Tempat&rdquo; (1989), I.G. Nengah Nurata menghadirkan kasih perjalanan<br />\r\nspiritual dalam gaya Surrrealisme dekoratif yang sarat dengan imaji. Pada lanskap tanah kering bersela batu-batu karang yang bermutasi sebagai makhluk demonis, di antaranya tumbuh pohon yang meranggas. Seorang Brahmana membawa panji yang berkibar, duduk di atas gajah tunggangannya berjalan diikuti sekawanan binatang yang mengiringinya. Langit gelap dengan sosok kala yang berkamuflase dalam awan-awan cumulo, menatap tajam ke arah rombongan sang Brahmana. Selain itu masih ada buru dan binatang buas yang menghadang. Sebagai latar belakang, diungkapkan dengan dominasi warna coklat umber, sehingga menguatkan kesan magis dalam karya tersebut.</p>\r\n\r\n<p>Dalam paradigma estetik humanisme universal, para pelukis Indonesia banyak mengembangkan kecenderungan personal lirisisme, termasuk di dalamnya gaya Surrealisme yang berkembang pesat di Yogyakarta. Surrealisme banyak mencirikan imajinasi yang bersumber dari dunia bawah sadar dengan bebagai problem ironi kehidupan personal maupun sosial sang seniman maupun masyarakat. Kecenderungan gaya ini mengantarkan pelukis dalam penggalian nilai-nilai spiritual dan reliji bagi karya-karyanya. Di dalamnya termasuk nilai-nilai kultural Bali yang sarat dengan kisah dalam kitab suci maupun mitos-mitos, di mana Nurata lahir dan tumbuh dengan segala penghayatannya.</p>\r\n\r\n<p>Lukisan ini secara simbolik mengungkapkan sebuah proses pencarian eksitensi jati diri manusia serbagaimana layaknya sang Brahmana pengembara. Gulungan awan kala merupakan representasi hawa jahat yang terung mengintai kemurnian pencarian. Ungkapan penghayatan ini mempunyai dimensi reliji yang hadir dalam dunia simbolik, sebagai penggambaran ruang bawah sadar manusia dalam realitas transendensi yang sebenarnya.</p>\r\n\r\n<p>sumber:&nbsp;galeri-nasional.or.id/</p>', '1605456853.jpg', 1, 15, '2020-11-15 09:14:13', '2020-11-15 09:14:13'),
(11, 4, 'Meraba Diri', 'Ivan Sagita', '1988', 'Cat minyak pada kanvas.', '72 x 90 cm.', '<p>Lukisan Ivan Sagita yang berjudul &ldquo;Meraba Diri&rdquo; (1988) ini mempunyai kecenderungan gaya Surrealisme, dengan menekankan pengungkapan problem-problem psikologis lewat tanda-tanda yang bersifat simbolis. Dalam karya-karyanya yang lain, pelukis ini juga sering mengangkat persoalan pencarian nilai-nilai kemanusiaan dengan memakai simbol-simbol atau atribut-atribut sosiokultural yang ada. Tema-tema kemanusiaan itu sering muncul dalam penggambaran yang absurd, karena sering muncul dalam juxtaposition atau penjajaran bentuk-bentuk yang irasional seperti dalam tiga figur kosong yang belajar dalam lukisan ini. Dengan teknik realisme yang kuat dan warna-warna cenderung berat, karya-karya Ivan semakin kental dengan suasana misteri.</p>\r\n\r\n<p>Pada tahun 1980-an dari seni lukis jenis personal lirikal, dalam seni lukis Indonesia muncul lagi kecenderungan baru pada bentuk-bentuk Surrealistis. Pengikut-pengikutnya adalah pelukispelukis Yogyakarta yang terus berpengaruh ke kotakota lain. Dalam genre lukisan ini Ivan merupakan seniman dengan intensitas kreatif tinggi dan kesetiaan yang panjang. Penggalian itu lebih-lebih<br />\r\nterkait dengan tanda-tanda sosiokultural Jawa atau lebih spesifik lagi yaitu kosmologi ruang Yogyakarta.</p>\r\n\r\n<p>Dalam lukisan &ldquo;Meraba Diri&rdquo; secara simbolis dapat dilihat bahwa ada proses pada tiga figur yang berusaha mengidentifikasi jati dirinya. Padahal secara kontradiktif tubuh dan muka figur-figur ini sebenarnya kosong. Dalam&nbsp; kekosongan figur-figur itu hanya ada awan berarak yang memunculkan tangan-tangan meraba muka. Figur di tengah tersemat atribut sanggul dan telinga wanita, yang memberi gambaran proses pencarian identitas dan jati diri kewanitaan. Akan tetapi, figur-figur berjajar itu juga bisa diinterpretasikan sebagai proses introspeksi dan pencairan diri dalam kekosongan.</p>\r\n\r\n<p>sumber: galeri-nasional.or.id</p>', '1605457137.jpg', 1, 1, '2020-11-15 09:18:57', '2020-11-15 09:18:57'),
(12, 4, 'Dialog', 'Boyke Aditya K.S', '1991', 'Akrilik pada kanvas.', '110 x 130 cm.', '<p>Suasana fantastis dengan imaji mistis tersirat dalam karya Boyke Aditya K.S. yang berjudul &ldquo;Dialog&rdquo; (1991) dalam gaya Surrealisme. Sebuah lanskap dunia imajinatif hadir dengan makhluk-makhluk khayat yang tinggal dengan terjerat dalam sulur-sulur yang membentuk labirin. Sosok merah dalam bentuk transformatif manusia binatang mengulurkan tangan, melakukan dialog dengan figur berwarna hijau yang berdiri menunggang kerbau. Karya ini secara visual menunjukkan idiom yang bersumber dari seni tradisi wayang maupun&nbsp;stilisasi dari berbagai seni tradisi yang lain. Oleh karena itu, sebagai ungkapan Surrealis, karya ini dapat dikatagorikan dalam bentuk Surrealisme biomorphic yang menggunakan idiom-idiom visual stilisasi bentuk bentuk makhluk hidup.</p>\r\n\r\n<p>Kecenderungan pada gaya Surrealisme merupakan salah satu periode yang pernah dominan dalam seni lukis Indonesia, khususnya pada pelukispelukis Yogyakarta. Kemunculan kecenderungan ini merupakan kelanjutan dari paradigma estetik humanisme universal yang lebih menekankan pada kebebasan personal dalam mengungkapkan pencarian jati diri seniman. Dalam kecenderungan itu banyak seniman yang melahirkan karya dengan menggali konsep dan tema dari masalah sosiokultural dengan tekanan nilai-nilai lokal dan tradisi. Karya yang dihadirkan Boyke Aditya ini banyak mengungkapkan ironi kehidupan sosial dalam simbol-simbol personal yang digali dari mitos maupun legenda masyarakat Jawa dan lainnya.</p>\r\n\r\n<p>Dalam karya ini, pelukis mengungkapkan proses dialog atau problem komunikasi dari suatu dunia imajiner yang bersumber dari kepercayaan gaib, kehidupan spiritual, maupun suatu sistem reliji. Dalam kehidupan kemanusiaan modern ini, tahap kebudayaan mitis di mana pandangan manusia yang masih menyatu dengan alam dan mengidentifikasi problem transendensi sebagai dunia gaib, masih banyak menguasai berbagai praktik kebudayaan. Boyke Aditya yang hidup dalam komunitas kebudayaan Jawa dan Sunda yang masih banyak menganut sistem reliji lokal berupaya mereflesikan berbagai problem simbolik dari nilai kehidupan itu. Suasana fantastis yang diciptakan merupakan refleksi dari keterbatasan manusia memahami berbagai kekuatan transedental.</p>\r\n\r\n<p>sumber: galeri-nasional.or.id</p>', '1605457249.jpg', 1, 2, '2020-11-15 09:20:49', '2020-11-15 09:20:49'),
(13, 4, 'Dinamika Keruangan', 'Fadjar Sidik', '1969', 'Cat minyak pada kanvas.', '94 x 64 cm.', '<p>Dalam lukisan &ldquo;Dinamika Keruangan&rdquo; (1969) ini, Fadjar Sidik menampilkan ritme-ritme bentuk dari<br />\r\ndua gugusan elemen visual dengan dominan warna hitamdan warna kuning oker. Di sela-sela susunan bentuk terdapat bulatan-bulatan merah yang memberikan aksentuasi seluruh ritme itu, sehingga timbul klimaks ritme yang meneteskan kelegaan. Jika dalam lukisan itu terdapat bentuk bulatan dan sabit, hal itu sama sekali bukan representasi relijius yang berkaitan dengan nilai simbolik bulan penuh atau bulan sabit. Demikian juga gugusan bentuk-bentuk segi empat dan geliat sulur garis hitam, bukan abstraksi bentuk ular dan serangganya yang mempunyai nilai magis simbolik. Pelukis ini lebih menekankaan bagaimana dalam kanvasnya hadir ekspresi visual yang membuat dinamika, ketegangan, ritme, keseimbangan, atau karakter- karakter lain.</p>\r\n\r\n<p>Ungkapan dalam lukisan ini merupakan salah satu dari manifestasi pencapaian abstrak murni telah melewati proses panjang dalam kreativitasnya. Pencapaian Fadjar sampai pada bentuknya estetik ini menunjukkan sikapnya sebagai seorang modernis. Hal itu justru dilatarbelakangi oleh kekecewaannya sebagai seorang romantis yang kehilangan dunia idealnya, yaitu objek Bali yang<br />\r\ntelah berubah menjadi artifisial. Sebagai seorang yang mempunyai bahan dasar modernis lewat lingkungan kultural keluarga dan pendidikan, Fadjar tetap lebih dahulu melewati proses mengabstraksi bentuk-bentuk alam yang disukainya. Keputusan untuk menciptakan bentuk-bentuk sendiri (ia sering menyebutnya sebagai disain ekspresif), tanpa merepresentasikan bentuk-bentuk apapun di alam, merupakan sikap yang purna dari pencarian dan &lsquo;pemberontakan&rsquo; estetiknya. &lsquo;Pemberontakan&rsquo; itu bisa lebih dilihat dengan makna sosial, karena Fadjar pada waktu itu berjuang sebagai seorang modernis dalam lingkungan seni lukis Yogyakarta yang masih kuat mengembangkan paradigma estetik kerakyatan. Sikap sosial yang terkristal dalam konsep estetik itu, menempatkan Fadjar Sidik sebagai agen perubahan dalam seni lukis modern Indonesia.</p>\r\n\r\n<p>sumber: galeri-nasional.or.id</p>', '1605459525.jpg', 1, 0, '2020-11-15 09:58:45', '2020-11-15 09:58:45'),
(14, 4, 'Kucing', 'Popo Iskandar', '1975', 'Cat minyak pada kanvas.', '120 x 145 cm.', '<p>Lukisan Popo Iskandar &ldquo;Kucing&rdquo; (1975),&nbsp; mengungkapkan salah satu dari berbagai karakter yang pernah dibuat dengan objek binatang. Dengan deformasi yang mengandalkan efek-efek goresan yang spontan dan transparan, binatangitu seakan baru bangkit dari tidur dan mengibaskan badanya. Dengan warna hitam belang-belang putih, kucing ini tampak sebagai sosok binatang yang misterius.</p>\r\n\r\n<p>Popo Iskandar dikenal sebagai pelukis yang sangat esensial dalam menangkap objek-objeknya. Namun demikian, kecenderungan itu tidak sama dengan Rusli yang lebih mengandalkan kekuatan garis dalam warna. Popo masih mengembangkan berbagai unsur visual lain dan cara pengolahannya. Hal itu bisa dilihat misalnya pada pengolahan nilai tekstur, efek-efek teknik transparan atau opaque dalam medium cat, maupun pengolahan deformasi dan komposisi objek-objeknya. Di samping itu, pelukis ini juga selalu melakukan penggalian psikologis untuk menampilkan esensi dan ekspresi objek yang akan ditulis. Dengan demikian, karakter objek-objek itu bisa diungkapkan secara khas. Dalam serial objek kucing ia menggali esensi berbagai gerak kucing yang biasa dilihat karakternya sebagai binatang jinak, lucu, indah, bahkan juga bisa memancarkan sifat-sifat misterius.</p>\r\n\r\n<p>Dengan penghayatan objek&ndash;objeknya, Popo memang berhasil menampilkan karakter-karakter yang esensial. Dengan demikian, dapat dilihat misalnya, ia begitu piawai menampilkan kegagahan, kejantanan, dan nilai-nilai artistik pada objek ayam jago serta kuda. Dalam intensitas penghayatan yang dapat dilihat bagaimana rumpun-rumpun bambu yang ramping menjadi irama yang puitis dalam kanvasnya. Dari berbagai serial objek-objek itu, yang paling fenomenal dan akhirnya menjadi ciri identitas kepelukisan Popo Iskandar adalah objek kucing. Dalam seni lukis modern Indonesia, pelukis Popo oleh para pengamat (seni rupa) didudukkan sebagai seorang modernis yang berhasil meletakan azas kemurnian kreativitas&nbsp; individual dalam karyakaryanya. Esensi karakteristik dari objek-objek dalam ruang imajiner itu merupakan tanda yang kuat dalam pencapaiannya.</p>\r\n\r\n<p>sumber: galeri-nasional.or.id</p>', '1605459637.jpg', 1, 0, '2020-11-15 10:00:37', '2020-11-15 10:00:37'),
(15, 4, 'Komposisi', 'Oesman Effendi', '1975', 'Cat minyak pada kanvas.', '61 x 91 cm.', '<p>Pada lukisan yang berjudul &ldquo;Komposisi&rdquo;, 1975, ini Oesman Effendi menghadirkan keberadaan bentuk sebagai suatu gejala visual yang murni. Walaupun bawah sadar kolektif kita bisa mengasosiasikan bentuk itu dengan bentuk-bentuk yang ada di alam, namun pelukis ini sama sekali tidak bermaksud merepresentasikan bentuk apapun. Bidang biomorphic yang terdiri dari relung-relung dengan warna kuning dan oker itu mengesankan suatu gerak yang mengambang. Kesan gerak di dalamnya lebih ritmis, karena dalam relung-relung ada aksentuasi irama garis berkelok dengan warnawarna yang kuat. Walaupun demikian, ritme dan warna cerah tidak lalu menghadirkan kemeriahan, namun suasana yang terbangun justru kesunyian yang mengambang. Dalam lukisan ini ekspresi Oesman Effendi yang juga didasari spiritualitas tasawuf menyampaikan keheningan lewat paradoks visual. Dalam ritme gerak ada keheningan, dalam kecerahan juga terbangun kesunyian. Dalam tataran ini, mungkin ia ingin menghadirkan bentuk-bentuk itu sebagai suatu simbol pencapaian spiritual tertentu, namun dalam bahasa yang subtil.</p>\r\n\r\n<p>Sesudah tahun 1960, Oesman Effendi semakin intens dengan dunia abstrak ini, sehingga alam dan objek-objek hanya tinggal esensi yang diungkapkan lewat ritme visual. Dalam ritme itu ia mengekspresikan karakter karakter meditatif, puitis, dramatis, dan magis lewat garis dan warna. Pencapaian ini dimulai lewat proses perjuangan sikap kesenian yang soliter dari lingkungan sosiokulturalnya.</p>\r\n\r\n<p>Pada tahun 1950, walaupun di Yogyakarta Oesman Effendi telah mempunyai kecenderungan pada seni lukis abstrak, karena bentuk-bentuk dalam lukisannya telah mengalami penyederhanaan atau abstraksi. Ia melakukan eksperimen-eksperimen dengan warna dan garis, terutama dengan media cat air dan pastel. Kejernihan pada pelukis itu mencerminkan kemerdekaan pribadi untuk tidak hanyut pada arus paradigma estetik kerakyatan dengan ikatan politik cenderung kekiri-kirian, sebagaimana yang dominan di Yogyakarta pada masa itu. Untuk terus mencari kemerdekaan pribadi itulah ia akhirnya keluar dari sanggar SIM Yogyakarta yang dirasakan semakin ketat dengan ideologi kerakyatannya. Selanjutnya ia pindah ke Jakarta dengan terus mengeksplorasi bentukbentuk abstraksi bersama dengan pelukis Zaini, Nashar, Rusli, dan Wakidjan. Pada tahun 1957, ketika Oesman Effendi memamerkan karya-karyanya yang berupa objek-objek dari susunan garis dan bidang geometris, Basuki Resobowo mengkritiknya bahwa pemirsa hanya dicekau (sic) oleh konstruksi unsurunsur visual yang formal. Namun justru kritik itulah, yang menegaskan Oesman Effendi sebagai pelukis yang teguh memperjuangkan seni abstrak.</p>', '1605460460.jpg', 1, 0, '2020-11-15 10:14:20', '2020-11-15 10:14:20'),
(16, 4, 'Upacara Bali', 'Trisno Sumardjo', '1959', 'Cat minyak pada kanvas.', '59 x 48 cm.', '<p>Karya &ldquo;Upacara Bali&rdquo; (1959) ini merupakan ungkapan dalam gaya Impresionism yang juga cenderung dekoratif. Suasana yang dibangun terkesan puitik dan sepi, dengan warna-warna yang kelam. Lukisan Trisno Sumardjo banyak mengahadirkan tema-tema pemandangan, susana alam perdesaan, dan perkotaan.</p>', '1605460819.jpg', 1, 0, '2020-11-15 10:20:21', '2020-11-15 10:20:21'),
(17, 4, 'Melukis di Taman', 'Kartono Yudhokusumo', '1952', 'Cat minyak pada kanvas.', '90 x 55 cm.', '<p>Kartono merupakan pelopor untuk genre lukisan dekoratif di Indonesia. Perkembangan itu dimulai dari lukisan-lukisan realisme yang menggunakan warna-warna bebas. Dalam karya &ldquo;Melukis di Taman&rdquo;(1952) ini, terlihat bagaimana corak dekoratif itu benar-benar menjadikan jiwa. Semua objek dalam pemandangan itu digambarkan dengan rincian detail, baik yang ada di depan maupun di latar belakang yang jauh. Berbagai warna cerah pada objek juga lebih mencerminkan intuisi pelukis dari pada kenyataan yang ada di alam. Hal lain sebagai ciri genre lukisan ini adalah menggunaan perspektif udara (aerial perspective) yang memungkinkan cakrawala terlihat ke atas dan<br />\r\nbidang gambar menjadi lebih luas, sehingga objekobjek lebih banyak dapat dilukiskan.</p>\r\n\r\n<p>Dalam lukisan ini terungkap Romantisisme pelukis dalam membayangkan dunia yang utuh dan ideal. Wanita-wanita berkebaya yang bercengkerama dan berkasihan, manjadi bagian penting di antara pohon-pohon dan binatang dalam taman yang penuh warna. Hal lain yang menarik lagi yaitu pada sudut depan terlihat seorang laki-laki melukis model wanita dengan pakaian lebih modern di<br />\r\nantara kerumunan wanita lain dalam pakaian kebaya. Selain hal itu menunjukkan setting sosial yang berkaitan dengan gaya hidup, juga bisa menjelaskan Romantisisme pada pelukisnya. Dalam bawah sadarnya seorang romantis selalu ingin menghadirkan dunia ideal dan kontradiksi atau berbagai kenyataan yang terpecah-pecah. Besar kemungkinan tokoh sentral dalam karya-karyanya adalah manifestasi dunia ide yang dimunculkan. Namun demikian, dalam kebanyakan genre corak<br />\r\ndekoratif, ada kesadaran bahwa alam adalah kosmos dan manusia hanya merupakan setitik bagian dari padanya. Oleh karena itu, dalam lukisan ini ego sang pelukis yang begitu ideal pun hanya diletakkan dalam bagian kecil, dari sudut lukisan yang sarat dengan objek dan kaya dengan warna.</p>', '1605461020.jpg', 1, 0, '2020-11-15 10:23:40', '2020-11-15 10:23:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('qwe@qwe.qwe', '$2y$10$fWAdC68mLBdddu3CzICdU.eogi53voOry7VKVYfiRflZR2fwmpGHC', '2020-11-06 03:52:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_post`
--

CREATE TABLE `report_post` (
  `id_report` int(11) NOT NULL,
  `id_karya` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status_report` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report_post`
--

INSERT INTO `report_post` (`id_report`, `id_karya`, `id_user`, `pesan`, `status_report`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Kata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasarKata-kata kasar', 1, '2020-11-11 19:57:39', NULL),
(5, 2, 1, 'qwe', 2, '2020-11-11 13:02:17', '2020-11-11 13:02:17'),
(6, 9, 1, 'Ini adalah isi alasan laporan', 0, '2020-11-16 01:24:04', '2020-11-16 01:24:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isSuperAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_person`, `isAdmin`, `isSuperAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rendi Putra Pradana', 'qwe@qwe.qwe', '0', 1, 1, NULL, '$2y$10$mO.IEXdGEgeYYknop1c5a.21MTK9OfGpwUpHPAhTRYRmkU8OCpGKG', NULL, '2020-10-27 23:51:50', '2020-10-27 23:51:50'),
(2, 'asd', 'asd@asd.asd', '0', 0, 0, NULL, '$2y$10$pUc8SMLvMBYd0DVSmdLuM.GqMVtx33kOveKsNb1ADmy0K9JIUfUBW', NULL, '2020-11-08 10:34:06', '2020-11-08 10:34:06'),
(3, 'user', 'user@a.a', '0', 0, 0, NULL, '$2y$10$/xpNgkhrr5KUe2eVMLOJUu8fs9SLuim2NDMnH.QJfqQzDukg7QUMa', NULL, '2020-11-09 06:14:39', '2020-11-09 06:14:39'),
(4, 'seniman', 'seniman@a.a', '0', 1, 0, NULL, '$2y$10$/E2wO2FHtfZRvUSJ6no7B.uOkMN8h9qHmom.itE/lEZonssyREfF.', NULL, '2020-11-09 06:15:20', '2020-11-09 06:15:20'),
(5, 'admin', 'admin@a.a', '0', 1, 1, NULL, '$2y$10$/NguXvUIXcLwnJAiMhbyY.xvyRVwY8EAWfp69Ye2QC2kNBqu/RjYW', NULL, '2020-11-09 06:29:08', '2020-11-09 06:29:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `report_post`
--
ALTER TABLE `report_post`
  ADD PRIMARY KEY (`id_report`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karya`
--
ALTER TABLE `karya`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `report_post`
--
ALTER TABLE `report_post`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
