<?php
// -------------------------------- Start Class Komik Child --------------------------
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;
  
    public function __construct( $judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0, $jmlHalaman = 0 ) {
  
      parent::__construct( $judul, $penulis, $penerbit, $harga );
  
      $this-> jmlHalaman = $jmlHalaman;
   
    }
  
    public function getInfo() {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
    }
  
    public function getInfoProduk() {
      
      $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
      return $str;
    }
  }
  // -------------------------------- Akhir Class Komik Child --------------------------

?>