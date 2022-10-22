# web-tabanli--python-ogretici
Web Tabanlı Öğretici Arayüz Tasarımı
Bu bölümde yapılan web tabanlı Python öğreticisinin arayüzü tasarımı için kaynaklar sağlanmıştır.Web tasarımda renk kullanımı, ziyaretçilere iyi bir kullanıcı deneyimi sunmak ve mesajı doğru bir biçimde iletmek için çok önemlidir. Bu nedenle web tasarımcılar da çalışmalarında renkleri en etkili şekilde kullanmaya çalışır. Bir web sitesinde 3’den fazla çeşit renk kullanmak kullanıcılarda göz yorgunluğuna ve kullanıcıların sayfadan çıkmasına neden olur.Seçilen renklerin birbirine uyumlu ve renk seçimleri sayfanın içeriğine uygun olmalıdır.

Web sitesinin düzeni, web sitesinin genel görünümünü gösterdiği için sade ve genel kullanıcı alışkanlıklarına uyumlu olmalıdır. Web arayüz tasarımı, gezinme, görseller ve diğer öğelerin sayfada nasıl yerleşeceğini belirlemektedir. Bu öğelerin her sayfada benzer şekilde konumlanması, ziyaretçilerin web sitesini kullanmasını kolaylaştıracak ve içeriğe odaklanmalarını sağlayacaktır.Ara yüzde sade bir tasarım ve düzen ile kullanıcının neyin nerde olduğunu anlaması sağlanmalıdır[4].
Öğreticinin arayüz tasarımı Adobe XD ile hazırlanmıştır. Kullanıcı alışkanlıklarına göre ve sade bir şekilde kullanıcının gözünü yormayacak bir tasarım yapılmıştır.Web tabanlı Python öğreticisi için arayüz tasarımı yapılmış ve şekil-16’da gösterilmiştir.

Pencerenin Sol tarafında bulunan menü, Python konu başlıklarını içerir. Sağ tarafta içeriğimiz bulunur. Menünün başında search bulunur. Menünün sonunda ise sosyal medya bağlantılarımız vardır.Pencerenin sağ üstünde logomuz bulunacaktır. En altta ise yorumlar kısmı bulunmaktadır.
<img src="Görünüm/Anasayfa.JPG"; 

Şekil-16.Anasayfa arayüz tasarımı görünümü.

İletişim sayfası şekil-17’de gösterilmiştir. Bu iletişim sayfası sayesinde iletişim kurulacak kullanıcının ad, soyad, e-posta, ilgili konu ve mesaj bilgilerini içermektedir. Kullanıcı her türlü soru ve önerilerini bu sayfa yardımıyla Admin’e ulaşabilmekte ve bilgilendirebilmektedir.

 

Şekil-17.İletişim sayfa görünümü.

6. Admin Arayüzü
Admin sayfasının ara yüzeyi şekil-18’degösterilmiştir.Ara yüzün sol üst tarafta admin logosu ve altında menü çubuğu yer alır. Sağ tarafta işlemlerin gerçekleştirilmesini sağlayan sayfayı içerir. Genel ayarlar kısmında sitenin başlığı, url vb. bilgiler güncellenebilecektir. 

 
                                     Şekil-18. Adminarayüz tasarım görünümü.
Sosyal medya kısmında sosyal medya bilgileri yani facebook,instagram ve youtube adresleri  güncellenebilecektir. Şekil-19’da gösterilmiştir.

 
                                  Şekil-19.Sosyal Medya düzenleme sayfası.

Logo düzenle sayfası şekil-20'de gösterilmiştir. Bu sayfa yardımıyla hazırlamış olduğumuz logomuzu ekleyebilir, güncelleyebilir veya istediğimiz klasörden logo ekleme işlemi yapabiliriz.

 
Şekil-20. Logo düzenleme sayfası.

Yazı ekleme sayfası şekil-21’de gösterilmiştir. Bu sayfada yazılarımızı ID ,yazıldığı tarih, yazı fotoğrafı ve başlık bilgilerini veri tabanından çekerek listeleriz. Sağ tarafta bulunan düzenle butonu ile yazımızı güncelleyebilir, sil butonu ile ise kolaylıkla silebiliriz. Sol üst kısımda bulunan yazı ekle butonu ile sitemize yeni yazılar ekleyebiliriz.

 
                                                 Şekil-21.Yazı Listeleme sayfa görünümü.

Admin arayüzü için Editör kurulumu yapılacaktır.CKEditör dinamik içerikli web sitelerine yazı eklemek istediğimiz an, yönetim panelinde kullanabileceğimiz, gördüğünüzün aynısını çıktı olarak alabileceğiniz bir editör. Yazıları düzenle butonu ile karşımıza çıkan sayfa da CKEditör kullanımı şekil-22’de gösterilmiştir. Bu sayfada yazılarımızın fotoğrafını, başlığını, içerik ve ön içeriklerini güncelleme işlemini gerçekleştiririz.

 

Şekil-22.Yazı düzenle pencere görünümü.


Şekil-21'de yazılar pencere görünümünde yazı ekle butonuna basarsak karşımıza şekil-23’deki ekranla karşılaşırız. Bu ekranda fotoğraf, başlık ve içerik bilgilerini girip ekle butonuna basarsak yeni yazımızı sitemize eklemiş oluruz.



 

Şekil-23.Yazı Ekle pencere görünümü.


Menü kısmındaki mesajlar bölümünde ise şekil-24' de gelen mesajlar bir tabloda id,geldiği tarih,konu,gönderen isim, açıklama olarak listelenmektedir.Sol tarafta bulunan görüntüle butonu ile mesajları görüntüleyebilir,sil butonu ile de silebiliriz.

 

                               Şekil-24.Mesaj listeleme sayfa görünümü.


Şekil_24'de görüntüle butonuna basarsak karşımıza Şekil-25'teki pencere görünümü çıkacaktır.Bu ekranda mesaj gönderen isim ,gönderen mail ,konu,tarih ve içerik kısmı ile görüntülenecektir.


 

	Şekil-25.Mesaj görüntüleme sayfa görünümü.

Menüde bulunan yorumlar kısmı şekil 26'da gösterilmiştir.Bu kısımda gelen yorumlar id,tarih,konu,gönderen isim olarak listelenmektedir. Cevapla butonu ile yorumları cevaplar, sil butonu ile de silme işlemini gerçekleştiririz.

 
                               Şekil_26.Yorum listeleme sayfa görünümü.

Cevapla butonuna basarsak karşımıza şekil 27'deki ekran çıkar.ve yorumları cevap kısmına gerekli bilgileri yazarak cevaplarız.

 
                                     Şekil-27.Yorum cevapla sayfa görünümü.

Yönetici panelinde yorum sayısı,içerik sayısı ve mesaj sayısı gösterilir.Logout bağlantısı ile adminden çıkış yapılır.Yönetici paneli şekil 28'de gösterilmiştir.

 

                                           Şekil-28.Yönetici paneli sayfa görünümü.


Şekil 29'da login sayfası gösterilmiştir.Bu sayfada kullanıcı adı ve şifre ile admin sayfasına giriş yapabiliriz.


 
                                              Şekil-29.Login sayfa görünümü.



