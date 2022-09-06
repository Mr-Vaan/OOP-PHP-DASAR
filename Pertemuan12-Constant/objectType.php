<?php
// CARA MEMBUAT OBJECT TYPE
// Object Type
// Tipe Data pada PHP -> Tipe data Primitif: integer,string,booleean, Dan juga ada Tipe Bentukan Seperti : Array
//
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
  // __construct ->  adalah Method khusus yang akan dijalankansecara otomatis
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

class CetakInfoProduk {
  public function cetak( Produk $produk ){ // Produk $produk -> adalah contoh kita bisa membuat Objek sebagai Tipe Datanya sendiri. Produk -> Jenis, $produk -> objeck.
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; // $str adalah fungsi string. {} -> adalah buat penggabungan string.
    return $str;
  }
}

// object buat komik
$produk1 = new Produk("Naruto", "Musashi Namoto", "Shonen Jutsuu", 100000, "Male"); // Object = $produk3 , property = judul = "Naruto"
// objek buat game
$produk2 = new Produk("The Warriors", "Syin Long", "Ling ling Sue", 250000, "Female");
echo " Komik : " . $produk1 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan
echo "<hr>"; // <hr> adalah untuk menggariskan
echo "Buku : " . $produk2 -> getLabel(); // tanda titik (.) adalah untuk menggabungkan
echo "<hr>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1 ); // cetak -> untuk mengambil method pada class CetakInfoProduk ->  public function cetak( Produk $produk ); 
// $produk1 -> adalah parameter.















?>