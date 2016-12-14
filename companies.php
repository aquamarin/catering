<?php
// BAĞLANTI İŞLEMLERİNİ İÇEREN DOSYAYI ÇAĞIRALIM
require_once "connection.php";
// GETten ID'yi integer olarak alalım
$companyID = (int)$_GET['id'];
// sorguyu gönderelim
$companyQuery = mysql_query("SELECT * FROM companies WHERE id = $companyID");
// sorgu ile oluşan kaynağı dizi olarak alalım
$company = mysql_fetch_array($companyQuery, MYSQL_ASSOC);
// kaynaktan dizi alamadıysak (öğrenci yoksa) ana sayfaya yönlendirelim
if( ! $company) header("Location: index.php");
?>
<meta charset="utf-8">
<?=$company['name']?> <?=$company['about_us']?>
 <?=$company['image']?><br>
<a href="<?=$company['site']?>"></a><br>

<!--<a href="index.php">Listeye Geri Dön</a>-->