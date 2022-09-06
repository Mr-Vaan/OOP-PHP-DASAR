<?php
class CetakInfoProduk {
    public $daftarProduk = array();
  
    public function tambahProduk( Produk $produk) {
      $this->daftarProduk[] = $produk;
    }
  
    public function cetak(){ // Produk $produk -> adalah contoh kita bisa membuat Objek sebagai Tipe Datanya sendiri.
      $str = "DAFTAR PRODUK : <br>"; // $str adalah fungsi string. {} -> adalah buat penggabungan string.
      
      foreach( $this->daftarProduk as $p) {
        $str .= "- {$p->getInfoProduk()} <br>";
      }
      
      
      return $str;
    }
  }
  
?>