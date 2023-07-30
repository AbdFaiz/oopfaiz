<?php

class Pakaian {
    public $merk;
    protected $warna;
    private $ukuran;

    public function __construct($merk, $warna, $ukuran) {
        echo "Selamat datang!<br>";
        $this->merk = $merk;
        $this->warna = $warna;
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

    public function setWarna($warna) {
    $this->warna = $warna;
    }

    public function getWarna() {
    return $this->warna;
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

$baju = new Baju("Adidas","Hitam", "L");
echo "Merk Baju: " . $baju->getMerk() . ", Warna: " .$baju->getWarna() . ", Ukuran: " . $baju->getUkuran() . ".<br>";
$baju->ada(); 

echo"<br>";

$celana = new Celana("Levi's","Putih", "32");
echo "Merk Celana: " . $celana->getMerk() .  ", Warna: " .$celana->getWarna() . ", Ukuran: " . $celana->getUkuran() . ".<br>";
$celana->ada();

echo"<br>";

$pakaianDalam = new PakaianDalam("Calvin Klein","Hijau", "M");
echo "Merk Pakaian Dalam: " . $pakaianDalam->getMerk() .  ", Warna: " .$pakaianDalam->getWarna() . ", Ukuran: " . $pakaianDalam->getUkuran() . ".<br>";
$pakaianDalam->cuci(); 

?>
