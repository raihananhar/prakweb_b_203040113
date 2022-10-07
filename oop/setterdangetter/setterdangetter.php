<?php

// Jualan produk
// Komik
// Game


class Produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        // if ( !is_string($judul)) {
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0, $jmlHalaman = "jmlHalaman") {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0, $waktuMain = "waktuMain") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("One piace", "Eichiro oda", "RED", 60000, 100);

$produk2 = new Game("GOD OF WAR", "David jaffe", "Sony Computer", 250000, 50);

// Komik : One Piace | Eichiro oda, Red (Rp. 60000) - 100 Halaman.
// Game : God of war | David jaffe, Sony Computer (Rp. 250000) - 50 jam.


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";
$produk1->setJudul("Judul Baru");
echo $produk1->getJudul();

?>