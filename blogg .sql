-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2021, 18:27:23
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogg`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` text NOT NULL,
  `admin_sifre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'DEMET', 'wdqw');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `site_id` int(11) NOT NULL,
  `site_url` varchar(500) NOT NULL,
  `site_title` varchar(500) NOT NULL,
  `site_desc` varchar(1000) NOT NULL,
  `site_keyw` varchar(1000) NOT NULL,
  `site_logo` varchar(500) NOT NULL,
  `site_favicon` varchar(500) NOT NULL,
  `site_facebook` varchar(500) NOT NULL,
  `site_google` varchar(500) NOT NULL,
  `site_instagram` varchar(500) NOT NULL,
  `site_youtube` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_id`, `site_url`, `site_title`, `site_desc`, `site_keyw`, `site_logo`, `site_favicon`, `site_facebook`, `site_google`, `site_instagram`, `site_youtube`) VALUES
(2, 'http://localhost:8080/ramayana/index.php', 'Demet Düz /Web Blog', 'Demet Düze ait bir blog scriptidir.', 'blog,eğitim', '942014657_WhatsApp Image 2021-02-15 at 15.58.22.jpeg', '', 'facebook.com', 'google.com', 'instegram.com', 'youtube.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_title` varchar(500) NOT NULL,
  `kategori_url` varchar(500) NOT NULL,
  `kategori_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_title`, `kategori_url`, `kategori_tarih`) VALUES
(1, 'PYTHON', 'PYTHON', '2021-01-24 08:18:50'),
(2, 'YORUM SATIRLARI', 'PYTHON', '2021-01-24 08:18:54'),
(3, 'PYTHON OPERATÖRLER', '', '2021-02-02 06:36:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_gonderenisim` varchar(500) NOT NULL,
  `mesaj_gonderenmail` varchar(500) NOT NULL,
  `mesaj_konu` varchar(500) NOT NULL,
  `mesaj_aciklama` text NOT NULL,
  `mesaj_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `mesaj_okunma` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `mesaj_gonderenisim`, `mesaj_gonderenmail`, `mesaj_konu`, `mesaj_aciklama`, `mesaj_tarih`, `mesaj_okunma`) VALUES
(2, 'demet düz ', 'demetduz2696@gmail.com', 'tebrik mesajı', 'm', '2021-02-18 08:34:01', '0'),
(3, 'demet düz ', 'demetduz2696@gmail.com', 'tebrik mesajı', 'm', '2021-02-18 08:34:01', '0'),
(4, 'demet düz ', 'demetduz2696@gmail.com', 'tebrik mesajı', 'm', '2021-02-18 08:34:03', '0'),
(26, 'DEMET DÜZ', 'demetduz2696@gmail.com', 'TEBRİK MESAJI', 'TEBRİKLER', '2021-06-18 18:31:56', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `yazi_id` int(11) NOT NULL,
  `yazi_foto` varchar(500) NOT NULL,
  `yazi_title` varchar(500) NOT NULL,
  `yazi_icerik` text NOT NULL,
  `yazi_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yazi_kategori_id` int(11) NOT NULL,
  `yazi_okunma` varchar(500) NOT NULL,
  `yazi_seolink` varchar(500) NOT NULL,
  `yazi_on_icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`yazi_id`, `yazi_foto`, `yazi_title`, `yazi_icerik`, `yazi_tarih`, `yazi_kategori_id`, `yazi_okunma`, `yazi_seolink`, `yazi_on_icerik`) VALUES
