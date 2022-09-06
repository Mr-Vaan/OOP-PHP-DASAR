<!-- 
    Definisi 1 :
    1. Interface ini merupakan Kelas Abstrak yang sama sekali tidak memiliki implementasi.
    2. Murni merupakan template untuk kelas turunannya.
    3. Tidak Boleh Memiliki property, hanya deklarasi method saja.

  Cara menggunakan interface :
  interface Buah {
    public function makan();
    public function setWarna($warna);
  }

  Definisi 2 :
  1. Dengan menggunakan type-hinting dapat melakukan 'Depedency Injection'.
  2. Pada akhirnya akan mencapai Polymorphism.
  3.
 -->
<?php

interface Buah {
  public function makan();

  public function setWarna($warna);
}

interface Benda {
  public function setUkuran($ukuran);
}

// misalnya saya mau membuat (class Apel) ini menjadi implementasi dari (interface Buah), maka saya tambahkan keyword (implements),
// bukan extends lagi, tapi implements. karena dia mengimplementasikan class (interface Buah), dan didalamnya harus ada implementasi dari dua
// method yang ada di dalam (interface), kalau di interfacenya ada tiga, maka harus ada tiga yang menjadi implementasi dari kelas interfacenya. Lebih boleh
// misalkan di class Apel ini ada 4 method gapapa, tapi minimal semua method yang di deklarasikan di kelas interface itu udah ada, dan sekarang propertynya pindah ke class ini(class Apel),
// karena gaboleh di kelas interface ada property. ya jadi dengan menambahkan keyword 'implements'.
// Begitu pula dengan (Class Jeruk).
class Apel implements Buah, Benda {
  protected $warna;
  protected $ukuran;
  public function makan() {
    // kunyah
    // sampai bagian tengah
  }

  public function setWarna ($warna) {
    $this->warna = $warna;
  }

  public function setUkuran ($ukuran) {
    $this->ukuran = $ukuran;
  }
}

class Jeruk implements Buah { 
  protected $warna;
  public function makan() {
    // kupas
    // kunyah
  }

  public function setWarna ($warna) {
    $this->warna = $warna;
  }
}
?>