<?php
// require_once 'file'; -> Pembuatannya
// require_once 'Produk/InfoProduk.php';  // -> Ini Interfacenya
// require_once 'Produk/Produk.php'; // -> Ini Abstract Classnya
// require_once 'Produk/Komik.php'; // -> Ini Class turunannya
// require_once 'Produk/Game.php'; // -> Ini Class Turunannya
// require_once 'Produk/CetakInfoProduk.php'; // -> Ini Class Turunannya

// spl_ ini adalah Standar Php Library 
//
// function autoload( $class ) {
//}
// spl_autoload_register(autoload());

// Menggunakan closure / fungsi tanpa nama
spl_autoload_register(function( $class  ){ // -> parameter $class
    require_once __DIR__ . '/Produk/' . $class . '.php'; // -> memanggil class, '.php' -> adalah extension
});

?>