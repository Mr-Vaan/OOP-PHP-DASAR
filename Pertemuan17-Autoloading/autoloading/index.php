<?php

require_once 'App/init.php' ;

// object buat komik
$produk1 = new Komik("Naruto", "Musashi Namoto", "Shonen Jutsuu", 100000, 100); // Object = $produk3 , property = judul = "Naruto"
// objek buat game
$produk2 = new Game("The Warriors", "Syin Long", "Ling ling Sue", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

?>