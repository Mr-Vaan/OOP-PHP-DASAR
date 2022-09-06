<?php
// CARA MEMBUAT PROPERTY DAN VARIABEL
// Jualan Produk
// Buku
// Game

// Visibility
class Produk {
   public $judul = "judul", // public -> sebagai visibilitynya
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0,
          $manusia = "Human";

  // Membuat Method
  // public function sayHello() {
  //   return "Hello World";
  // }
  public function getLabel() { // function getLabel() adalah untuk menambahkan label
     return "$this->penulis,$this->penerbit,$this->harga,$this->manusia";// $this -> variabel scope
    // $this untuk mengambil isi dari property yang ada di dalam kelas yang bersangkutan, ketika dibuat instanse nya.
  }
}

// $produk1 = new Produk();
// $produk1 -> judul = "Hokage";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> juduul = "Hacker One";
// $produk2 -> tambahProperty = "Testing";
// var_dump($produk2);

// object buat komik
$produk3 = new Produk(); // Object = $produk3 , property = judul = "Naruto";
$produk3 -> judul = "Naruto"; // judul yang berada di dalam class ditimpa dengan judul = Naruto
$produk3 -> penulis = "Musashi Namoto";
$produk3 -> penerbit = "Shonen Jutsuu";
$produk3 -> harga = 100000;
$produk3 -> manusia = "Female";

// objek buat game
$produk4 = new Produk();
$produk4 -> judul = "The Warriors";
$produk4 -> penulis = "Syin Long";
$produk4 -> penerbit = "Ling Ju";
$produk4 -> harga = 250000;
$produk4 -> manusia = "Male";

echo " Komik : " . $produk3 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan

echo "<hr>"; // <hr> adalah untuk menggariskan

echo "Game : " . $produk4 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan




















?>