<?php
// Veritabanı sunucusuna bağlanacağım
$connection = @mysql_connect("localhost", "root", "1234");
// Veritabanını seçeceğim
mysql_select_db("catering", $connection);

// utf8 karakter seti ile haberleşeceğimi belirteceğim
mysql_set_charset("utf8", $connection);
