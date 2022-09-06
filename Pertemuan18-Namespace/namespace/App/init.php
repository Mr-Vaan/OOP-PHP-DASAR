<?php
// require_once 'file'; // -> Pembuatannya
// require_once 'Produk/InfoProduk.php';  // -> Ini Interfacenya
// require_once 'Produk/Produk.php'; // -> Ini Abstract Classnya
// require_once 'Produk/Komik.php'; // -> Ini Class turunannya
// require_once 'Produk/Game.php'; // -> Ini Class Turunannya
// require_once 'Produk/CetakInfoProduk.php'; // -> Ini Class Turunannya
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// spl_ ini adalah Standar Php Library 
//
// function autoload( $class ) {
//}
// spl_autoload_register(autoload());

// Menggunakan closure / fungsi tanpa nama
// FOLDER PRODUK :
spl_autoload_register(function( $class  ){ // -> parameter $class
    // App\Produk\User , hasil explode = ["App", "Produk", "User"];
    // Kalo gaada (namespacenya), -> Game = ["Game];
    $class = explode('\\', $class); // fungsi explode() -> untuk memecah sebuah string berdasarkan pemisah tertentu. $class dianggapnya adalah string 
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php'; // -> memanggil class, '.php' -> adalah extension
});

// FOLDER SERVICE :
spl_autoload_register(function( $class  ){ // -> parameter $class
    // App\Produk\User , hasil explode = ["App", "Produk", "User"];
    // Kalo gaada (namespacenya), -> Game = ["Game];
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php'; // -> memanggil class, '.php' -> adalah extension
});
?>