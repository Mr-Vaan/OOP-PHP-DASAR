<?php 
// Contoh Memakai -> define
// define (name, value) {  
// }
// ------------------------- Cara PERTAMA ---------------------
// Constant menggunakan define
// define('NAMA', 'Ivan Chriana', ); // 'NAMA' -> Ini adalah constanta, 'Ivan Chriana' -> Ini adalah nilainya.
// echo NAMA;
// define -> Tidak bisa kita simpan ke dalam sebuah class, jadi define ini harus berada di luar class sebagai constanta global.
// ------------------------------------------------------------
// echo "<hr>";
// ------------------------- Cara KEDUA -----------------------
// Constant  menggunakan const
// const UMUR = 19;
// echo UMUR;
// const -> Ini bisa kita masukkan ke dalam class, sehingga bisa kita gunakan didalam konsep OOP. 
// -------------------------------------------------------------
// gabung dengn static
class Coba {
  const NAMA = 'Muhammad Ivan Chriana';
}

echo Coba::NAMA;
// -------------------------------------------------------------
// MAGIC CONSTANT
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__
// 







?>