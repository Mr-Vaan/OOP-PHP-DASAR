
<!--
    Definisi 1 :

    1. Abstract kelas adalah sebuah kelas yang nantinya kita tidak dapat di instansiasi,jadi kita tidak bisa
    bikin objek dari kelas Abstract ini. Nah trus gimana dong supaya kita bisa instansiasi, nanti kita bisa instansiasi
    kelas turunannya.
    2. Abstract Class Ini bisa juga kita sebut kelas 'abstrak', kenapa? ya karena tadi tidak dapat di instansiasi,
    yang nanti akan menjadi class sesungguhnya adalah class-class turunannya.
    3. Abstract Class ini akan mendefinisikan interface untuk kelas turunannya, apa itu interface? nanti kita liat.
    4. Abstract Class ini juga nantinya akan berperan sebagai 'kerangka dasar' untuk kelas turunannya.Nah ini saling terkait ya
    jadi class-class turunannya itu akan bekerja sesuai dengan kerangka atau interface yang sudah kita buat dikelas abstract.
    5. Di dalam Abstract Class ini harus memiliki minimal 1 method abstract, dan nanti method ini yang akan kita anggap sebagai interface atau kerangka dari
    method yang akan kita buat di class-class turunannya. 
    6. Abstract Class digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan' implementasi dari method abstrak yang sama
    untuk semua class turunannya.
    Jadi gini, Di dalam Class Abstrak nanti kita punya sebuah method abstrak yang hanya interfacenya saja, hanya namanya saja, gaada isinya. Nah Isinya
    nanti kita tuliskan di kelas kelas turunannya dengan menggunakan method yang namanya sama.
 
    Definisi 2 : 
    1. Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya.
    2. Kelas Abstrak boleh memiliki property / method reguler.
    3. kelas Abstrak boleh memiliki property / static method.


    Contoh Kelas Abstrak :
    - class Mobil Extends Kendaraan
    - class Laptop Extends Komputer
    - class Email Extends Komunikasi

    Kenapa menggunakan kelas Abstrak?
    1. Merepresentasikan ide atau konsep dasar.
    2. "Composition over Inheritance".
    3. Salah satu cara menerapkan Polomorphism.
    4. Sentralisasi logic
    5. Mempermudah pengerjaan tim

    
-->
<!-- Contoh Kasus -->
<?php 

abstract class Buah { // -> Buah = Class Abstrak
    private $warna;

    // abstract public function makan() {
    //     // kunyah
    //     // nyam.. nyam.. nyam...
    // }
    abstract public function makan(); // -> method Abstrak, hanya nama/interfacenya saja, dan isi/implementasinya, ada di kelas turunannya.

    public function setWarna($warna) {
        $this->warna = $warna;
     }
} 

class Apel extends Buah {
    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
}

class Jeruk extends Buah {
    public function makan() {
        // kupas
        // kunyah
    }
}

?>













