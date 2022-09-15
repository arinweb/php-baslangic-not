# php notlarım

- Çarpım Tablosu
- Piyango

Temel Notlar

———————— 1.Konu ———————
Bir Değişken İçerisinde (+ - * / % . ,) 
Matematiksel İşaretler Kullanılamaz
ör => $sayi=+;

——————— 2.Konu ——————— 
Değişken Adı Sayı İle Başlayamaz
ör => $1sayi=5;

——————— 3.Konu ———————
Değişkenlerde Büyük Küçük Harf Farkeder
ör => $Murat ile $murat
2 Değişkeninde Baş Harf Boyutları Farklıdır
Yani 2 Farklı Değişken Elde Etmiş Oluruz

——————— 4.Konu ———————
Değişkenlerde Türkçe Karakter Desteği Yoktur
Desteği Olmayan Harfler => (ı,ü,ö,ç,ş,) => (İ,Ü,Ö,Ç,Ş)

——————— 5.Konu ———————
Matematik Dört İşlem

$num1 = 5;
$num2 = 10;

Toplama
$sonuc = $num1+$num2;

Çıkarma
$sonuc = $num1-$num2;

Çarpma
$sonuc = $num1*$num2;

Bölme
$sonuc = $num1/$num2;


{
$sayı = 10;

$sayı=$sayı+10;

$sayı+=10;
Bu İşem Dört İşlemdede Geçerlidir
}

——————— 6.Konu ———————
$i++
Görünmez Değer Arka Planda Artan Ancak Ekrana Yazdırılınca
Artış Farkını Göstermez Genelde Döngülerde Kullanılır

++$i
Görünür Değer Ekrana Yazdırılabilir Döngülerdede Kullanılabilir

——————— 7.Konu ———————
sqrt(16);
Parantez İçine Yazdığınız Değerin Karekök Değerini 4 olarak Verir

pow(5,2);
Bunun Açılımı 5 üslü 2 dir(5 * 5) yani Ekrana 25 Olarak Yazdırır

——————— 8.Konu ———————
$yazi = "Html Web Sayfalarının Temelini Oluşturur";

Bütün Harfleri Küçülten
strtolower($yazi);

Bütün Harfleri Büyülten
strtoupper($yazi);

Kelimelerin İlk Harflerini Büyütür
ucwords($yazi);

Metnin İlk Harfini Büyük Yapar
ucfirst($yazi);

Metindeki Karakter Sayısını Gösterir 
strlen($yazi); 

Türkçe Karakter Desteği Utf8 
strlen(utf8_decode($yazi)); 

$yazi Adlı Değikendeki Web Kelimesinin Sonrasını Yazdır
strstr($yazi,"Web");

Aranacak Kelime Html Kelimeyi Bulduysa Css Olarak Değiştir Metnin Bulunduğu Değişken $yazi
str_replace("Html","Css",$yazi);

$yazi değişkeninin İçindeki Metnin 10 uncu Karakterden 20 nci karakterine kadar yazdır
substr($yazi,10,20);

——————— 9.Konu ———————
Array = Dizi

$dizi=array("Murat","Yiğit",5,8,2);

$dizi Adlı Değişkendeki indis numarası 2 olan veriyi çeker
echo $dizi[2];

print_r($dizi);
<Ekran Çıktısı>
Array ([0] => Murat [1] => Yiğit [2] => 5 [3] => 6 [4] => 2)

$dizi değişkenindeki eleman sayısını alma 
count($dizi);

$dizi2=array(30,3,20,7,83,5);

Küçükten Büyüğe Sıralar
sort($dizi2);
<Ekran Çıktısı>
Array([0] => 3 [1] => 5 [2] => 7 [3] => 20 [4] => 30 [5] => 83)

Büyükten Küçüğe Sıralar
rsort($dizi2);
<Ekran Çıktısı>
Array([0] => 83 [1] => 30 [2] => 20 [3] => 7 [4] => 5 [5] => 3);

En Büyük Değeri Yazdırır
max($dizi2);

En Küçük Değeri Yazdırır
min($dizi2);

$dizi2 Degişkeninde 20 değerinde Eleman Bulunuyorsa Ekrana 1 yazdırır
in_array(20,$dizi2);

$dizi2 değişkeninin elemanlarını arasına + işareti gelcek şekildr yazdırı
implode("+",$dizi2);
<Ekran Çıktısı>
30+3+7+20+30+83

——————— 10.Konu ———————
Sabit Değişken
ad değişken ismi Değişkene Tanımlanan Metinde Murat Yiğit
define("ad","Murat Yiğit");
echo ad;

——————— 11.Konu ———————
Dosya Hakkında Bilgi Alma

Dosyanın Bulunduğu Konumu Alma
echo __FILE__;

Bu Kodu Hangi Satıra yazdıysanız kaçıncı satır olduğunu göstercektir
echo __LINE__;

Php nizin Sürümünü Gösterir
echo PHP_VERSION;

——————— 12.Konu ———————
Sayının Kalanını Alma
$sayi=50;

$sayi değişkeninde bulunan rakamı 2 ye böler ve kalanını gösterir
echo $sayi%2;
Bu yöntem İle Bir sayının tek yada çift olduğunu anlayabiliriz


——————— 13.Konu ———————
if - else if - else Koşulları

== Eşit ise
< Küçük İse
> Büyük İse
<= Küçük Yada Eşit ise
>= Büyük Yada Eşit ise
!= Eşit Değilse

and = ve
or = Veya (yada)

Örnek
$yazi1=20;
if($yazi1==20 and $yazi1 <= 50){
echo "Sayı 20 ye eşit ve 50 den küçük";
}
else if($yazi1==10 or $yazi1==5){
echo "$yazi1 değişkeni 10 a yada 5 e eşit";
}
else{
echo "Yanlış";
}


——————— 14.Konu ———————
Switch Case Default Koşulları

Örnek
$not = 3;
switch($not){
   case "3":
      echo "Takdir Aldınız";
   break;
   case "2":
      echo "Teşekkür Aldınız";
   break;
   case "3":
      echo "Teşşekür Yada Takdir Alamadınız Sınıfı Yatarak Geçtiniz";
   break;
   default:
      echo "Sınıfta Kaldınız";
   break;
}

——————— 15.Konu ———————
For Döngüsü

$i=0 => Başlangıç Değeri
$i > 8;Kontrol Noktası (şart) 
$i++ Artış Değeri (Bu Değer Arttırıladabilir Eksiltiledebilir) 

for($i=0;$i > 8;$i++){
   echo $i;
} 

——————— 16.Konu ———————
While Döngüsü

Örnek
$sayi = 1;
while($sayi <= 10){
   echo $sayi;
   $sayi++;
} 

——————— 16.Konu ———————
Sayı Random Atma
1 ila 10 arasında rastgele sayı göster
echo rand(1,10);

——————— 17.Konu ———————
Foreach Döngüsü

Foreach Döngüsü Sadece Dizeler İçin Geçerlidir

Örnek
$dizin=array("Murat","Yiğit","Yazılım","Öğreniyor");
foreach($dizin as $sayi => $deger){
   echo "$sayi <=> $deger";
}

——————— 18.Konu ———————
Do while

while parantez içindeki işleme uyan görev doğru sonuçlanınca stop eder
$sayi=1;
do{
   $sayi++;
}while($sayi != 5);{
   echo "Sayı $sayiDeğil";
   if($sayi==5){
      echo "$sayi Bulundu Kazandınız";
   }
}

