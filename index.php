<?php

class Pakaian {
    protected $merk;
    protected $ukuran;

    public function __construct($merk, $ukuran) {
        echo "Selamat datang!<br>";
        $this->merk = $merk;
        $this->ukuran = $ukuran;
    }

    public function __destruct() {
        echo "<br>Selamat jalan!";
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function ada() {
        echo "Pakaian tersedia.<br>";
    }
}

class Baju extends Pakaian {
    public function ada() {
        echo "Baju tersedia.<br>";
    }
}

class Celana extends Pakaian {
    public function ada() {
        echo "Celana tersedia.<br>";
    }
}

class PakaianDalam extends Pakaian {
    public function cuci() {
        echo "Pakaian dalam sedang dicuci, sebaiknya tidak usah memakai.<br>";
    }
}

$baju = new Baju("Adidas", "L");
echo "Merk Baju: " . $baju->getMerk() . ", Ukuran: " . $baju->getUkuran() . ".<br>";
$baju->ada(); 

$celana = new Celana("Levi's", "32");
echo "Merk Celana: " . $celana->getMerk() . ", Ukuran: " . $celana->getUkuran() . ".<br>";
$celana->ada(); 

$pakaianDalam = new PakaianDalam("Calvin Klein", "M");
echo "Merk Pakaian Dalam: " . $pakaianDalam->getMerk() . ", Ukuran: " . $pakaianDalam->getUkuran() . ".<br>";
$pakaianDalam->cuci(); 

?>
