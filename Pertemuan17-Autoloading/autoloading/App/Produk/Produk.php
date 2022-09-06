<?php
Abstract class Produk {
    protected $judul,   
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
  
    // MAGIC METHOD :
    // __construct ->  adalah Method khusus yang akan dijalankansecara otomatis
    // __destruct ->
  
    public function __construct ( $judul = "judul", $penulis = "Ivan", $penerbit = "Gramedia", $harga = 0 ) {
      $this -> judul = $judul;
      $this -> penulis = $penulis;
      $this -> penerbit = $penerbit;
      $this -> harga = $harga;
    }
  
    public function setJudul( $judul ) {
      // Jika ingin judul hanya dengan string, tambahkan if dibawah ini:
      // if ( !is_string($judul)) {
      //   # code...
      //   throw new Exception("Judul Harus Berupa String");   
      // }
      $this -> judul = $judul;
    }
  
  
    public function getJudul() {
      return $this ->judul; 
    }
  
    public function setPenulis ( $penulis ) {
     $this -> penulis = $penulis;
    }
  
    public function getPenulis() {
      return $this -> penulis;
    }
  
    public function setPenerbit( $penerbit ) {
      $this -> penerbit = $penerbit;
    }
  
    public function getPenerbit() {
      return $this -> penerbit;
    }
  
    public function setDiskon( $diskon ) {
      $this->diskon = $diskon;
  
    }
  
    public function getDiskon() {
      return $this -> diskon;
    }
  
    public function setHarga ( $harga ) {
      $this -> harga = $harga;
    }
  
    public function getHarga () {
      return $this->harga - ( $this->harga * $this->diskon / 100 );
    }
  
  
    public function getLabel() { // function getLabel() adalah untuk menambahkan label.
      return "$this->penulis, $this->penerbit"; // $this -> variabel scope
      // $this untuk mengambil isi dari property yang ada di dalam kelas yang bersangkutan, ketika dibuat instanse nya.
    }
  
    abstract public function getInfo();
    
  }

?>