<?php
// Contoh Code Static Keyword
// class ContohStatic {
//   public static $angka = 1;

//   public static function test() {
//     return "Tes Static Keyword " . self::$angka++ .  " Testing.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<hr>";
// echo ContohStatic::test();
// echo "<hr>";
// echo ContohStatic::test();
// echo "<hr>";
// echo ContohStatic::test();
// echo "<hr>";
// echo ContohStatic::test();


class Contoh {
  public static $angka = 1;

  public function hallo() {
    return "Hallo! " . self::$angka++ . "Nama Kamu Siapa? <br>";
  }
}

$nama = new Contoh;
echo $nama -> hallo();
echo $nama -> hallo();
echo $nama -> hallo();
echo $nama -> hallo();

echo "<hr>";

$nama2 = new Contoh;
echo $nama2 -> hallo();
echo $nama2 -> hallo();
echo $nama2 -> hallo();
echo $nama2 -> hallo();











?>































