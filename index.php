<?php

// Parent class: Pakaian
class Pakaian {
    // Property
    protected $merk;
    protected $ukuran;

    // Constructor
    public function __construct($merk, $ukuran) {
        echo "Selamat datang!<br>";
        $this->merk = $merk;
        $this->ukuran = $ukuran;
    }

    // Destructor
    public function __destruct() {
        echo "<br>Selamat jalan!";
    }

    // Setter dan Getter untuk property merk
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    // Setter dan Getter untuk property ukuran
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    // Method umum untuk pakaian
    public function ada() {
        echo "Pakaian sedang tersedia.<br>";
    }
}

// Child class: Baju (inheritance dari Pakaian)
class Baju extends Pakaian {
    // Polymorphism: override method cuci
    public function ada() {
        echo "Baju sedang tersedia.<br>";
    }
}

// Child class: Celana (inheritance dari Pakaian)
class Celana extends Pakaian {
    // Polymorphism: override method cuci
    public function ada() {
        echo "Celana sedang dicuci.<br>";
    }
}

// Child class: PakaianDalam (inheritance dari Pakaian)
class PakaianDalam extends Pakaian {
    // Polymorphism: override method cuci
    public function cuci() {
        echo "Pakaian dalam sedang dicuci, sebaiknya tidak usah memakai.<br>";
    }
}

// Membuat objek Baju
$baju = new Baju("Adidas", "L");
echo "Merk Baju: " . $baju->getMerk() . ", Ukuran: " . $baju->getUkuran() . ".<br>";
$baju->ada(); // Memanggil method cuci yang sudah di-override

// Membuat objek Celana
$celana = new Celana("Levi's", "32");
echo "Merk Celana: " . $celana->getMerk() . ", Ukuran: " . $celana->getUkuran() . ".<br>";
$celana->ada(); // Memanggil method cuci yang sudah di-override

// Membuat objek PakaianDalam
$pakaianDalam = new PakaianDalam("Calvin Klein", "M");
echo "Merk Pakaian Dalam: " . $pakaianDalam->getMerk() . ", Ukuran: " . $pakaianDalam->getUkuran() . ".<br>";
$pakaianDalam->cuci(); // Memanggil method cuci yang sudah di-override

?>