(1, '932124103_images.png', 'PYTHON KURULUM', '<p><img alt=\"\" src=\"C:\\xampp\\xamp\\htdocs\\busra\\images\\5.jpg\" style=\"float:left\" />Python ile yazılım geliştirmek i&ccedil;in bir&ccedil;ok ara&ccedil; vardır.Bunlar Anaconda, Spyder, orange, jupyter notebook, visual studio code ve pycharmdır.</p>\r\n\r\n<p>Python&#39;un kendi geliştirme ortamıda vardır.Ama pycharm vb. &nbsp;ara&ccedil;lar bize kod yazmada grafiksel aray&uuml;z sunmaktadır.O y&uuml;zden ilk başta python 3.9.1 &#39;i bilgisayarımıza indirip kurucaz.Daha sonra da python yazmak i&ccedil;in &ccedil;ok kullanılan pycharm kurulumu yapılacaktır.</p>\r\n\r\n<p><strong>Python Kurulumu</strong></p>\r\n\r\n<p>Birinci adımda <a href=\"https://www.python.org/\">https://www.python.org/</a> sitesinden&nbsp; indirme işlemi yapılır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://3.bp.blogspot.com/-AxD65qBJi38/W3hgqOgy0YI/AAAAAAAAAEo/B4VWqJAkbgYxq55_M-JRj-xIRTra5FyxACLcBGAs/s640/python_windows_01.PNG\" style=\"height:350px; width:640px\" /></p>\r\n\r\n<p>A&ccedil;ılan sayfada işletim sistemine&nbsp; ve bilgisayarın 32 bit ve ya 64 bit olmasına g&ouml;re indireceğiniz kurulum dosyasını se&ccedil;iniz.İndirilen kurulum dosyasına &ccedil;ift tıklanarak kurulum dosyası &ccedil;alıştırılır.</p>\r\n\r\n<p><img alt=\"\" src=\"D:\\Python\\python kurulum\" /><img alt=\"\" src=\"https://tutorial.djangogirls.org/tr/python_installation/images/python-installation-options.png\" style=\"height:408px; width:650px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"D:\\Python\\python kurulum\" />&quot;Add Python 3.5 to PATH&quot; ifadesinin yer aldığı kutucuk işaretlenir b&ouml;ylece Python ortam değişkeni olarak tanımlanmaktadır.</p>\r\n\r\n<p>&nbsp;Instal launcher&nbsp; for all users yani t&uuml;m kullanıcılar i&ccedil;in y&uuml;kleme se&ccedil;eneğini işaretleyerek installnow&#39;a basarak devam ederiz.</p>\r\n\r\n<p><img alt=\"\" src=\"https://2.bp.blogspot.com/-tUSYLKSNvqw/W3hr4r-SB3I/AAAAAAAAAGM/NuDEJNjruo4JJtpt8MF6f61YiU7Jq4PUwCLcBGAs/s640/python_windows7_7.PNG\" style=\"height:394px; width:640px\" /></p>\r\n\r\n<p>Setup progress penceresinde y&uuml;kleme işlemi ger&ccedil;ekleşir.</p>\r\n\r\n<p><img alt=\"\" src=\"https://3.bp.blogspot.com/-yH1Ls-0S1sU/W3hsj-cKo7I/AAAAAAAAAGY/x547A9FNoMQf1XBVBk6Q4TjU6dle_ordQCLcBGAs/s640/python_windows7_8.PNG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"D:\\Python\\python kurulum\\1.JPG\" />&nbsp;Kurulumumuz başarılı bir şekilde ger&ccedil;ekleşmiştir.Close butonu ile kapatabiliriz.</p>\r\n', '2021-01-31 12:00:50', 0, '15', '', '<p><img alt=\"\" src=\"C:\\xampp\\xamp\\htdocs\\busra\\images\\5.jpg\" style=\"float:left\" />Python ile yazılım geliştirmek i&ccedil;in bir&ccedil;ok ara&ccedil; vardır.Bunlar Anaconda, Spyder, orange, jupyter notebook, visual studio code ve pycharmdır.</p>\r\n\r\n<p>Python&#39;un kendi geliştirme ortamıda vardır.Ama pycharm vb. &nbsp;ara&ccedil;lar bize kod yazmada grafiksel aray&uuml;z sunmaktadır.O y&uuml;zden ilk başta python 3.9.1 &#39;i bilgisayarımıza indirip kurucaz.Daha sonra da python yazmak i&ccedil;in &ccedil;ok kullanılan pycharm kurulumu yapılacaktır.</p>\r\n'),
(11, '1600765259_932124103_images.png', 'PYTHON YORUMLARI', '<p>Python kodunu a&ccedil;ıklamak i&ccedil;in ,kodu daha okunaklı hale getirmek i&ccedil;in, kod test edilirken y&uuml;r&uuml;tmeyi &ouml;nlemek i&ccedil;in yorumlar kullanılabilir.</p>\r\n\r\n<h3>Yorum Oluşturma</h3>\r\n\r\n<pre>\r\n<code class=\"language-python\">#This is a comment\r\nprint(\"Hello, World!\")</code></pre>\r\n\r\n<p>Yorumlar bir satırın sonuna yerleştirilebilir</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">print(\"Hello, World!\") #This is a comment</code></pre>\r\n\r\n<h3>&Ccedil;ok Satırlı Yorumlar</h3>\r\n\r\n<p>&Ccedil;ok satırlı bir yorum eklemek&nbsp;<code>#</code>i&ccedil;in her satıra&nbsp;bir ekleyebilirsiniz&nbsp;:</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">#This is a comment\r\n#written in\r\n#more than just one line\r\nprint(\"Hello, World!\")</code></pre>\r\n\r\n<p>ya da</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">\"\"\"\r\nThis is a comment\r\nwritten in\r\nmore than just one line\r\n\"\"\"\r\nprint(\"Hello, World!\")</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-03-04 07:10:09', 0, '', '', '<p>Python kodunu a&ccedil;ıklamak i&ccedil;in yorumlar kullanılabilir.</p>\r\n\r\n<p>Kodu daha okunaklı hale getirmek i&ccedil;in yorumlar kullanılabilir.</p>\r\n\r\n<p>Kod test edilirken y&uuml;r&uuml;tmeyi &ouml;nlemek i&ccedil;in yorumlar kullanılabilir.</p>\r\n'),
(12, '1483170565_932124103_images.png', 'PYTHON DEĞİŞKENLER', '<p>Değişkenler, veri değerlerini depolamak i&ccedil;in kullanılan kaplardır.Python&#39;un bir değişken bildirmek i&ccedil;in bir komutu yoktur.Bir değişken, ona bir değer atadığınız anda oluşturulur.</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 5\r\ny = \"John\"\r\nprint(x)\r\nprint(y)</code></pre>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 4       # x is of type int\r\nx = \"Sally\" # x is now of type str\r\nprint(x)</code></pre>\r\n\r\n<p>Bir değişkenin veri tipini belirtmek istiyorsanız, bu &ccedil;evrim ile yapılabilir.</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = str(3)    # x will be \'3\'\r\ny = int(3)    # y will be 3\r\nz = float(3)  # z will be 3.0\r\n</code></pre>\r\n\r\n<p><code>type()</code>Fonksiyon&nbsp;ile bir değişkenin veri t&uuml;r&uuml;n&uuml; elde edebilirsiniz&nbsp;.</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 5\r\ny = \"John\"\r\nprint(type(x))\r\nprint(type(y))</code></pre>\r\n\r\n<h2>Değişken İsimler</h2>\r\n\r\n<p>&nbsp;Python değişkenleri i&ccedil;in kurallar:</p>\r\n\r\n<ul>\r\n	<li>Değişken adı bir harf veya alt &ccedil;izgi karakteri ile başlamalıdır</li>\r\n	<li>Bir değişken adı bir sayı ile başlayamaz</li>\r\n	<li>Bir değişken adı yalnızca alfa sayısal karakterler ve alt &ccedil;izgiler (Az, 0-9 ve _) i&ccedil;erebilir</li>\r\n	<li>Değişken adları b&uuml;y&uuml;k / k&uuml;&ccedil;&uuml;k harfe duyarlıdır (yaş, Yaş ve YAŞ &uuml;&ccedil; farklı değişkendir)</li>\r\n</ul>\r\n\r\n<pre>\r\n<code class=\"language-python\">myvar = \"John\"\r\nmy_var = \"John\"\r\n_my_var = \"John\"\r\nmyVar = \"John\"\r\nMYVAR = \"John\"\r\nmyvar2 = \"John\"</code></pre>\r\n\r\n<p>Ge&ccedil;ersiz değişken adları:</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">2myvar = \"John\"\r\nmy-var = \"John\"\r\nmy var = \"John\"</code></pre>\r\n\r\n<p>Değişken adlarının b&uuml;y&uuml;k / k&uuml;&ccedil;&uuml;k harfe duyarlı olduğunu unutmayın</p>\r\n\r\n<h2>Birden &Ccedil;ok Değişkene Bir&ccedil;ok Değer</h2>\r\n\r\n<p>Python, tek bir satırda birden &ccedil;ok değişkene değer atamanıza izin verir:</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x, y, z = \"Orange\", \"Banana\", \"Cherry\"\r\nprint(x)\r\nprint(y)\r\nprint(z)</code></pre>\r\n\r\n<p><strong>Not:</strong>&nbsp;Değişkenlerin sayısının değer sayısıyla eşleştiğinden emin olun, yoksa bir hata alırsınız.</p>\r\n\r\n<h2>Birden &Ccedil;ok Değişkene Bir Değer</h2>\r\n\r\n<p>Ve&nbsp;<em>aynı</em>&nbsp;değeri tek bir satırda birden &ccedil;ok değişkene&nbsp;atayabilirsiniz&nbsp;:</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = y = z = \"Orange\"\r\nprint(x)\r\nprint(y)\r\nprint(z)</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-03-04 07:20:25', 0, '', '', '<p>Değişkenler, veri değerlerini depolamak i&ccedil;in kullanılan kaplardır.Python&#39;un bir değişken bildirmek i&ccedil;in bir komutu yoktur.Bir değişken, ona bir değer atadığınız anda oluşturulur.</p>\r\n'),
(13, '239672371_932124103_images.png', 'PYTHON VERİ TÜRLERİ', '<p>&nbsp;Programlamada veri t&uuml;r&uuml; &ouml;nemli bir kavramdır.</p>\r\n\r\n<p>Değişkenler farklı t&uuml;rlerdeki verileri depolayabilir ve farklı t&uuml;rler farklı şeyler yapabilir.</p>\r\n\r\n<p>Python, aşağıdaki kategorilerde varsayılan olarak aşağıdaki veri t&uuml;rlerine sahiptir:</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:764.16px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top; width:160px\">Metin T&uuml;r&uuml;:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>str</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">Sayısal T&uuml;rler:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>int</code>,&nbsp;<code>float</code>,&nbsp;<code>complex</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">Sıra T&uuml;rleri:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>list</code>,&nbsp;<code>tuple</code>,&nbsp;<code>range</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">Eşleme T&uuml;r&uuml;:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>dict</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">Set T&uuml;rleri:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>set</code>,&nbsp;<code>frozenset</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">Boole T&uuml;r&uuml;:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>bool</code></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">İkili T&uuml;rler:</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\"><code>bytes</code>,&nbsp;<code>bytearray</code>,&nbsp;<code>memoryview</code></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Veri T&uuml;r&uuml;n&uuml; Alma</h2>\r\n\r\n<p><code>type()</code>Fonksiyonu&nbsp;kullanarak herhangi bir nesnenin veri t&uuml;r&uuml;n&uuml; elde edebilirsiniz&nbsp;:</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">x = 5\r\nprint(type(x))</code></pre>\r\n\r\n<h2>Veri T&uuml;r&uuml;n&uuml; Ayarlama</h2>\r\n\r\n<p>Python&#39;da, bir değişkene bir değer atadığınızda veri t&uuml;r&uuml; ayarlanır:</p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" style=\"border-collapse:collapse; width:764.16px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">Example</th>\r\n			<th style=\"text-align:left; vertical-align:top\">Data Type</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = &quot;Hello World&quot;</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">str</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = 20</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">int</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = 20.5</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">float</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = 1j</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">complex</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = [&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;]</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">list</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = (&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;)</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">tuple</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = range(6)</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">range</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = {&quot;name&quot; : &quot;John&quot;, &quot;age&quot; : 36}</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">dict</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = {&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;}</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">set</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = frozenset({&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;})</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">frozenset</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = True</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">bool</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = b&quot;Hello&quot;</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">bytes</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = bytearray(5)</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">bytearray</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">x = memoryview(bytes(5))</td>\r\n			<td style=\"background-color:#ffffff; text-align:left; vertical-align:top\">memoryview</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<h2>Belirli Veri T&uuml;r&uuml;n&uuml; Ayarlama</h2>\r\n\r\n<p>Veri t&uuml;r&uuml;n&uuml; belirtmek istiyorsanız, aşağıdaki yapıcı işlevlerini kullanabilirsiniz:</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Example</th>\r\n			<th>Data Type</th>\r\n		</tr>\r\n		<tr>\r\n			<td>x = str(&quot;Hello World&quot;)</td>\r\n			<td>str</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = int(20)</td>\r\n			<td>int</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = float(20.5)</td>\r\n			<td>float</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = complex(1j)</td>\r\n			<td>complex</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = list((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>\r\n			<td>list</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = tuple((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>\r\n			<td>tuple</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = range(6)</td>\r\n			<td>range</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = dict(name=&quot;John&quot;, age=36)</td>\r\n			<td>dict</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = set((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>\r\n			<td>set</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = frozenset((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>\r\n			<td>frozenset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = bool(5)</td>\r\n			<td>bool</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = bytes(5)</td>\r\n			<td>bytes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = bytearray(5)</td>\r\n			<td>bytearray</td>\r\n		</tr>\r\n		<tr>\r\n			<td>x = memoryview(bytes(5))</td>\r\n			<td>memoryview</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2021-03-04 08:42:48', 0, '', '', '<p>Programlamada veri t&uuml;r&uuml; &ouml;nemli bir kavramdır.</p>\r\n\r\n<p>Değişkenler farklı t&uuml;rlerdeki verileri depolayabilir ve farklı t&uuml;rler farklı şeyler yapabilir.</p>\r\n\r\n<p>Python, aşağıdaki kategorilerde varsayılan olarak aşağıdaki veri t&uuml;rlerine sahiptir:</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(14, '1935175601_239672371_932124103_images.png', 'PYTHON OPERATÖRLER', '<p>Pythonda operat&ouml;rler,aritmetik operat&ouml;rler,atama operat&ouml;rleri,karşılaştırma operat&ouml;rleri ve</p>\r\n\r\n<p>mantıksal operat&ouml;rler olmak &uuml;zere d&ouml;rde ayrılır.</p>\r\n\r\n<p><strong>Aritmetik Operat&ouml;rler: </strong>Matematiksel işlemler yapılırken kullanılan aritmetik operat&ouml;rler</p>\r\n\r\n<p>tablo-3&#39;de g&ouml;sterilmiştir.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>OPERAT&Ouml;R</td>\r\n			<td>İŞLEM</td>\r\n			<td>İŞLEM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>+</td>\r\n			<td>TOPLAMA</td>\r\n			<td>X+Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>-</td>\r\n			<td>&Ccedil;IKARMA</td>\r\n			<td>X-Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>*</td>\r\n			<td>&Ccedil;ARPMA</td>\r\n			<td>X*Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>/</td>\r\n			<td>B&Ouml;LME</td>\r\n			<td>X/Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>%</td>\r\n			<td>MOD ALMA</td>\r\n			<td>X%Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>//</td>\r\n			<td>TAM B&Ouml;LME</td>\r\n			<td>X//Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>**</td>\r\n			<td>&Uuml;S ALMA</td>\r\n			<td>X**Y</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<pre>\r\n<code>x=10\r\ny=20\r\ntoplam=x+y+5\r\ncikarma=x-y\r\nçarpma=x*y\r\nbölme=x/y\r\ntambölme=x//z\r\nüsalma=x**y\r\n</code></pre>\r\n\r\n<p><strong>Atama Operat&ouml;rleri:</strong>Değişkenlere veri ataması yapılırken kullanılır.Atama operat&ouml;rleri</p>\r\n\r\n<p>Tablo-4&#39;de g&ouml;sterilmiştir.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>OPERAT&Ouml;R</td>\r\n			<td>KISA KULLANIM</td>\r\n			<td>UZUN KULLANIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:36%\">\r\n			<p>X=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:38%\">\r\n			<p>X=Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>+=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X+=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X+Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>-=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X-=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X-Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>*=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X*=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X*Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>/=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X/=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X/Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>%=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X%=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X%Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>**=</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:36%\">\r\n			<p>X**=Y</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:38%\">\r\n			<p>X=X**2</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<pre>\r\n<code>X=20\r\nY=30\r\nX=Y\r\nprint(x,y)   #30,30\r\n</code></pre>\r\n\r\n<pre>\r\n<code>X=20\r\nY=30\r\nX+=Y\r\nprint(X,Y)   #50,30\r\n</code></pre>\r\n\r\n<pre>\r\n<code>x,y,z=2,5,10\r\na=int(input(\'sayi1\'))\r\nb=int(input(\'sayi2\'))   #dışardan iki adet sayı alınır\r\nsonuc=(a*b)-(x+y+z)\r\n</code></pre>\r\n\r\n<p><strong>Karşılaştırma Operat&ouml;rleri:</strong>Değişkenlerin aldığı değerlerin karşılaştırmalarını yapmak i&ccedil;in</p>\r\n\r\n<p>kullanırız.Karşılaştırma operat&ouml;rleri bize boolean tipinde veri g&ouml;ndeririler.Karşılaştırma</p>\r\n\r\n<p>Operat&ouml;rleri Tablo-5&#39;de g&ouml;sterilmiştir.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:25%\">\r\n			<p>OPERAT&Ouml;R</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:25%\">\r\n			<p>A&Ccedil;IKLAMA</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:25%\">\r\n			<p>KULLANIM</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:25%\">\r\n			<p>SONU&Ccedil;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>==</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>Eşit mi?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>10==10</p>\r\n\r\n			<p>10==5</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n\r\n			<p>FALSE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>!=</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>Eşit değil mi?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>14!=5</p>\r\n\r\n			<p>14!=14</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n\r\n			<p>FALSE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>&gt;</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>B&uuml;y&uuml;k m&uuml;?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>10&gt;5</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>&lt;</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>K&uuml;&ccedil;&uuml;k m&uuml;?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>5&lt;10</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>&lt;=</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>K&uuml;&ccedil;&uuml;k eşit mi?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>5&lt;=5</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>&gt;=</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>B&uuml;y&uuml;k eşit mi?</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>5&gt;=5</p>\r\n			</td>\r\n			<td style=\"border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:none; vertical-align:top; width:25%\">\r\n			<p>TRUE</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<pre>\r\n<code>sayi=int(input(\'sayi:\'))\r\npozitifmi=(sayi&gt;0)\r\nprint(f \'girilen sayının pozitif ola durumu: {pozitifmi}\')\r\n</code></pre>\r\n\r\n<pre>\r\n<code>sayi=int(input(\'sayi:\'))\r\ntekcift=(sayi %2==0)\r\nprint(f \'girilen sayının çift olma durumu: {tekcift}\')\r\n</code></pre>\r\n\r\n<pre>\r\n<code>yas=18\r\nmezun=\'lise\'\r\nsonuc=(yas&gt;=18) and (mezun==\'lise\')\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-04-18 06:45:25', 0, '', '', '<p>Pythonda operat&ouml;rler,aritmetik operat&ouml;rler,atama operat&ouml;rleri,karşılaştırma operat&ouml;rleri ve</p>\r\n\r\n<p>mantıksal operat&ouml;rler olmak &uuml;zere d&ouml;rde ayrılır.</p>\r\n\r\n<p><strong>Aritmetik Operat&ouml;rler: </strong>Matematiksel işlemler yapılırken kullanılan aritmetik operat&ouml;rler</p>\r\n\r\n<p>tablo-3&#39;de g&ouml;sterilmiştir.</p>\r\n'),
(15, '710038457_239672371_932124103_images.png', 'PYTHON KOŞUL İFADELERİ', '<p>&nbsp;Koşullu durumlardan elde ettiğimiz true ya da false değere g&ouml;re programın farklı y&ouml;nlerde</p>\r\n\r\n<p>ilerlemesini sağlarız.</p>\r\n\r\n<p><strong>IF BLOĞU</strong></p>\r\n\r\n<p>S&ouml;zdizimi&nbsp; :</p>\r\n\r\n<p>if test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement(s)</p>\r\n\r\n<p>test expression :</p>\r\n\r\n<pre>\r\n<code>a=10\r\nb=20\r\nif b&gt;a\r\n    print(\"b,a\'dan büyüktür.\")\r\n</code></pre>\r\n\r\n<pre>\r\n<code>sayi=3\r\nif sayi&gt;0:\r\n     print(num,\"positifdir\")\r\nprint(\"bu kısım hep yazdırılır.if bloğu dışındadır.)\r\nsayi=-3\r\nif sayi&lt;0:\r\n     print(num,\"negatifdir\")\r\nprint(\"bu kısım hep yazdırılır.if bloğu dışındadır.)\r\n</code></pre>\r\n\r\n<p><strong>ELİF BLOĞU</strong></p>\r\n\r\n<p><strong>S&ouml;zdizimi:</strong></p>\r\n\r\n<p>if test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; body of if(if g&ouml;vdesi)</p>\r\n\r\n<p>elif test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; body of elif(elif g&ouml;vdesi)</p>\r\n\r\n<pre>\r\n<code>a=10\r\nb=10\r\nif b&gt;a\r\n     print(\"b,a\'dan büyüktür.\")\r\nelif a==b:\r\n     print(\" a ile b eşittir.\")\r\nelif a&gt;b:\r\n     print(\"a ,b \'den büyüktür.\")\r\n</code></pre>\r\n\r\n<p><strong>ELSE BLOĞU</strong></p>\r\n\r\n<p>Else ve elif bloklarındaki koşullardan her hangi biri true değilse else bloğu &ccedil;alıştırılır.</p>\r\n\r\n<p>S&ouml;zdizimi:</p>\r\n\r\n<p>if test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; body of if(if g&ouml;vdesi)</p>\r\n\r\n<p>elif test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; body of elif(elif g&ouml;vdesi)</p>\r\n\r\n<p>else:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; body of else</p>\r\n\r\n<pre>\r\n<code>a=15\r\nb=10\r\nif b&gt;a\r\n     print(\"b,a\'dan büyüktür.\")\r\nelif a==b:\r\n     print(\" a ile b eşittir.\")\r\nelse:\r\n     print(\"a ,b \'den büyüktür.\")\r\n</code></pre>\r\n\r\n<pre>\r\n<code>sayi=int(input(\'sayi:\'))\r\nif sayi&gt;0:\r\n   print(\'pozitif\')\r\nelif sayi&lt;0:\r\n   print(\'negatif\')\r\nelse:\r\n   print(\'sayi sıfır\')\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-04-18 07:03:04', 0, '', '', '<p>Koşullu durumlardan elde ettiğimiz true ya da false değere g&ouml;re programın farklı y&ouml;nlerde</p>\r\n\r\n<p>ilerlemesini sağlarız.</p>\r\n\r\n<p><strong>IF BLOĞU</strong></p>\r\n\r\n<p>S&ouml;zdizimi&nbsp; :</p>\r\n\r\n<p>if test expression:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement(s)</p>\r\n\r\n<p>test expression :</p>\r\n'),
(16, '738166333_239672371_932124103_images.png', 'PYTHON DÖNGÜLER', '<p>Pythonda kullanabileceğimiz 2 tane d&ouml;ng&uuml; tipi vardır.Bunlar;for ve while d&ouml;ng&uuml;leridir.</p>\r\n\r\n<p><strong>Pythonda For D&ouml;ng&uuml;leri</strong></p>\r\n\r\n<p>For d&ouml;ng&uuml;lerini bir eleman grubundaki her bir elemana ulaşmak i&ccedil;in kullanırız.</p>\r\n\r\n<p><strong>Python List</strong></p>\r\n\r\n<p>Python list verileri &uuml;zerinde for d&ouml;ng&uuml;s&uuml; ile her bir elemana ulaşabiliriz</p>\r\n\r\n<pre>\r\n<code>sayilar=[1,2,3,4,5]\r\nfor sayi in sayilar:\r\nprint(sayi) #1 2 3 4 5\r\n</code></pre>\r\n\r\n<pre>\r\n<code>isimler=[\'demet\',\'sena\',\'nejla\']\r\nfor isim in isimler:\r\nprint(f\'my name is {isim}\')\r\n</code></pre>\r\n\r\n<p><strong>EKRAN &Ccedil;IKTISI</strong></p>\r\n\r\n<p>my name is {demet}</p>\r\n\r\n<p>my name is {sena}</p>\r\n\r\n<p>my name is {nejla}</p>\r\n\r\n<pre>\r\n<code>tuple=[(1,2),(1,3)]\r\nfor a,b in tuple:\r\nprint(a,b)\r\n</code></pre>\r\n\r\n<pre>\r\n<code>name=\'demet\'\r\nfor n in name:\r\nprint(n)\r\n</code></pre>\r\n\r\n<p><strong>Break Deyimi</strong></p>\r\n\r\n<p>T&uuml;m &ouml;ğeler arasında d&ouml;ng&uuml; oluşturmadan &ouml;nce d&ouml;ng&uuml;y&uuml; durdurabiliriz.</p>\r\n\r\n<pre>\r\n<code>fruit=[\"apple\",\"banana\",\"cherry\"]\r\nfor x in fruits:\r\n  if x==\"banana\":\r\n       break  #i değeri 3 olunca döngüden çık\r\nprint(x)\r\n</code></pre>\r\n\r\n<p><strong>Continue Deyimi</strong></p>\r\n\r\n<p>D&ouml;ng&uuml;deki mevcut yinelemeyi durdurabilir ve bir sonraki ile devam edebiliriz.</p>\r\n\r\n<pre>\r\n<code>fruit=[\"apple\",\"banana\",\"cherry\"]\r\nfor x in fruits:\r\n  if x==\"banana\":\r\n       continue   #banana yazdırmaz\r\nprint(x)\r\n</code></pre>\r\n\r\n<p><strong>While D&ouml;ng&uuml;s&uuml;</strong></p>\r\n\r\n<p>While d&ouml;ng&uuml;s&uuml; ile, bir koşul doğru olduğu s&uuml;rece bir dizi ifadeyi &ccedil;alıştırabiliriz.</p>\r\n\r\n<pre>\r\n<code>i=1	\r\nwhile i&lt;6:  #i 6dan küçük olduğu sürece döngü çalışır.\r\n   print(i)\r\n   i+=1\r\n</code></pre>\r\n\r\n<pre>\r\n<code>i=1\r\nwhile i&lt;6:  #i 6dan küçük olduğu sürece döngü çalışır.\r\n   print(i)\r\n   if i==3:\r\n        break  #i=3 olunca döngüden çık\r\n   i+=1\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-04-18 07:10:54', 0, '', '', '<p>Pythonda kullanabileceğimiz 2 tane d&ouml;ng&uuml; tipi vardır.Bunlar;for ve while d&ouml;ng&uuml;leridir.</p>\r\n\r\n<p><strong>Pythonda For D&ouml;ng&uuml;leri</strong></p>\r\n\r\n<p>For d&ouml;ng&uuml;lerini bir eleman grubundaki her bir elemana ulaşmak i&ccedil;in kullanırız.</p>\r\n\r\n<p><strong>Python List</strong></p>\r\n\r\n<p>Python list verileri &uuml;zerinde for d&ouml;ng&uuml;s&uuml; ile her bir elemana ulaşabiliriz</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `id` int(11) NOT NULL,
  `adi` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesaj` varchar(500) NOT NULL,
  `onay` tinyint(1) NOT NULL,
  `yazi_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp(),
  `cevap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`id`, `adi`, `email`, `mesaj`, `onay`, `yazi_id`, `tarih`, `cevap`) VALUES
(18, 'DEMET', 'demetduz2696@gmail.com', 'deneme', 0, 1, '2021-05-10 15:14:32', '\r\n              ?>cevap deneme'),
(19, 'DEMET', 'DEMET', 'ADMİNE MESAJ', 0, 11, '2021-06-18 21:37:58', 'ADMİN CEVAP DENEME MESAJI'),
(20, 'DEMET', 'DEMET', 'ADMİN CEVAP DENEME MESAJI', 0, 11, '2021-06-18 21:38:25', '\r\n              ?>xxxxxxxxx');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`yazi_id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `yazi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
