<?php
// CARA MEMBUAT OBJECT TYPE
// Object Type
// Tipe Data pada PHP -> Tipe data Primitif: integer,string,booleean, Dan juga ada Tipe Bentukan Seperti : Array
//
// Jualan Produk
// Buku
// Game

// --------------------------------- Start Class Produk ------------------------
// Visibility
// protected
// private
class Produk {
  public $judul,   
         $penulis,
         $penerbit;

  protected $diskon = 0;
  
  private $harga;


  // MAGIC METHOD :
  // __construct ->  adalah Method khusus yang akan dijalankansecara otomatis
  // __destruct ->

  public function __construct ( $judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0 ) {
    $this -> judul = $judul;
    $this -> penulis = $penulis;
    $this -> penerbit = $penerbit;
    $this -> harga = $harga;
  }
  // Membuat Method
  // public function sayHello() {
  //   return "Hello World";
  // }

  public function getHarga () {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
  }


  public function getLabel() { // function getLabel() adalah untuk menambahkan label.
    return "$this->penulis, $this->penerbit"; // $this -> variabel scope
    // $this untuk mengambil isi dari property yang ada di dalam kelas yang bersangkutan, ketika dibuat instanse nya.
  }

  public function getInfoProduk() {
    // Untuk Komik :
    // Komik : Naruto | Musashi Namoto, Shonen Jutsuu, (Rp. 100000) - 100 Halaman
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}
// ------------------------------ Akhir Class Produk --------------------------------

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0, $jmlHalaman = 0 ) {

    parent::__construct( $judul, $penulis, $penerbit, $harga );

    $this-> jmlHalaman = $jmlHalaman;

  }

  public function getInfoProduk() {
    
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0, $waktuMain = 0 ) {
      
      parent::__construct( $judul, $penulis, $penerbit, $harga );

      $this-> waktuMain = $waktuMain;

    }

    public function setDiskon( $diskon ) {
      $this->diskon = $diskon;
  
    }

  public function getInfoProduk() {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}


class CetakInfoProduk {
  public function cetak( Produk $produk ){ // Produk $produk -> adalah contoh kita bisa membuat Objek sebagai Tipe Datanya sendiri.
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; // $str adalah fungsi string. {} -> adalah buat penggabungan string.
    return $str;
  }
}

// object buat komik
$produk1 = new Komik("Naruto", "Musashi Namoto", "Shonen Jutsuu", 100000, 100); // Object = $produk3 , property = judul = "Naruto"
// objek buat game
$produk2 = new Game("The Warriors", "Syin Long", "Ling ling Sue", 250000, 50);


echo $produk1->getInfoProduk(); 
echo "<hr>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50); 

echo $produk2->getHarga();


// Komik : Musashi Namoto, Shonen Jutsuu, Male
// Buku : Syin Long, Ling ling Sue, Female
// Naruto | Musashi Namoto, Shonen Jutsuu, Male (Rp. 100000)

// Komik : Naruto | Musashi Namoto, Shonen Jutsuu, (Rp. 100000) - 100 Halaman.
// Game : The Warriors | Syin Long, Ling ling Sue, (Rp. 250000) Female ~ 50 jam.  










?>