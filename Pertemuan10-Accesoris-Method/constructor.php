<?php
// CARA MEMBUAT CONSTRUCTOR
// constructor ini merupakan sebuah method yang special atau method yang khusus yang ada di dalam sebuah kelas. karena constructor ini adalah method otomatis dijalankan ketika sebuah kelas di instansiasi.
// Jualan Produk
// Buku
// Game

// Visibility
class Produk {
  public $judul,  // 
         $penulis,
         $penerbit,
         $harga,
         $manusia;


  // MAGIC METHOD :
  // __construct ->  adalah Method khusus yang akan dijalankan secara otomatis, setiap kita membuat instant  dari sebah kelas.
  // __destruct ->

  public function __construct ($judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0, $manusia = "Human") {
    $this -> judul = $judul;
    $this -> penulis = $penulis;
    $this -> penerbit = $penerbit;
    $this -> harga = $harga;
    $this -> manusia = $manusia;
  }
  // Membuat Method
  // public function sayHello() {
  //   return "Hello World";
  // }
  public function getLabel() { // function getLabel() adalah untuk menambahkan label.
    return "$this->penulis, $this->penerbit, $this->manusia"; // $this -> variabel scope
    // $this untuk mengambil isi dari property yang ada di dalam kelas yang bersangkutan, ketika dibuat instanse nya.
  }
}


// object buat komik
$produk1 = new Produk("Naruto", "Musashi Namoto", "Shonen Jutsuu", 100000, "Male"); // Object = $produk3 , property = judul = "Naruto"

// objek buat game
$produk2 = new Produk("The Warriors", "Syin Long", "Ling ling Sue", 250000, "Female");

echo " Komik : " . $produk1 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan

echo "<hr>"; // <hr> adalah untuk menggariskan

echo "Buku : " . $produk2 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan




















?>