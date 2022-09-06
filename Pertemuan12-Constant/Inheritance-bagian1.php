<?php
// CARA MEMBUAT OBJECT TYPE
// Object Type
// Tipe Data pada PHP -> Tipe data Primitif: integer,string,booleean, Dan juga ada Tipe Bentukan Seperti : Array
//
// Jualan Produk
// Buku
// Game

// --------------------------------- Start Class ------------------------
// Visibility
class Produk {
  public $judul,  // 
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $waktuMain, 
         $tipe;


  // MAGIC METHOD :
  // __construct ->  adalah Method khusus yang akan dijalankansecara otomatis
  // __destruct ->

  public function __construct ($judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
    $this -> judul = $judul;
    $this -> penulis = $penulis;
    $this -> penerbit = $penerbit;
    $this -> harga = $harga;
    $this -> jmlHalaman = $jmlHalaman;
    $this -> waktuMain = $waktuMain;
    $this -> tipe = $tipe;
    // $this -> waktuMain (gapake dolar) masuknya ke (class Produk),sedangkan  $waktuMain masuknya ke (__construct).
  }
  // Membuat Method
  // public function sayHello() {
  //   return "Hello World";
  // }
  public function getLabel() { // function getLabel() adalah untuk menambahkan label.
    return "$this->penulis, $this->penerbit"; // $this -> variabel scope
    // $this untuk mengambil isi dari property yang ada di dalam kelas yang bersangkutan, ketika dibuat instanse nya.
  }

  public function getInfoLengkap() {
    // Komik : Naruto | Musashi Namoto, Shonen Jutsuu, (Rp. 100000) - 100 Halaman
    $str = " {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    // Memakai Pengkondisian/Pemilihan If else
    if ($this->tipe == "Komik") {
      # code...
    $str .= " - {$this->jmlHalaman} Halaman. "; // .= adalah Operator Concat. // {$this->waktuMain} merupakan waktu, {$this->jmlHalaman} merupakan halaman.
    } else if ( $this->tipe == "Game" ) {
      $str .= " ~ {$this->waktuMain} Jam."; // .= adalah Operator Concat. // {$this->waktuMain} merupakan waktu, {$this->jmlHalaman} merupakan halaman.
    }
    return $str;
  }
}
// ------------------------------ Akhir Class --------------------------------
// --------------------------------- Class Baru --------------------------------
class CetakInfoProduk {
  public function cetak( Produk $produk ){ // Produk $produk -> adalah contoh kita bisa membuat Objek sebagai Tipe Datanya sendiri.
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; // $str adalah fungsi string. {} -> adalah buat penggabungan string.
    return $str;
  }
}
// -------------------------------Akhir Class -----------------------------------------
// object buat komik :
$produk1 = new Produk("Naruto", "Musashi Namoto", "Shonen Jutsuu", 100000, 100, 0, "Komik"); // Object = $produk3 , property = judul = "Naruto"
// objek buat game :
$produk2 = new Produk("The Warriors", "Syin Long", "Ling ling Sue", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap(); 
echo "<hr>";
echo $produk2->getInfoLengkap();

// Komik : Musashi Namoto, Shonen Jutsuu, Male
// Buku : Syin Long, Ling ling Sue, Female
// Naruto | Musashi Namoto, Shonen Jutsuu, Male (Rp. 100000)

// Komik : Naruto | Musashi Namoto, Shonen Jutsuu, (Rp. 100000) - 100 Halaman.
// Game : The Warriors | Syin Long, Ling ling Sue, (Rp. 250000) Female ~ 50 jam.  










?>